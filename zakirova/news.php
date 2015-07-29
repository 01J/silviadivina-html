<!DOCTYPE php PUBLIC "-//W3C//DTD php 4.01 Frameset//EN" "http://www.w3.org/TR/php4/frameset.dtd">
<head>
  <meta http-equiv="Content-Type" content="text/php; charset="utf-8">
<title>САЙТ АЛЕНЫ ЗАКИРОВОЙ</title>
<style type="text/css">
 
a {
	text-decoration: none;
   } 
     .leftimg {
    float:left; 
    margin: 7px 7px 7px 0; 
   }
  </style>
</head>
<body background="images/paper.png" text="#214263" link="#DAA520" vlink="#DAA520" alink="#214263">
<table border="0" cellspacing="2" cellpadding="2" align="center">

<tr>
<td valign = top  align = center width = 20%>
<object type="application/x-shockwave-flash" height="100%" width="100%" data="http://agitki.ru/flash/001/wood_calb.swf">
<param name="movie" value="http://agitki.ru/flash/001/wood_calb.swf" />
<param name="wmode" value="transparent" />
</object>
</td> 
<td valign = top  align = center width = 60%>
<embed src="images/logo.swf" width = '100%' height = '100%' quality="high"  TYPE="application/x-shockwave-flash" wmode="transparent" loop="true" autoplay="true" pluginspage="http://www.macromedia.com/go/getflashplayer"></embed>
</td>
<td valign = top   width = 20%>
<img src = "images/logotype.png" width = '100%'>
</td>
</tr>
<tr>
<td valign = top  colspan = 3 align = center>
<br />
<img src="images/TEXT.png" alt="" border="0" width="80%">
<br />
</td>
</tr></table>

	<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr>
<td valign = top  width="20%" align = center><a href="index.html"><img src="images/button.png" border="0" width="80%"><br />
<img src="images/TXT.png" width="100%" alt="" border="0">
</a></td>
<td valign = top  width="20%" align = center><a href="info.html"><img src="images/button.png" border="0" width="80%"><br />
<img src="images/TXXT.png" width="100%" alt="" border="0">
</a></td>
<td valign = top  width="20%" align = center><a href="contact.html"><img src="images/button.png" border="0" width="80%"><br />
<img src="images/TXXXT.png" width="100%" alt="" border="0">
</a></td>
<td valign = top  width="20%" align = center><a href="by.php"><img src="images/button.png" border="0" width="80%"><br />
<img src="images/TXXXXT.png" width="100%" alt="" border="0">
</a></td>
<td valign = top  width="20%" align = center><a href="know.html"><img src="images/button.png" border="0" width="80%"><br />
<img src="images/TXXXXXT.png" width="100%" alt="" border="0">
</a></td> 
</tr>
</table>

<table background="images/paper.png">
<tr>
	<td valign = top  width="20%">
	<a href="news1.html"><img src="images/4list.png" width="100%">	</a></td>
	<td valign = top ><p align="left"><font color = #DAA520  size="6%" face="Arial"><b> 
<a href="news1.html" target="_blank">ВАШ ВНУТРЕННИЙ ТАЛИСМАН УСПЕХА</a></b></font><br />
<font color = #214263  size="6%" face="Arial"><b>В жизни каждого из нас бывают ситуации, когда тяжело на душе, когда на пути к успеху возникает какое-то препятствие и мешает двигаться дальше. В такую минуту Вас лучше всего поддержит техника "Клевер", которая включает в себя набор инструментов развития подсознания и поиска внутренних ресурсов для новых свершений! </b></b></font></p>
</td>
</tr>
<tr>
<td valign = top  width="20%"><a href="news2.html"><img src="images/santa.png" width="100%"></a></td>
<td valign = top ><p align="left"><font color = #DAA520  size="6%" face="Arial"><b> 
<a href="news2.html" target="_blank">САМ СЕБЕ ДЕД МОРОЗ</a></b></font><br />
<font color = #214263  size="6%" face="Arial"><b>
Дед Мороз появляется лишь благодаря артистизму кого-то из родственников, а мечты редко сбываются по мановению волшебной палочки. 
Повод ли это перестать хотеть? Вовсе нет, ведь в нашем распоряжении круглосуточно и ежедневно находится самый могущественный из волшебников, способный воплотить любое желание в жизнь. Более того, Вы знакомы с ним с самого рождения - это Вы сами! 
</b></b></font></p>
</td></tr>
<?php
$host = 'localhost';
$user = 'u35712_elena';
$pass = 'PlaJ7Y30';
$db = 'u35712_elenacoach';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
$res = mysql_query("SELECT number_text, name_text, link_text, img_text FROM add_text");
while ($row = mysql_fetch_array($res)) {
echo ('
<tr>
<td valign = top  width="20%" valign="top"><a href="new'
.$row[number_text].
'.php"><img src="images/'
.$row[img_text].
'" width="100%"></a></td>
<td valign = top  valign="top" width="80%"><a href="new'
.$row[number_text].
'.php"><font color = #DAA520 size="6%" face="Arial"><b>'
.$row[name_text].
'</b></font><br /></a>
<font color = #214263 size="6%" face="Arial"><b>'
.$row[link_text].
'</b></font>
</td>
</tr>
');
}
mysql_close();
?>

</table>
	
<table width="100%" border="0" cellspacing="2" cellpadding="2">
<tr> 
<td valign = top  align = "center">
<a href = "blank.html">
<img src = images/skype.png width = 16%> <p>
<img src = "images/FTXT.png" width = "80%">
</a>
</td>
</tr>
</table>
</table>
</body>
</php>
