<?php
$name_text = $_POST['name_text'];
$link_text = $_POST['link_text'];
$body_text = $_POST['body_text'];
$img_text = $_POST['img_text'];

if (empty ($name_text))
{
    require ("add_text.html");
}
else if (empty ($link_text))
{
   require ("add_text.html");
} 
else if (empty ($body_text))
{
   require ("add_text.html");
} 
else if (empty ($img_text))
{
   require ("add_text.html");
} 
$host = 'localhost';
$user = 'u35712_elena';
$pass = 'PlaJ7Y30';
$db = 'u35712_elenacoach';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
mysql_query("INSERT INTO add_text (name_text, link_text, body_text, img_text) 
VALUES ('$name_text', '$link_text', '$body_text', '$img_text')");
$number_text = mysql_insert_id();
$fh = fopen ("new$number_text.php", "w+");
  fwrite ($fh, '
  <?
  include ("new_top.php");
  ?>
  <p align="center"><strong><font color="#DAA520" size="6%">'
  .$name_text.
  '</font></strong></p>
  <img src="images/'.$img_text.'" class="leftimg" alt="" width="30%" border="0">
	<p align="left"><font size="6%" color="#214263"><strong>'
	.$body_text.
	'</strong></font></p>
	  <?
  include ("new_bottom.php");
  ?>');
    
  fclose ($fh);
 ?>