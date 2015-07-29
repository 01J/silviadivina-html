<?php

$category=$_POST['category'];
$model=$_POST['model'];
$name=$_POST['name'];
$description=$_POST['description'];
$price=$_POST['price'];
$file1=$_FILES["filename1"]["name"];
$file2=$_FILES["filename2"]["name"];
$file3=$_FILES["filename3"]["name"];

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
else if (empty ($name))
{
    header ("Location: http://diano4ka96.narod.ru/upload.html");
    exit();
}
else if (empty ($price))
{
    header ("Location: http://diano4ka96.narod.ru/upload.html");
    exit();
}
else if (empty ($description))
{
   header ("Location: http://diano4ka96.narod.ru/upload.html");
    exit();
} 
else if (empty ($file1))
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
mysql_query("INSERT INTO catalog 
(category, model, name, description, price, image) 
VALUES ('$category', '$model', '$name', '$description','$price', '<img src = images/katalog/$category/$file1 width = 100px height = 100px>')");
if(!empty($file1))
{

if(copy($_FILES["filename1"]["tmp_name"],"images/katalog/".$category."/".$_FILES["filename1"]["name"])) 
{
    echo("Файл успешно загружен");
}
 else 
{
    echo("Ошибка загрузки файла");
}

mkdir ("images/".$category."/".$model."/");

if(copy($_FILES["filename1"]["tmp_name"],"images/".$category."/".$model."/".$_FILES["filename1"]["name"])) 
{
    echo("Файл успешно загружен");
}
 else 
{
    echo("Ошибка загрузки файла");
}
}
if(!empty($file2))
{
if(copy($_FILES["filename2"]["tmp_name"],"images/".$category."/".$model."/"
.$_FILES["filename2"]["name"])) 
{
    echo("Файл успешно загружен");
}
 else 
{
    echo("Ошибка загрузки файла");
}
}
if(!empty($file3))
{
if(copy($_FILES["filename3"]["tmp_name"],"images/".$category."/".$model."/"
.$_FILES["filename3"]["name"])) 
{
    echo("Файл успешно загружен");
}
 else 
{
    echo("Ошибка загрузки файла");
}
}
include('profile.php');
include('page.php');
mysql_close();
}
else 
{
echo ('Модель с таким номером уже имеется в данной категории.');
}
?>