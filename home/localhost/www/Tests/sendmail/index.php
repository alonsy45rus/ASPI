<?
$body="<html>
<head><title>Проверка отладочной заглушки для sendmail</title></head>
<body>";


@extract($_SERVER, EXTR_SKIP); @extract($_POST, EXTR_SKIP); @extract($_GET, EXTR_SKIP);
if(!@$to) $to="me@somehost.ru";
if(!@$subject) $subject="Congratulations!";
if(!@$bodytext) $bodytext="Hello!\nToday is ".date("Y-m-d").".\nThis is the test\nmail body.\n\nIf you see this, sendmail stub seems to be OK.";
?>
<?
$body=$body."<form action=".$_SERVER["REQUEST_URI"]." method=POST>";
if (empty($_GET['noform'])) {
$body=$body."Послать тестовое письмо:
	<table border='0' align='center' cellpadding='0' cellspacing='0'>
	<tr valign=top>
		<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>To:</td>
		<td><input type=text name=to value=".HtmlSpecialChars($to)."></td>
	</tr>
	<tr valign=top>
		<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>Subject:</td>
		<td><input type=text name=subject value=".HtmlSpecialChars($subject)."></td>
	</tr>
	<tr valign=top>
		<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>Текст:</td>
		<td><textarea name=body cols=50 rows=4>".HtmlSpecialChars($bodytext)."</textarea></td>
	</tr>
	<tr valign=top>
		<td colspan=2>
			<input type=submit name=doSendSendmail value='Послать через mail() (sendmail)'>
			<input type=submit name=doSendSmtp value='Послать через fsockopen() (SMTP)'>
			<input type=submit name=doDel value='Очистить отладочную директорию'>
		</td>
	</tr>
	</table>";
} else {
	$body=$body."<input type=submit name=doDel value='Очистить отладочную директорию'>";
}
$body=$body."</form>";


$dir = "/tmp/!sendmail";

if (@$doDel) {
	if ($d = @opendir($dir)) {
		while (false !== ($e = readdir($d))) {
			if ($e[0] == ".") continue;
			unlink("$dir/$e");
		}
	}
	//echo "<h3>Письма удалены.</h3>";
}

if (@$doSendSendmail) {
	$answer=$answer."Посылаем письмо через mail()...\n";
	if (mail($to,$subject,$bodytext,"From: \"PHP mail()\" <mail@php.net>")) {
		$answer=$answer."OK, функция mail() сработала корректно.<br>\n";
	} else {
		$answer=$answer."При вызове mail() произошла ошибка.<br>\n";
	}
}

if (@$doSendSmtp) {
	function waitAnswer($f) {
		fread($f, 128);
	}
	$answer=$answer."Посылаем письмо...\n";
	$f = fsockopen('localhost', 25, $errno, $errstr, 3);
	if ($f) {
		fwrite($f, "HELO localhost\r\n");
		waitAnswer($f);
		fwrite($f, "RCPT TO: test@example.com\r\n");
		waitAnswer($f);
		fwrite($f, "DATA\r\n");
		waitAnswer($f);
		fwrite($f, "From: test <test@example.com>\r\n");
		fwrite($f, "To: test <test@example.com>\r\n");
		fwrite($f, "Subject: Testing mail\r\n");
		fwrite($f, "\r\n");
		fwrite($f, "This is a test mail sent via fsockopen().\r\n");
		fwrite($f, "Today is " . date("r") . ".\r\n");
		fwrite($f, ".\r\n");
		waitAnswer($f);
		fwrite($f, "QUIT\r\n");
		waitAnswer($f);
	}
	if ($f && fclose($f)) {
		$answer=$answer."OK, письмо отправлено успешно.<br>\n";
		sleep(1); // wait for mail is arrived
	} else {
		$answer=$answer."При соединении с сервером произошла ошибка.<br>\n";
	}
}


$d = @opendir($dir);
if ($d) {
	$answer=$answer."Отосланные письма в директории <tt>$dir</tt>\n";
	$answer=$answer."<br>Каждое письмо хранится в отдельном файле с расширением .eml. Это очень удобно, т.к. позволяет открыть такой файл в Outlook и просмотреть, как письмо выглядит с учетом всех перекодировок и преобразований.";
	$list = array();
	while (false !== ($e = readdir($d))) {
		if ($e[0] == ".") continue;
		$list[] = "$dir/$e";
	}
	rsort($list);

	if ($list) {
		foreach ($list as $fname) {
			$f = @fopen($fname, "r"); if (!$f) continue;
			$answer=$answer."Файл <tt>$fname</tt>:\n";
			$answer=$answer."<pre>\n";
			$answer=$answer.HtmlSpecialChars(fread($f,filesize($fname)));
			$answer=$answer."</pre>\n";
			$answer=$answer."<hr>";
		}
	} else {
		$answer= "Директория пуста.";
	}
}









