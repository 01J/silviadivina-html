<?php
  include ('gal.php');
?>
<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Frameset//EN" "http://www.w3.org/TR/php4/frameset.dtd">
<php>
 <head>
  <meta http-equiv="Content-Type" content="text/php; charset="windows1251">
  <title>Юн-Сен</title>
<link rel="stylesheet" type="text/css" href="gallerystyle.css" />
<!-- Условие для очень старого Internet Explorer -->
<!--[if gte IE 5.5]>
<style type="text/css">
#motioncontainer {
width:expression(Math.min(this.offsetWidth, maxwidth)+'px');
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
<font size = 4px color="#000066" face="Verdana"><B>МЫ НЕ ПРОДАЕМ ДЕШЕВЫЕ ВЕЩИ! МЫ ШЬЕМ КАЧЕСТВЕННЫЕ ПО МИНИМАЛЬНОЙ ЦЕНЕ!</B></font>
</marquee></td></tr>
</tr>
</table>
</div>
<div align = center>
<table border="0"  width="90%" cellpadding = 10%>
<tr>
<td valign = top rowspan = 2 align = left width = 100px>
<a href = empty.php><img src = "images/act.gif" width = 100px></img><br>
<a href = index.php><img src = "images/index.gif" width = 100px></img><br>
<a href = company.php><img src = "images/company.gif" width = 100px></img><br>
<a href = contacts.php><img src = "images/contacts.gif" width = 100px></img><br>
<a href = catalog.php><img src = "images/catalog.gif" width = 100px></img><br>
<a href = info.php><img src = "images/info.gif" width = 100px></img><br>
<a href = vhod.php><img src = "images/zakaz.gif" width = 100px></img></a><br>
<a href = work.php><img src = "images/work.gif" width = 100px></img><br>
<a href = friends.php><img src = "images/friends.gif" width = 100px></img></a><br>
<script language="JavaScript" src="http://101widgets.com/03999901/100/75"></script></td>
<td valign = top rowspan = 2 align = left>
<a href = table.php><img src = "images/table.gif" width = 100px></img><br><font  size = 4px color="#000066" face="Verdana"><B>ТАБЛИЦЫ РАЗМЕРОВ </B></font>	
<br>
<a href = text.php><img src = "images/gold.png" width = 100px></img><br><font  size = 4px color="#000066" face="Verdana"><B>РАБОЧАЯ ОДЕЖДА - РЕПУТАЦИЯ КОМПАНИИ</B></font>		
</td>
<td valign = top align = right WIDTH = 200PX>
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
</table></div>
<div id="motioncontainer" style="position:relative;overflow:hidden;">
<div id="motiongallery" style="position:absolute;left:0;top:0;white-space: nowrap;">
<nobr id="trueContainer"><?php
  include ('galbody.php');
?>
</nobr>
</div>
</div>
<embed src="images/end.swf" width = '90%' height = '50px' quality="high"  TYPE="application/x-shockwave-flash" wmode="transparent" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>

<!--#include virtual="/.narodsys/direct.php"-->

<i style="background:url(//www.tns-counter.ru/V13a****yandex_ru/ru/CP1251/tmsec=narod_total/0)"></i>

<!--#include virtual="/.narodsys/metrika_counter.php"-->
</div>
</body>
</php>