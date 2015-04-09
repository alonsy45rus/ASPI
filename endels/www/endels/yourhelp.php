<?php
$scripts="<script src='js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('images/bt1_f.png','images/bt2_f.png','images/bt3_f.png','images/bt5_f.png','images/apache_f.png','images/myadmin_f.png','images/php_f.png','images/mysql_f.png')'>";
$body=
"
&nbsp&nbspEndels - бесплатный проект и всегда таким останется. Однако, его содержание, обновление и поддержка работоспособности требуют
финансовых затрат.<br>
&nbsp&nbspСоздатели Endels будут очень благодарны вам за оказанную материальную или нематериальную помощь.
<br><br>
<u>Материальная помощь</u>:
Вы можете поддержать проект любой денежной суммой. В ответ на материальную поддержку мы разместим ссылку на ваш сайт
 на странице <a href='http://www.endels.ru/thanks.php' target='_blank'>Спасибо</a>. Чем большей суммой вы нас поддержите - тем выше в списке будет отображаться
ссылка на ваш сайт.<br>
&nbsp&nbspДля отображения ссылки на странице <a href='http://www.endels.ru/thanks.php' target='_blank'>Спасибо</a> вам необходимо в комментарии к платежу указать адрес сайта.
Или же, написать письмо на адрес donate@endels.ru с датой и временем платежа, суммой и ссылкой на ваш сайт.
<br><br>
<u>Нематериальная помощь</u>:
Нематериальную помощь вы можете оказать проекту следующим образом (ссылка на сайт www.endels.ru обязательна):
<ul>
<li>открывать раздачи проекта Endels на торрент трекерах</li>
<li>публиковать новости на порталах по программному обеспечению</li>
<li>размещать информацию на своих сайтах</li>
<li>рассказывать друзьям в социальных сетях</li>
<li>и т.д.</li>
</ul>
<br><br>
&nbsp&nbspСпасибо вам большое за помощь и поддержку.
";


$kav='"';
$button1="<a href='http://localhost/Tools/phpmyadmin/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image1','','images/bt1_f.png',1)".$kav."><img border='0' src='images/bt1.png' width='278' height='45' alt='' class='bt_2' id='Image1' /></a>";
$button2="<a href='http://localhost/endels/Tools/addmuser/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image2','','images/bt2_f.png',1)".$kav."><img border='0' src='images/bt2.png' width='278' height='45' alt='' class='bt_2' id='Image2' /></a>";
$button3="<a href='http://localhost/Tests/sendmail/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image3','','images/bt3_f.png',1)".$kav."><img border='0' src='images/bt3.png' width='278' height='45' alt='' class='bt_2' id='Image3' /></a>";
$button4="<a href='http://localhost/endels/Tools/sitelist/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image4','','images/bt4_f.png',1)".$kav."><img border='0' src='images/bt4.png' width='278' height='45' alt='' class='bt_2' id='Image4' /></a>";
$button5="<img border='0' src='images/bt5_f.png' width='278' height='45' alt='' class='bt_2' id='Image5' /></a>";

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