$scripts="<script src='../../../../../endels/js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('../../../../../endels/images/bt1_f.png','../../../../../endels/images/bt2_f.png','../../../../../endels/images/bt3_f.png','../../../../../endels/images/bt4_f.png','../../../../../endels/images/bt5_f.png','../../../../../endels/images/apache_f.png','../../../../../endels/images/myadmin_f.png','../../../../../endels/images/php_f.png','../../../../../endels/images/mysql_f.png')'>";
$title="Endels - локальная версия";

$kav='"';
$button1="<a href='http://localhost/Tools/phpmyadmin/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image1','','../../../../../endels/images/bt1_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/bt1.png' width='278' height='45' alt='' class='bt_2' id='Image1' /></a>";
$button2="<a href='http://localhost/endels/Tools/addmuser/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image2','','../../../../../endels/images/bt2_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/bt2.png' width='278' height='45' alt='' class='bt_2' id='Image2' /></a>";
$button3="<img border='0' src='../../../../../endels/images/bt3_f.png' width='278' height='45' alt='' class='bt_2' id='Image3' />";
$button4="<a href='http://localhost/endels/Tools/sitelist/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image4','','../../../../../endels/images/bt4_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/bt4.png' width='278' height='45' alt='' class='bt_2' id='Image4' /></a>";
$button5="<a href='http://localhost/endels/yourhelp.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image5','','../../../../../endels/images/bt5_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/bt5.png' width='278' height='45' alt='' class='bt_2' id='Image5' /></a>";

$apache="<a href='http://localhost/endels/apache.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image6','','../../../../../endels/images/apache_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/apache.png' width='115' height='52' alt='' class='bt_2' id='Image6' /></a>";
$mysql="<a href='http://localhost/endels/mysql.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image7','','../../../../../endels/images/mysql_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/mysql.png' width='120' height='52' alt='' class='bt_2' id='Image7' /></a>";
$php="<a href='http://localhost/endels/php.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image8','','../../../../../endels/images/php_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/php.png' width='111' height='52' alt='' class='bt_2' id='Image8' /></a>";
$myadmin="<a href='http://localhost/endels/myadmin.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image9','','../../../../../endels/images/myadmin_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/myadmin.png' width='95' height='52' alt='' class='bt_2' id='Image9' /></a>";

$head="<img src='../../../../../endels/images/panel.png' width='766' height='34' alt=''>";
include("../../../../../endels/www/endels/html/footer.php");
include("requisits.php");
include("../../../../../endels/www/endels/html/head.php");

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
			<img src="../../../../../endels/images/01.png" width="301" height="158" alt=""></td>
		<td colspan="5">
			<img src="../../../../../endels/images/02.png" width="465" height="158" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="158" alt=""></td>
	</tr>
	<tr>
		<td colspan="8">$head</td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="34" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="2">$button1</td>
		<td colspan="6">
			<img src="../../../../../endels/images/05.png" width="488" height="8" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="8" alt=""></td>
	</tr>
	<tr>
		<td rowspan="12">
			<img src="../../../../../endels/images/06.png" width="23" height="629" alt=""></td>
		<td colspan="4" rowspan="10">
			<img src="../../../../../endels/images/07.png" width="441" height="542" alt=""></td>
		<td rowspan="14">
			<img src="../../../../../endels/images/08.png" width="24" height="750" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="37" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../../../../endels/images/09.png" width="278" height="16" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button2</td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../../../../endels/images/11.png" width="278" height="16" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button3</td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../../../../endels/images/13.png" width="278" height="16" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="16" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button4</td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">
			<img src="../../../../../endels/images/15.png" width="278" height="15" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="15" alt=""></td>
	</tr>
	<tr>
		<td colspan="2">$button5</td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="45" alt=""></td>
	</tr>
	<tr>
		<td colspan="2" rowspan="3">
			<img src="../../../../../endels/images/17.png" width="278" height="349" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="262" alt=""></td>
	</tr>
	<tr>
		<td colspan="4">
			<img src="../../../../../endels/images/18.png" width="441" height="35" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="35" alt=""></td>
	</tr>
	<tr>
		<td>$apache</td>
		<td>$mysql</td>
		<td>$php</td>
		<td>$myadmin</td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="52" alt=""></td>
	</tr>
	<tr>
		<td rowspan="2">
			<img src="../../../../../endels/images/23.png" width="17" height="121" alt=""></td>
		<td>
			<img src="../../../../../endels/images/24.png" width="261" height="91" alt=""></td>
		<td colspan="5">
			<img src="../../../../../endels/images/25.png" width="464" height="91" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="91" alt=""></td>
	</tr>
	<tr>
		<td colspan="6">
			<img src="../../../../../endels/images/26.png" width="725" height="30" alt=""></td>
		<td>
			<img src="../../../../../endels/images/spacer.gif" width="1" height="30" alt=""></td>
	</tr>
</table>
<div style="position: absolute; left: 320px;  top: 206px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$body<br>$answer</div>
<div style="position: absolute; left: 80px;  top: 810px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$donate</div>
<div style="position: absolute; left: 516px;  top: 850px; width: 450px; text-align: justify; color:#ffffff; font-size:12px; font-family:Verdana, Geneva, sans-serif;">$emails</div>
</div>
</body>
</html>

HERE;





?>

</body>
</html>
