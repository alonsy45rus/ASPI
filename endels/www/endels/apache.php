<?php
$scripts="<script src='js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('images/bt1_f.png','images/bt2_f.png','images/bt3_f.png','images/bt4_f.png','images/bt5_f.png','images/apache_f.png','images/myadmin_f.png','images/php_f.png','images/mysql_f.png')'>";
$body="
&nbsp&nbsp<b>Apache HTTP-сервер</b> (сокращение от англ. a patchy server) — свободный веб-сервер.<br>
&nbsp&nbspApache является кроссплатформенным ПО, поддерживает операционные системы Linux, BSD, Mac OS, Microsoft Windows, Novell NetWare, BeOS.<br>
&nbsp&nbspОсновными достоинствами Apache считаются надёжность и гибкость конфигурации. Он позволяет подключать внешние модули для предоставления данных,
использовать СУБД для аутентификации пользователей, модифицировать сообщения об ошибках и т. д. Поддерживает IPv6.<br>
&nbsp&nbspЯдро Apache включает в себя основные функциональные возможности, такие как обработка конфигурационных файлов, протокол HTTP и 
система загрузки модулей. Ядро (в отличие от модулей) полностью разрабатывается Apache Software Foundation, без участия сторонних программистов.<br>
&nbsp&nbspТеоретически, ядро apache может функционировать в чистом виде, без использования модулей. Однако, функциональность такого 
решения крайне ограничена.<br>
&nbsp&nbspЯдро Apache полностью написано на языке программирования C.<br>
&nbsp&nbspСуществует множество модулей, добавляющих к Apache поддержку различных языков программирования и систем разработки.<br>
&nbsp&nbspК ним относятся:<br>
<ul>
 <li>PHP (mod_php)</li>
 <li>Python (mod python, mod wsgi)</li>
 <li>Ruby (apache-ruby)</li>
 <li>Perl (mod perl)</li>
 <li>ASP (apache-asp)</li>
 <li>Tcl (rivet)</li>
</ul> 
&nbsp&nbspКроме того, Apache поддерживает механизмы CGI и FastCGI, что позволяет исполнять программы на практически всех языках 
программирования, в том числе C, C++, sh, Java.
";


$kav='"';
$button1="<a href='http://localhost/Tools/phpmyadmin/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image1','','images/bt1_f.png',1)".$kav."><img border='0' src='images/bt1.png' width='278' height='45' alt='' class='bt_2' id='Image1' /></a>";
$button2="<a href='http://localhost/endels/Tools/addmuser/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image2','','images/bt2_f.png',1)".$kav."><img border='0' src='images/bt2.png' width='278' height='45' alt='' class='bt_2' id='Image2' /></a>";
$button3="<a href='http://localhost/Tests/sendmail/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image3','','images/bt3_f.png',1)".$kav."><img border='0' src='images/bt3.png' width='278' height='45' alt='' class='bt_2' id='Image3' /></a>";
$button4="<a href='http://localhost/endels/Tools/sitelist/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image4','','images/bt4_f.png',1)".$kav."><img border='0' src='images/bt4.png' width='278' height='45' alt='' class='bt_2' id='Image4' /></a>";
$button5="<a href='yourhelp.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image5','','images/bt5_f.png',1)".$kav."><img border='0' src='images/bt5.png' width='278' height='45' alt='' class='bt_2' id='Image5' /></a>";

$apache="<img border='0' src='images/apache_f.png' width='115' height='52' alt='' class='bt_2' id='Image6' />";
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
