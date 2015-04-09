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
<form width='130' name=Form action=".$SCRIPT_NAME." method=POST>

<table border='0' align='center' cellpadding='0' cellspacing='0'>
<tr valign=top>
  <td colspan=2 align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>
    <font size=-1>
    <div align='justify'><p>&nbsp&nbspБольшинство хостинг-провайдеров при регистрации в MySQL выдают 
    пользователям доступ к персональной базе данных. При этом 
    сообщается также логин и пароль доступа. Логин чаще всего совпадает 
    с именем базы данных. Настоящий скрипт поможет вам создать
    пользователя на локальной машине и назначить ему такие же параметры, какие
    выдал вам хостинг-провайдер. Это сильно поможет при отладке Web-приложений.<br><br></div>
    </p>
  </td>
</tr>
<tr bgcolor=EEEEEE valign=top>
  <td  align='left' style='color:#000000; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><nobr>&nbsp&nbspПароль администратора MySQL:</td>
  <td>
    <input type=password size=30 name=rootpass value=".$kav.@HtmlSpecialChars($rootpass).$kav.">";

    if(@$eBadRootPass) {
      $body=$body."<br><font color=red size=2>Ошибка: ".$kav.$eBadRootPass.$kav.".";
    }
  $body=$body."</td>
</tr>
<tr bgcolor=EEEEEE valign=top>
  <td align='left' style='color:#000000; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp&nbspИмя базы данных:</td>
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
  <td  align='left' style='color:#000000; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp&nbspЛогин пользователя:</td>
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
  <td  align='left' style='color:#000000; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp&nbspПароль:</td>
  <td><input type=password size=30 name=password value=".$kav.@HtmlSpecialChars($password).$kav."></td>";
$body=$body."</tr>
<tr bgcolor=E5E5E5 valign=top>
  <td  align='left' style='color:#000000; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp&nbsp...еще раз:</td>
  <td>
    <input type=password size=30 name=password1 value=".$kav.@HtmlSpecialChars($password1).$kav.">";
    if(@$eBadPass) {
      $body=$body."<br><font color=red size=2>Ошибка: пароли не совпадают.";
    }
  $body=$body."</td>
</tr>
<tr bgcolor=FFFFFF valign=top>
  <td>&nbsp;</td>
  <td><input type=submit name=doGo value='Создать'></td>
</tr>
<tr valign=top>
  <td colspan=2   align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>
    <br><br><font size=-1>
    <div align='justify'>&nbsp&nbsp<b>Примечание</b>: пароль администратора MySQL по умолчанию пустой.
    &nbsp&nbsp<b>Примечание2</b>: новых пользователей и Базы Данных можно создавать с помощью PHPMyAdmin.</div>
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



  
  
$scripts="<script src='../../js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('../../images/bt1_f.png','../../images/bt2_f.png','../../images/bt3_f.png','../../images/bt4_f.png','../../images/bt5_f.png','../../images/apache_f.png','../../images/myadmin_f.png','../../images/php_f.png','../../images/mysql_f.png')'>";
$title="Endels - локальная версия";

$kav='"';
$button1="<a href='http://localhost/Tools/phpmyadmin/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image1','','../../images/bt1_f.png',1)".$kav."><img border='0' src='../../images/bt1.png' width='278' height='45' alt='' class='bt_2' id='Image1' /></a>";
$button2="<img border='0' src='../../images/bt2_f.png' width='278' height='45' alt='' class='bt_2' id='Image2' />";
$button3="<a href='http://localhost/Tests/sendmail/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image3','','../../images/bt3_f.png',1)".$kav."><img border='0' src='../../images/bt3.png' width='278' height='45' alt='' class='bt_2' id='Image3' /></a>";
$button4="<a href='http://localhost/endels/Tools/sitelist/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image4','','../../images/bt4_f.png',1)".$kav."><img border='0' src='../../images/bt4.png' width='278' height='45' alt='' class='bt_2' id='Image4' /></a>";
$button5="<a href='../../yourhelp.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image5','','../../images/bt5_f.png',1)".$kav."><img border='0' src='../../images/bt5.png' width='278' height='45' alt='' class='bt_2' id='Image5' /></a>";

$apache="<a href='../../apache.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image6','','../../images/apache_f.png',1)".$kav."><img border='0' src='../../images/apache.png' width='115' height='52' alt='' class='bt_2' id='Image6' /></a>";
$mysql="<a href='../../mysql.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image7','','../../images/mysql_f.png',1)".$kav."><img border='0' src='../../images/mysql.png' width='120' height='52' alt='' class='bt_2' id='Image7' /></a>";
$php="<a href='../../php.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image8','','../../images/php_f.png',1)".$kav."><img border='0' src='../../images/php.png' width='111' height='52' alt='' class='bt_2' id='Image8' /></a>";
$myadmin="<a href='../../myadmin.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image9','','../../images/myadmin_f.png',1)".$kav."><img border='0' src='../../images/myadmin.png' width='95' height='52' alt='' class='bt_2' id='Image9' /></a>";

$head="<img src='../../images/panel.png' width='766' height='34' alt=''>";
include("../../html/footer.php");
include("../../html/requisits_alt.php");
include("../../html/head.php");

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
			<img src="../../images/01.png" width="301" height="158" alt=""></td>
		<td colspan="5">
			<img src="../../images/02.png" width="465" height="158" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="158" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">$head</td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="34" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">$button1</td>
		<td colspan="6">
			<img src="../../images/05.png" width="488" height="8" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr>
		<td rowspan="12">
			<img src="../../images/06.png" width="23" height="629" alt=""></td>
		<td colspan="4" rowspan="10">
			<img src="../../images/07.png" width="441" height="542" alt=""></td>
		<td rowspan="14">
			<img src="../../images/08.png" width="24" height="750" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="37" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../images/09.png" width="278" height="16" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button2</td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../images/11.png" width="278" height="16" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button3</td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../images/13.png" width="278" height="16" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button4</td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../images/15.png" width="278" height="15" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="15" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button5</td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="3">
			<img src="../../images/17.png" width="278" height="349" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="262" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="../../images/18.png" width="441" height="35" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td>$apache</td>
		<td>$mysql</td>
		<td>$php</td>
		<td>$myadmin</td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="52" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="../../images/23.png" width="17" height="121" alt=""></td>
		<td>
			<img src="../../images/24.png" width="261" height="91" alt=""></td>
		<td colspan="5">
			<img src="../../images/25.png" width="464" height="91" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="91" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="../../images/26.png" width="725" height="30" alt=""></td>
		<td>
			<img src="../../images/spacer.gif" width="1" height="30" alt=""></td>
	</tr>
</table>
<div style="position: absolute; left: 320px;  top: 206px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$body</div>
<div style="position: absolute; left: 80px;  top: 810px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$donate</div>
<div style="position: absolute; left: 516px;  top: 850px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$emails</div>
</div>
</body>
</html>

HERE;

?>