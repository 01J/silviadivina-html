<?php
$category=$_POST['category'];
$model=$_POST['model'];
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];

if (empty ($category))
{
    header ("Location: http://diano4ka96.narod.ru/update.html");
    exit();
}
else if (empty ($model))
{
    header ("Location: http://diano4ka96.narod.ru/update.html");
    exit();
}
else if (empty ($name))
{
    header ("Location: http://diano4ka96.narod.ru/update.html");
    exit();
}
else if (empty ($price))
{
    header ("Location: http://diano4ka96.narod.ru/update.html");
    exit();
}
else if (empty ($description))
{
   header ("Location: http://diano4ka96.narod.ru/update.html");
    exit();
} 

$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 

mysql_query("UPDATE catalog SET name='$name', description='$description', price='$price' WHERE category='$category' AND model='$model'");
mysql_close();

?>