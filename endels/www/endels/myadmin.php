<?php
$scripts="<script src='js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('images/bt1_f.png','images/bt2_f.png','images/bt3_f.png','images/bt4_f.png','images/bt5_f.png','images/apache_f.png','images/myadmin_f.png','images/php_f.png','images/mysql_f.png')'>";
$body="
&nbsp&nbsp<b>phpMyAdmin</b> — веб-приложение с открытым кодом, написанное на языке PHP и представляющее собой веб-интерфейс 
для администрирования СУБД MySQL. phpMyAdmin позволяет через браузер осуществлять администрирование сервера MySQL, запускать 
команды SQL и просматривать содержимое таблиц и баз данных. Приложение пользуется большой популярностью у веб-разработчиков, 
так как позволяет управлять СУБД MySQL без непосредственного ввода SQL команд, предоставляя дружественный интерфейс.<br>
&nbsp&nbspНа сегодняшний день phpMyAdmin широко применяется на практике. Последнее связано с тем, что разработчики интенсивно развивают 
свой продукт, учитывая все нововведения СУБД MySQL. Подавляющее большинство российских провайдеров используют это приложение в 
качестве панели управления для того, чтобы предоставить своим клиентам возможность администрирования выделенных им баз данных.<br>
&nbsp&nbspПриложение распространяется под лицензией GNU General Public License и поэтому многие другие разработчики интегрируют его в свои 
разработки, например XAMPP, Endels, AppServ.<br>
&nbsp&nbspПроект на данный момент времени локализирован на более чем 62 языках.<br>
&nbsp&nbspНачиная с версии 3.0.0, phpMyAdmin присоединился к инициативе GoPHP5 и отказался от поддержки совместимости с устаревшими версиями 
PHP и MySQL. Для работы phpMyAdmin 3.0.0 и выше, требуется наличие PHP 5.2 и MySQL 5. Для использования старых версий PHP и MySQL, 
продолжает развиваться вторая ветка скрипта (2.x), однако её поддержка ограничивается закрытием найденных уязвимостей, новых функций 
в неё не добавляется.<br>
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
$myadmin="<img border='0' src='images/myadmin_f.png' width='95' height='52' alt='' class='bt_2' id='Image9' />";


$head="<img src='images/panel.png' width='766' height='34' alt=''>";
include("html/footer.php");
include("html/requisits.php");
include("html/head.php");
include("html/body.php");


?>
<body>
