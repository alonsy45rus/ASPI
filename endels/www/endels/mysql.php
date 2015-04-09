<?php
$scripts="<script src='js/rollover.js' type='text/javascript'></script>";
$bodyteg="<body link='#ffffff' vlink='#ffffff' alink='#ffffff' bgcolor='#989898' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' id='page_1' onload='MM_preloadImages('images/bt1_f.png','images/bt2_f.png','images/bt3_f.png','images/bt4_f.png','images/bt5_f.png','images/apache_f.png','images/myadmin_f.png','images/php_f.png','images/mysql_f.png')'>";
$body="
&nbsp&nbsp<b>MySQL</b> («май-эс-кью-эл», жарг. мускул) — свободная система управления базами данных (СУБД). MySQL является собственностью компании 
Oracle Corporation, получившей её вместе с поглощённой Sun Microsystems, осуществляющей разработку и поддержку приложения. 
Распространяется под GNU General Public License или под собственной коммерческой лицензией.<br>
&nbsp&nbspMySQL является решением для малых и средних приложений. Обычно MySQL используется в качестве сервера, к которому обращаются 
локальные или удалённые клиенты, однако в дистрибутив входит библиотека внутреннего сервера, позволяющая включать MySQL в автономные программы.<br>
&nbsp&nbspГибкость СУБД MySQL обеспечивается поддержкой большого количества типов таблиц: пользователи могут выбрать как таблицы типа 
MyISAM, поддерживающие полнотекстовый поиск, так и таблицы InnoDB, поддерживающие транзакции на уровне отдельных записей. 
Более того, СУБД MySQL поставляется со специальным типом таблиц EXAMPLE, демонстрирующим принципы создания новых типов таблиц. 
Благодаря открытой архитектуре и GPL-лицензированию, в СУБД MySQL постоянно появляются новые типы таблиц.<br>
&nbsp&nbspСообществом разработчиков MySQL созданы различные ответвления кода, такие как Drizzle, OurDelta, Percona Server, и MariaDB. 
Все эти ответвления уже существовали на момент поглощения компаний Sun и MySQL AB корпорацией Oracle.<br>
&nbsp&nbspMySQL портирована на большое количество платформ: AIX, BSDi, FreeBSD, HP-UX, Linux, Mac OS X, NetBSD, OpenBSD, OS/2 Warp, SGI IRIX, 
Solaris, SunOS, SCO OpenServer, SCO UnixWare, Tru64, Windows 95, Windows 98, Windows NT, Windows 2000, Windows XP, Windows Server 2003, 
WinCE, Windows Vista и Windows 7. Существует также порт MySQL к OpenVMS. Важно отметить, что на официальном сайте СУБД для свободной 
загрузки предоставляются не только исходные коды, но и откомпилированные и оптимизированные под конкретные операционные системы готовые 
исполняемые модули СУБД MySQL.<br>
&nbsp&nbspMySQL имеет API для языков Delphi, C, C++, Эйфель, Java, Лисп, Perl, PHP, PureBasic, Python, Ruby, Smalltalk, Компонентный Паскаль и 
Tcl библиотеки для языков платформы .NET, а также обеспечивает поддержку для ODBC посредством ODBC-драйвера MyODBC.
";


$kav='"';
$button1="<a href='http://localhost/Tools/phpmyadmin/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image1','','images/bt1_f.png',1)".$kav."><img border='0' src='images/bt1.png' width='278' height='45' alt='' class='bt_2' id='Image1' /></a>";
$button2="<a href='http://localhost/endels/Tools/addmuser/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image2','','images/bt2_f.png',1)".$kav."><img border='0' src='images/bt2.png' width='278' height='45' alt='' class='bt_2' id='Image2' /></a>";
$button3="<a href='http://localhost/Tests/sendmail/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image3','','images/bt3_f.png',1)".$kav."><img border='0' src='images/bt3.png' width='278' height='45' alt='' class='bt_2' id='Image3' /></a>";
$button4="<a href='http://localhost/endels/Tools/sitelist/index.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image4','','images/bt4_f.png',1)".$kav."><img border='0' src='images/bt4.png' width='278' height='45' alt='' class='bt_2' id='Image4' /></a>";
$button5="<a href='yourhelp.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image5','','images/bt5_f.png',1)".$kav."><img border='0' src='images/bt5.png' width='278' height='45' alt='' class='bt_2' id='Image5' /></a>";

$apache="<a href='apache.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image6','','images/apache_f.png',1)".$kav."><img border='0' src='images/apache.png' width='115' height='52' alt='' class='bt_2' id='Image6' /></a>";
$mysql="<img border='0' src='images/mysql_f.png' width='120' height='52' alt='' class='bt_2' id='Image7' />";
$php="<a href='php.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image8','','images/php_f.png',1)".$kav."><img border='0' src='images/php.png' width='111' height='52' alt='' class='bt_2' id='Image8' /></a>";
$myadmin="<a href='myadmin.php' onmouseout=".$kav."MM_swapImgRestore()".$kav."onmouseover=".$kav."MM_swapImage('Image9','','images/myadmin_f.png',1)".$kav."><img border='0' src='images/myadmin.png' width='95' height='52' alt='' class='bt_2' id='Image9' /></a>";


$head="<img src='images/panel.png' width='766' height='34' alt=''>";
include("html/footer.php");
include("html/requisits.php");
include("html/head.php");
include("html/body.php");


?>
<body>
