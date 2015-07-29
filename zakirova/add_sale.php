<?php
$name_sale = $_POST['name_sale'];
$link_sale = $_POST['link_sale'];
$body_sale = $_POST['body_sale'];
$img_sale = $_POST['img_sale'];

if (empty ($name_sale))
{
    require ("add_sale.html");
}
else if (empty ($link_sale))
{
   require ("add_sale.html");
} 
else if (empty ($body_sale))
{
   require ("add_sale.html");
} 
else if (empty ($img_sale))
{
   require ("add_sale.html");
} 
$host = 'localhost';
$user = 'u35712_elena';
$pass = 'PlaJ7Y30';
$db = 'u35712_elenacoach';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
mysql_query("INSERT INTO add_sale (name_sale, link_sale, body_sale, img_sale) 
VALUES ('$name_sale', '$link_sale', '$body_sale', '$img_sale')");
$number_sale = mysql_insert_id();
$fh = fopen ("by$number_sale.php", "w+");
  fwrite ($fh, '
  <?
  include ("new_top.php");
  ?>
  <p align="center"><strong><font color="#DAA520" size="6%">'
  .$name_sale.
  '</font></strong></p>
  <img src="images/'.$img_sale.'" class="leftimg" alt="" width="30%" border="0">
	<p align="left"><font size="6%" color="#214263"><strong>'
	.$body_sale.
	'</strong></font></p>
	  <?
  include ("new_bottom.php");
  ?>');
    
  fclose ($fh);
 ?>