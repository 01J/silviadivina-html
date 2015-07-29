<?php

$category=$_POST['category'];
$model=$_POST['model'];

if (empty ($category))
{
    header ("Location: http://diano4ka96.narod.ru/upload.html");
    exit();
}
else if (empty ($model))
{
    header ("Location: http://diano4ka96.narod.ru/upload.html");
    exit();
}

$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
$query = mysql_query("SELECT * FROM catalog WHERE category = $category AND model = $model");
$ismodel = mysql_fetch_array ($query);
if (empty($ismodel))
{
echo('123');
}
