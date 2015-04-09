<?php

@extract($_SERVER, EXTR_SKIP); @extract($_POST, EXTR_SKIP); @extract($_GET, EXTR_SKIP);
if (@$doGo) {
  do {
    if (!@mysql_connect("localhost", "root", $rootpass)) {
      $eBadRootPass = mysql_error();
      break;
    }
    SetCookie("mysqlpass", $rootpass, time()+3600*24*365*5);

    if ($db=="" || !preg_match('/^[a-z0-9_]+$/i',$db)) {
      $eBadDb = 1; break;
    }
    if ($login=="" || !preg_match('/^[a-z0-9_]+$/i',$login)) {
      $eBadUser = 1; break;
    }
    if ($password!=$password1) {
      $eBadPass = 1; break;
    }
    
    // Create database.
    if (!@mysql_query("CREATE DATABASE `$db`")) {
      $eDBExists = 1; break;
    }
    mysql_select_db("mysql");

    // Search for user.
    $r = @mysql_query("select * from user where user='$login'");
    if (@mysql_num_rows($r)) {
      $eUserExists=1; break;
    }

    // Insert user entry.
    $sql = "
      INSERT INTO user (Host,        User,     Password,              File_priv) 
      VALUES           ('localhost', '$login', PASSWORD('$password'), 'Y'      )
    ";
    if (!mysql_query($sql)) {
      $eSqlError = mysql_error(); break;
    }

    // Insert DB entry.
    $sql = "
      INSERT INTO db (
        Host, Db, User, 
        Select_priv, Insert_priv, Update_priv, Delete_priv, Create_priv, Drop_priv, Grant_priv, References_priv, Index_priv, Alter_priv, Create_tmp_table_priv, Lock_tables_priv 
      ) VALUES (
        'localhost', '$db', '$login',
        'Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y','Y'
      )
    ";
    if (!mysql_query($sql)) {
      $eSqlError = mysql_error(); break;
    }

    // Reload MySQL.
    mysql_query("FLUSH PRIVILEGES");

    $eOK = 1;
  } while(0);
}
if (!isSet($rootpass)) $rootpass=@$mysqlpass;
?>
<?$TITLE="Заведение новых БД и пользователей MySQL"?>

<?if(@$eOK) {?>
  <h2>База данных и новый пользователь заведены.</h2>
<?}?>

<?
$kav='"';
$body="
<form name=Form action=<?=$SCRIPT_NAME?> method=POST>

<table width=70% cellpadding=5 cellspacing=2>
<tr valign=top>
  <td colspan=2>
    <font size=-1>
    <p>Большинство хостинг-провайдеров при регистрации в MySQL выдают 
    пользователям доступ к персональной базе данных. При этом 
    сообщается также логин и пароль доступа. Логин чаще всего совпадает 
    с именем базы данных. Настоящий скрипт поможет вам создать
    пользователя на локальной машине и назначить ему такие же параметры, какие
    выдал вам хостинг-провайдер. Это сильно поможет при отладке Web-приложений.
    </p>
  </td>
</tr>
<tr bgcolor=EEEEEE valign=top>
  <td><nobr>Пароль администратора MySQL:</td>
  <td>
    <input type=password size=30 name=rootpass value=".$kav.@HtmlSpecialChars($rootpass).$kav.">";

    if(@$eBadRootPass) {
      $body=$body."<br><font color=red size=2>Ошибка: ".$kav.$eBadRootPass.$kav.".";
    }
  $body=$body."</td>
</tr>
<tr bgcolor=EEEEEE valign=top>
  <td>Имя базы данных:</td>
  <td>
    <input type=text size=30 name=db value=".$kav.@HtmlSpecialChars($db).$kav.">";
    if(@$eBadDb) {
      $body=$body."<br><font color=red size=2>Ошибка: недопустимое имя базы данных.</font>";
    }
    if(@$eDBExists) {
      $body=$body."<br><font color=red size=2>Ошибка: такая база данных уже есть.</font>";
    }
  $body=$body."</td>
