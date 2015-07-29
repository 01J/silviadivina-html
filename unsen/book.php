
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset="windows1251">
  <title>Юн-Сен</title>
  <link rel="stylesheet" type="text/css" href="gallerystyle.css" />
<!-- Условие для очень старого Internet Explorer -->
<!--[if gte IE 5.5]>
<style type="text/css">
#motioncontainer {
width:expression(Math.min(this.offsetWidth, maxwidth)+'px');
echo "<td><a href =p7".$postrow[$i+1]['model'].".php target = _blank>".$postrow[$i+1]['image']."
<br><font size = 2px color=#d22820 face=Verdana><B>".$postrow[$i+1]['name']."</B></font></a></td>";
}
</style>
<![endif]-->
<!-- End Conditional Style -->
<script type="text/javascript" src="motiongallery.js">
</script>
<style>  
html { overflow-x:  hidden; }
#bg {position:fixed; top:0; bottom:0; left:0; right:0; 
background-image:url(images/bg.jpg); 
background-size: contain; z-index:9998;
}
#bg {position:fixed; top:0; bottom:0; left:0; right:0; background-image:url(images/bg.jpg);echo "<td><a href =p7".$postrow[$i+1]['model'].".php target = _blank>".$postrow[$i+1]['image']."
<br><font size = 2px color=#d22820 face=Verdana><B>".$postrow[$i+1]['name']."</B></font></a></td>";
} 
#content 

{position:absolute; top:0; 

bottom:0; left:0; right:0;
z-index:9999}  
</style>

<link rel="stylesheet" href="imagesize.css" type="text/css" />
<script type="text/javascript" src="imagesize.js"></script>
<script type="text/javascript" src="swfobject.js"></script>
<script> 
 function test(form) 
{
  if (form.name.value == "") 
{
    alert("Пожалуйста, введите Ваше имя!")
}
  if (form.text.value == "")
{
    alert("Пожалуйста, введите Ваш отзыв!")
}

  }
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript" src="swfobject.js"></script> 

</head> 
<body align = center link = "#d22820"
alink = "#000066"
vlink = "#000066">
<div id="bg"></div>  
<div id="content"><div align = center>
<table width = 90%>
<tr>
<td align = center>
<embed src="images/logo.swf" width = '150px' height = '100px' quality="high"  TYPE="application/x-shockwave-flash" wmode="transparent" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
</td>
<td align = center>
<embed src="images/text.swf" width = '400px' height = '100px' quality="high"  TYPE="application/x-shockwave-flash" wmode="transparent" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
</td>
<td align = center>
<embed src="images/phones.swf" width = '150px' height = '100px' quality="high"  TYPE="application/x-shockwave-flash" wmode="transparent" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
</td>
</tr>
<tr>
<td colspan = 3><marquee>
<font size = 4px color="#000066" face="Verdana"><B>МЫ НЕ ПРОДАЕМ ДЕШЕВЫЕ ВЕЩИ! МЫ ШЬЕМ КАЧЕСТВЕННЫЕ ПО МИНИМАЛЬНОЙ ЦЕНЕ!</B></font>
</marquee></td></tr>
</tr>
</table>
</div>
<div align = center>
<table border="0"  width="90%" cellpadding = 10%>
<tr>
<td valign = top rowspan = 2>
<a href = empty.php><img src = "images/act.gif" width = 100px></img><br>
<a href = index.php><img src = "images/index.gif" width = 100px></img></a><br>
<a href = company.php><img src = "images/company.gif" width = 100px></img></a><br>
<a href = contacts.php><img src = "images/contacts.gif" width = 100px></img></a><br>
<a href = catalog.php><img src = "images/catalog.gif" width = 100px></img></a><br>
<a href = info.php><img src = "images/info.gif" width = 100px></img></a><br>
<a href = vhod.php><img src = "images/zakaz.gif" width = 100px></img></a><br>
<a href = work.php><img src = "images/work.gif" width = 100px></img></a><br>
<a href = friends.php><img src = "images/friends.gif" width = 100px></img></a><br>
<script language="JavaScript" src="http://101widgets.com/03999901/100/75"></script>

</td>
<td valign = top rowspan = 2 align="center">
<div align=center><font size = 4px color="#d22820" face="Verdana"><B>Гостевая книга</B></font></div>

<form method ="POST" action="insert_book.php" name = "form">
<font size = 2px color="#000066" face="Verdana"><B>Ваше имя:</B></font><br/>

<input type ="text" name = "name"> <br/>
 
<font size = 2px color="#000066" face="Verdana"><B>Текст отзыва:</B></font><br/>

<textarea cols = "30" rows = "10" name = "text" ></textarea> <br/>

<input type ="submit" name = "ok" onClick="test(this.form)" value="оставить отзыв"/> 

</form>

<?php
$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection);
$num = 25;
$page = $_GET['page'];
$result = mysql_query("SELECT COUNT(*) FROM book");
$posts = mysql_result($result, 0);
$total = intval(($posts - 1) / $num) + 1;
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;
    echo ('<table bgcolor = #FFFFFF>');
$result = mysql_query("SELECT * FROM book ORDER BY id DESC LIMIT $start, $num");
do
{
    echo ('<tr>');
    echo ('<td valign = top>');
    echo ('<font size = 1px color="#000066" face="Verdana"><B>');
    echo ($row['name']);
    echo ('</B></font>');
    echo ('</td>');
    echo ('<td valign = top>');
    echo ('<font size = 1px color="#000066" face="Verdana"><B>');
    echo ($row['text']);
    echo ('</B></font>');
    echo ('</td>');
    echo ('<td valign = top>');
    echo ('<font size = 1px color="#000066" face="Verdana"><B>');
    echo ($row['date']); 
    echo ('<br>'); 
    echo ($row['time']);
    echo ('</B></font>');
    echo ('</td>'); 
    echo ('</tr>');        
}
while ($row = mysql_fetch_array($result));
echo ('</table>');
if ($page != 1) $pervpage = '<a href= ./book.php?page=1><<</a>
<a href= ./book.php?page='. ($page - 1) .'><</a> ';
if ($page != $total) $nextpage = ' <a href= ./book.php?page='. ($page + 1) .'>></a>
<a href= ./book.php?page=' .$total. '>>></a>';
if($page - 2 > 0) $page2left = ' <a href= ./book.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href= ./book.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';
if($page + 2 <= $total) $page2right = ' | <a href= ./book.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href= ./book.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';
echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;

mysql_close();

?>

<td valign = top align = right WIDTH = 200PX>
<img src = images/igor.png WIDTH = 200PX>
<br><img src = images/natalia.JPG WIDTH = 200PX><br>
<a href = book.php><img src = "images/book.gif" width = 200px></img></a><br>
<div align="center">

<iframe src="tag.html" 

width="200" height="200" 

align="left" scrolling=no 

frameborder="0">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>

</div>

</tr>
</table>
</div>
<embed src="images/end.swf" width = '90%' height = '50px' quality="high"  TYPE="application/x-shockwave-flash" wmode="transparent" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>

<!--#include virtual="/.narodsys/direct.php"-->

<i style="background:url(//www.tns-counter.ru/V13a****yandex_ru/ru/CP1251/tmsec=narod_total/0)"></i>

<!--#include virtual="/.narodsys/metrika_counter.php"-->
</div>
</body>
</html>