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
<script> 
 function test(form) 
{
  if (form.model.value == "") 
{
    alert("Пожалуйста, опишите одежду, которую Вы хотите заказать!")
}
  if (form.size1.value == "")
{
    alert("Пожалуйста, укажите необходимые Вам размеры одежды!")
}
  if (form.height1.value == "")
{
    alert("Пожалуйста, укажите необходимый Вам рост!")
}
  if (form.ckolko1.value == "")
{
    alert("Пожалуйста, укажите количество необходимой Вам одежды!")
}
  if (form.dir.value == "")
{
    alert("Пожалуйста, введите ФИО директора!")
}
  }
</script>
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
<div align="center">
<form method ="POST" action="php.php">
<font size = 2px color="#000066" face="Verdana"><B>Просим пошить спецодежду (описание того, что вы хотите заказать с указанием цвета основной и отделочной ткани)</B></font><br>
<textarea cols = "30" rows = "10" name = "model" ></textarea> <br>


<font size = 2px color="#000066" face="Verdana"><B>следующих размеров:</B></font><br>

<select name="size1">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height1">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko1"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size2">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height2">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko2"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size3">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height3">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko3"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size4">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height4">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko4"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size5">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height5">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko5"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size6">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height6">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko6"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size7">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height7">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko7"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size8">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height8">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko8"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size9">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height9">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko9"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><br/>

<select name="size10">
<option value=""></option>
<option value="40-42">40-42</option>
<option value="44-46">44-46</option>
<option value="48-50">48-50</option>
<option value="52-54">52-54</option>
<option value="56-58">56-58</option>
<option value="60-62">60-62</option>
<option value="64-66">64-66</option>
</select>/<select name="height10">
<option value=""></option>
<option value="158/164">158/164</option>
<option value="170/176">170/176</option>
<option value="182/188">182/188</option>
</select>-<textarea cols = "5" rows = "1" maxlength = "4" name = "ckolko10"></textarea>
<br/><font size = 2px color="#000066" face="Verdana"><B>Размер/рост см - количество шт;</B></font><p/>

<font size = 2px color="#000066" face="Verdana"><B>Оплату гарантируем.<p>
ФИО директора </B></font><textarea cols = "30" rows = "1"  maxlength = "30" name = "dir"></textarea><br>
<input type ="submit" name = "ok" onClick="test(this.form)" value="Сделать заказ"/>
<input type ="submit" name = "print" onClick="test(this.form)" value="Печать"/>
<br><a href = BLANK_ZAKAZA.doc><img src = "images/1.gif"></img>
</form>
</td>
<td valign = top align = right WIDTH = 200PX>
<td valign = top align = right WIDTH = 200PX>
<img src = images/igor.png WIDTH = 200PX>
<br><img src = images/natalia.JPG WIDTH = 200PX><br>
<a href = book.php><img src = "images/book.gif" width = 200px></img></a><br>
<div align="center">

<iframe src="http://diano4ka96.narod.ru/tag.html" 

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