</tr>
<tr bgcolor=E5E5E5 valign=top>
  <td>Логин пользователя:</td>
  <td>
    <input type=text size=30 name=login value=".$kav.@HtmlSpecialChars($login).$kav." onChange=".$kav."chg=true;".$kav." onFocus=".$kav."chg=true;".$kav.">";
    if(@$eBadUser) {
      $body=$body."<br><font color=red size=2>Ошибка: недопустимое имя пользователя.</font>";
    }
    
    if(@$eSqlError) {
      $body=$body."<br><font color=red size=2>Ошибка SQL: ".$eSqlError.".</font>";
    }
    
    if(@$eUserExists) {
      $body=$body."<br><font color=red size=2>Ошибка: такой пользователь уже есть.</font>";
    }
  $body=$body."</td>
</tr>
<tr bgcolor=EEEEEE valign=top>
  <td>Пароль:</td>
  <td><input type=password size=30 name=password value=".$kav.@HtmlSpecialChars($password).$kav."></td>";
$body=$body."</tr>
<tr bgcolor=E5E5E5 valign=top>
  <td>...еще раз:</td>
  <td>
    <input type=password size=30 name=password1 value=".$kav.@HtmlSpecialChars($password1).$kav.">";
    if(@$eBadPass) {
      $body=$body."<br><font color=red size=2>Ошибка: пароли не совпадают.";
    }
  $body=$body."</td>
</tr>
<tr bgcolor=FFFFFF valign=top>
  <td>&nbsp;</td>
  <td><input type=submit name=doGo value='Создать БД и пользователя'></td>
</tr>
<tr valign=top>
  <td colspan=2>
    <font size=-1>
    <p><b>Примечание</b>: пароль администратора MySQL по умолчанию пустой.
    </p>
  </td>
</tr>
</table>
</form>


<script language=JavaScript>
<!--
var chg=document.Form.login.value!=document.Form.db.value;
function Sync() {
  var form=document.Form;
  if(!chg) {
    form.login.value=form.db.value;
    setTimeout(".$kav."Sync()".$kav.",100);
  }
}
Sync();
//-->
</script>    
";












print <<<HERE
<style type=text/css>
html,body{
height:100%;
margin:0px;
padding:0px
}
</style>

<div style="border: 0; position: absolute; left: 50%;  top: 0px; margin-left: -411px; width: 822px; hight: 241px;">
<table id="main" width="767" height="950" align="center" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="3">
			<img src="../../../images/01.png" width="301" height="158" alt=""></td>
		<td colspan="5">
			<img src="../../../images/02.png" width="465" height="158" alt=""></td>
		<td>
			<img src="../../../images/spacer.gif" width="1" height="158" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">$head</td>
		<td>
			<img src="images/spacer.gif" width="1" height="34" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">$button1</td>
		<td colspan="6">
			<img src="images/05.png" width="488" height="8" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr>
		<td rowspan="12">
			<img src="images/06.png" width="23" height="629" alt=""></td>
		<td colspan="4" rowspan="10">
			<img src="images/07.png" width="441" height="542" alt=""></td>
		<td rowspan="14">
			<img src="images/08.png" width="24" height="750" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="37" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/09.png" width="278" height="16" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button2</td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/11.png" width="278" height="16" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button3</td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/13.png" width="278" height="16" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button4</td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="images/15.png" width="278" height="15" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="15" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button5</td>
		<td>
			<img src="images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="3">
			<img src="images/17.png" width="278" height="349" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="262" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="images/18.png" width="441" height="35" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td>$apache</td>
		<td>$mysql</td>
		<td>$php</td>
		<td>$myadmin</td>
		<td>
			<img src="images/spacer.gif" width="1" height="52" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="images/23.png" width="17" height="121" alt=""></td>
		<td>
			<img src="images/24.png" width="261" height="91" alt=""></td>
		<td colspan="5">
			<img src="images/25.png" width="464" height="91" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="91" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="images/26.png" width="725" height="30" alt=""></td>
		<td>
			<img src="images/spacer.gif" width="1" height="30" alt=""></td>
	</tr>
</table>
<div style="position: absolute; left: 320px;  top: 206px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$body</div>
<div style="position: absolute; left: 60px;  top: 795px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$donate</div>
<div style="position: absolute; left: 516px;  top: 850px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$emails</div>
</div>
</body>
</html>

HERE;
?>