<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd"><html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset="windows1251">
  <title>��-���</title>
  <link rel="stylesheet" type="text/css" href="gallerystyle.css" />
<!-- ������� ��� ����� ������� Internet Explorer -->
<!--[if gte IE 5.5]>
<style type="text/css">
#motioncontainer {
width:expression(Math.min(this.offsetWidth, maxwidth)+'px');
echo "<td><a href =p7".$postrow[$i+1]['model'].".php target = _blank>".$postrow[$i+1]['image']."
<br><font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i+1]['name']."</B></font></a></td>";
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
<br><font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i+1]['name']."</B></font></a></td>";
} 
#content 

{position:absolute; top:0; 

bottom:0; left:0; right:0;
z-index:9999} 
</style>

<link rel="stylesheet" href="imagesize.css" type="text/css" />
<script type="text/javascript" src="imagesize.js"></script>
<script type="text/javascript" src="swfobject.js"></script>
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
<font size = 4px color="#000066" face="Verdana"><B>�� �� ������� ������� ����! �� ���� ������������ �� ����������� ����!</B></font>
</marquee></td></tr>
</tr>
</table>
</div>
<div align = center>
<table border="0"  width="90%" >
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
<div align=center><font size = 4px color="#d22820" face="Verdana"><B>��� �������� ��������</B></font></div>
    
<?php
$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection);
$num = 9;
$page = $_GET['page'];
$result = mysql_query("SELECT COUNT(*) FROM catalog WHERE category = '5'");
$posts = mysql_result($result, 0);
$total = intval(($posts - 1) / $num) + 1;
$page = intval($page);
if(empty($page) or $page < 0) $page = 1;
if($page > $total) $page = $total;
$start = $page * $num - $num;
$result = mysql_query("SELECT * FROM catalog WHERE category = '5' ORDER BY model ASC LIMIT $start, $num");
while ( $postrow[] = mysql_fetch_array($result))
include ('dollar.php');
echo "<table>";
for($i = 0; $i < $num; $i+=3)  
{ 
echo "<tr><td><a href =p5".$postrow[$i]['model'].".php target = _blank>".$postrow[$i]['image']."
<br><font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i]['name']."</B></font></a>
<br>
<font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i]['price']*$dollar." ������</B></font>
</td>";
echo "<td><a href =p5".$postrow[$i+1]['model'].".php target = _blank>".$postrow[$i+1]['image']."
<br><font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i+1]['name']."</B></font></a>
<br>
<font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i+1]['price']*$dollar." ������</B></font>
</td>";
echo "<td><a href =p5".$postrow[$i+2]['model'].".php target = _blank>".$postrow[$i+2]['image']."
<br><font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i+2]['name']."</B></font></a>
<br>
<font size = 1px color=#d22820 face=Verdana><B>".$postrow[$i+2]['price']*$dollar." ������</B></font>
</td>";
} 

echo "</tr></table>";
if ($page != 1) $pervpage = '<a href= ./5.php?page=1><<</a>
<a href= ./5.php?page='. ($page - 1) .'><</a> ';
if ($page != $total) $nextpage = ' <a href= ./5.php?page='. ($page + 1) .'>></a>
<a href= ./5.php?page=' .$total. '>>></a>';
if($page - 2 > 0) $page2left = ' <a href= ./5.php?page='. ($page - 2) .'>'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href= ./5.php?page='. ($page - 1) .'>'. ($page - 1) .'</a> | ';
if($page + 2 <= $total) $page2right = ' | <a href= ./5.php?page='. ($page + 2) .'>'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href= ./5.php?page='. ($page + 1) .'>'. ($page + 1) .'</a>';
echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;
mysql_close();
?>

<div align = center><a href="catalog.php" title="�����"><img src="images/back.gif" border=0 width=50px height=50px><br><font size = 1px color="#000066" face="Verdana"><B>�����</B></a></div>
</td>
<td valign = top align = right WIDTH = 200PX>
<img src = images/igor.png WIDTH = 200PX>
<br><img src = images/natalia.JPG WIDTH = 200PX><br>
<a href = book.php><img src = "images/book.gif" width = 200px></img></a><br>
<div align="center">

<iframe src="http://diano4ka96.narod.ru/tag.html" 

width="200" height="200" 

align="left" scrolling=no 

frameborder="0">
    ��� ������� �� ������������ ��������� ������!
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