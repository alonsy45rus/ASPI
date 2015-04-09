<?php
$scripts="<script src='js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('images/bt2_f.png','images/bt3_f.png','images/bt4_f.png','images/bt5_f.png','images/apache_f.png','images/myadmin_f.png','images/php_f.png','images/mysql_f.png')'>";
$title="Endels - локальная версия";


$body=
"<br>
<table border='0' align='center' cellpadding='0' cellspacing='0'>
<tr>
<td align='center' style='color:#ffffff; font-size:16px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>
<b>Поздравляем с успешной установкой!<br>Веб-сервер работает локально!</b>
</td>
</tr>
</table>
<br><br>

<table border='0' align='left' cellpadding='0' cellspacing='0'>
<tr>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><b>PHPMyAdmin</b></td>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><div align='justify'>веб-интерфейс для администрирования СУБД MySQL. phpMyAdmin позволяет через браузер осуществлять администрирование сервера MySQL, создавать новые БД, таблицы,  запускать команды SQL и просматривать содержимое таблиц и баз данных.</div></td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><b>Новая БД и пользователи</b></td>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><div align='justify'>скрипт поможет вам создать пользователя на локальной машине и назначить ему такие же параметры, какие выдал вам хостинг-провайдер. Это сильно поможет при отладке Web-приложений.</div></td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><b>Sendmail</b></td>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><div align='justify'>проверка локальной отправки писем (sendmail и SMTP). Каждое письмо хранится в отдельном файле с расширением .eml. Это очень удобно, т.к. позволяет открыть такой файл в Outlook и просмотреть, как письмо выглядит с учетом всех перекодировок и преобразований.</div></td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><b>Сайты</b></td>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><div align='justify'>список зарегистрированных сайтов.</div></td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
<td align='left' style='color:#ffffff; font-size:10px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'>&nbsp</td>
</tr>
<tr>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><b>Ваша поддержка</b></td>
<td align='left' style='color:#ffffff; font-size:12px; font-family: Trebuchet MS, Arial, Helvetica, sans-serif;'><div align='justify'>если вам нравится Endels - поддержите проект! Помогите сделать его лучше!</div></td>
</tr>
</table>

";


$kav='"';
$button1="<a href='http://localhost/Tools/phpmyadmin/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image1','','images/bt1_f.png',1)".$kav."><img border='0' src='images/bt1.png' width='278' height='45' alt='' class='bt_2' id='Image1' /></a>";
$button2="<a href='http://localhost/endels/Tools/addmuser/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image2','','images/bt2_f.png',1)".$kav."><img border='0' src='images/bt2.png' width='278' height='45' alt='' class='bt_2' id='Image2' /></a>";
$button3="<a href='http://localhost/Tests/sendmail/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image3','','images/bt3_f.png',1)".$kav."><img border='0' src='images/bt3.png' width='278' height='45' alt='' class='bt_2' id='Image3' /></a>";
$button4="<a href='http://localhost/endels/Tools/sitelist/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image4','','images/bt4_f.png',1)".$kav."><img border='0' src='images/bt4.png' width='278' height='45' alt='' class='bt_2' id='Image4' /></a>";
$button5="<a href='yourhelp.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image5','','images/bt5_f.png',1)".$kav."><img border='0' src='images/bt5.png' width='278' height='45' alt='' class='bt_2' id='Image5' /></a>";

$apache="<a href='apache.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image6','','images/apache_f.png',1)".$kav."><img border='0' src='images/apache.png' width='115' height='52' alt='' class='bt_2' id='Image6' /></a>";
$mysql="<a href='mysql.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image7','','images/mysql_f.png',1)".$kav."><img border='0' src='images/mysql.png' width='120' height='52' alt='' class='bt_2' id='Image7' /></a>";
$php="<a href='php.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image8','','images/php_f.png',1)".$kav."><img border='0' src='images/php.png' width='111' height='52' alt='' class='bt_2' id='Image8' /></a>";
$myadmin="<a href='myadmin.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image9','','images/myadmin_f.png',1)".$kav."><img border='0' src='images/myadmin.png' width='95' height='52' alt='' class='bt_2' id='Image9' /></a>";

$head="<img src='images/panel.png' width='766' height='34' alt=''>";
include("html/footer.php");
include("html/requisits.php");
include("html/head.php");
include("html/body.php");


?>
<body>
