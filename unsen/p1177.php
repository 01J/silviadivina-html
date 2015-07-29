<?php
include ('177.php');

  //  Получает файлы, расположенные в директории 
  //  @param $path : String - путь к директории с файлами, 
  //  return Array - индексный массив, содержащий файлы
  function getFiles(/*string*/$path)
  {
    // результат выполнения функции is_dir кэшируется,
    // поэтому сбрасываем кэш.
    clearstatcache();
     
    $files = scandir($path);
     
    for($i = 0, $length = count($files); $i < $length; $i++)
    {
      // Исключаем из списка директории:
      if( is_dir($path.$files[$i]) )
      {
        unset($files[$i]);
      }
    }
    return $files; //array
  }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset="windows1251">
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
#bg {position:fixed; top:0; bottom:0; left:0; right:0; background-image:url(images/bgc.jpg); z-index:999;} 
#content {position:absolute; top:0; bottom:0; left:0; right:0; z-index:1000;} 
</style>

<script type="text/javascript" src="../highslide/highslide.js"></script>
<link rel="stylesheet" type="text/css" href="../highslide/highslide.css" />
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
<table border="0"  width="90%">
<tr>
<td valign = top rowspan = 2 align = left>
<a href = empty.php><img src = "images/act.gif" width = 100px></img><br>
<a href = index.php><img src = "images/index.gif" width = 100px></img><br>
<a href = company.php><img src = "images/company.gif" width = 100px></img><br>
<a href = contacts.php><img src = "images/contacts.gif" width = 100px></img><br>
<a href = catalog.php><img src = "images/catalog.gif" width = 100px></img><br>
<a href = info.php><img src = "images/info.gif" width = 100px></img><br>
<a href = work.php><img src = "images/work.gif" width = 100px></img><br>
<a href = friends.php><img src = "images/friends.gif" width = 100px></img><br>
		

</td>
<td valign = top rowspan = 2>

<?php
$count=0; 
        foreach( getFiles($imgDir) as $file )
        {
$count=$count+1;
echo '<a href="'.$imgDir.$file.'" class="highslide" onclick="return hs.expand(this)">';      
echo '<img src="'.$imgDir.$file.'" width="40%"/>';
echo '</a>';
   }
 ?>
<br>
<?php
$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
$query = mysql_query("SELECT * FROM catalog WHERE category = $category AND model = $model");
do 
{  
    $n = $row['name'];
    $d = $row['description'];
    echo ('<div align = left>');
    echo ('<font size = 2px color="#d22820" face="Verdana"><B>');       
    echo ($n);
    echo ('</B></font>');     
    echo ('<br>');
    echo ('<font  size = 2px color="#000066" face="Verdana"><B>');       
    echo ($d);    
    echo ('</B></font>');  
    echo ('</div>');
}
 while ($row = mysql_fetch_array ($query));
?>

<div align = center>
<?php 
echo '<a href="';
echo $category;
echo '.php" title="назад">';
?>
<img src="images/back.gif" border=0 width=50px height=50px>
<br><font size = 2px color="#000066" face="Verdana"><B>Назад</B></a></div>

<td valign = top align = right WIDTH = 150PX>
<img src = images/igor.png WIDTH = 150PX><br>
<img src = images/natalia.JPG WIDTH = 150PX>
<br>
<iframe src="http://diano4ka96.narod.ru/tag.html" 

width="200" height="200" 

align="left" scrolling=no 

frameborder="0">
    Ваш браузер не поддерживает плавающие фреймы!
 </iframe>
</td>
</tr>
</table>
</div>
<embed src="images/end.swf" width = '100%' height = '50px' quality="high"  TYPE="application/x-shockwave-flash" wmode="transparent" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>

<!--#include virtual="/.narodsys/direct.html"-->

<i style="background:url(//www.tns-counter.ru/V13a****yandex_ru/ru/CP1251/tmsec=narod_total/0)"></i>

<!--#include virtual="/.narodsys/metrika_counter.html"-->
</div>
</body>
</html>
<?php
mysql_close();
?>
