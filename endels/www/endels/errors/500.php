<?
$body="
<br>
<table border='0' align='center' cellpadding='0' cellspacing='0'>
<tr><td align='center' style='color:#ffffff; font-size:22px;'><h1>Error 500<h1></td></tr>
</table>

&nbsp&nbspThe server encountered an internal error or misconfiguration and was unable to complete
your request.<br>

&nbsp&nbspВероятнее всего, скрипт, который запускает данная страница, не смог корректно 
выполниться. <b>Детально причины ошибки должны быть описаны</b> в файле 
<tt>".dirname($_SERVER['DOCUMENT_ROOT'])."/error.log</tt>.

<p>Вот наиболее частые причины 500-й ошибки: 
<br>
&nbsp&nbsp1. В скрипте имеются ошибки. Например, каждый скрипт должен выводить заголовок <tt>Content-Type</tt> 
перед началом печати страницы.
<br>
Корректные пути к CGI-директориям следующие:";
include ("_pathes.php");
$body=$body."
<br>&nbsp&nbsp2. Вы не установили некоторые библиотеки, которые необходимы скрипту. 
Для Perl-скриптов: установите пакет с библиотеками Perl. 
<br>&nbsp&nbsp3. Вы указали неправильную первую строчку в скрипте, по которой Apache определяет путь 
к интерпретатору. Первая строка должна быть: <br>
для Perl: <br>
#!/usr/bin/perl -w  или #!/usr/local/bin/perl -w 
<br>
для PHP: <br>
#!/usr/bin/php или #!/usr/local/bin/php 
<br>&nbsp&nbspЗдесь указывается путь относительно корня до файлов <tt>perl.exe</tt> и <tt>php.exe</tt> 
соответственно (расширение <tt>exe</tt> и буква диска опускаются для совместимости с Unix). 

<br>&nbsp&nbsp4. В текущей директории расположен файл <tt>.htaccess</tt> с ошибочными директивами. 
";





$scripts="<script src='../../../../../endels/js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('../../../../../endels/images/bt1_f.png','../../../../../endels/images/bt2_f.png','../../../../../endels/images/bt3_f.png','../../../../../endels/images/bt4_f.png','../../../../../endels/images/bt5_f.png','../../../../../endels/images/apache_f.png','../../../../../endels/images/myadmin_f.png','../../../../../endels/images/php_f.png','../../../../../endels/images/mysql_f.png')'>";
$title="Endels - локальная версия";

$kav='"';
$button1="<a href='http://localhost/Tools/phpmyadmin/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image1','','../../../../../endels/images/bt1_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/bt1.png' width='278' height='45' alt='' class='bt_2' id='Image1' /></a>";
$button2="<a href='http://localhost/endels/Tools/addmuser/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image2','','../../../../../endels/images/bt2_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/bt2.png' width='278' height='45' alt='' class='bt_2' id='Image2' /></a>";
$button3="<a href='http://localhost/Tests/sendmail/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image3','','../../../../../endels/images/bt3_f.png',1)".$kav."><img border='0' src='../../../../../endels/images/bt3.png' width='278' height='45' alt='' class='bt_2' id='Image3' /></a>";
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