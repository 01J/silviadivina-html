<?php
  $category = $_POST['category'];
  $model = $_POST['model'];
  $price = $_POST['price'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $file = $_FILES['userfile']['name'];
$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
mysql_query("INSERT INTO catalog 
(category, model, image, price, name, description) 
VALUES ('$category', '$model', '<img src = images/katalog/$category/$model/$file width = 100px height = 100px>', '$price', '$name',
'$description')");
?>