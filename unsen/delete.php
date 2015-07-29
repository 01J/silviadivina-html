<?php

$category=$_POST['category'];

if ($category>10 && $category<20)
{
$name = '1'.$category;
}
else 
{
$name = $category;
}

$model=$_POST['model'];

if (empty ($category))
{
    header ("Location: http://diano4ka96.narod.ru/delete.html");
    exit();
}
else if (empty ($model))
{
    header ("Location: http://diano4ka96.narod.ru/delete.html");
    exit();
}

$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
$test = mysql_query("SELECT * from catalog WHERE category='$category' AND model='$model'");
$arr = mysql_fetch_array($test);
$del = $arr['image'];
$del = str_replace('<img src = ', '', $del);
$del = str_replace(' width = 100px height = 100px>', '', $del);
if (!empty($arr))
{
mysql_query("DELETE from catalog WHERE category='$category' AND model='$model'");
$page="p".$name.$model.".php";
$profile=$name.$model.".php";
unlink($del);
unlink($page);
unlink($profile);


// упрощенная функция scandir
function myscandir($dir)
{
    $list = scandir($dir);
    unset($list[0],$list[1]);
    return array_values($list);
}

// функция очищения папки
function clear_dir($dir)
{
    $list = myscandir($dir);
    
    foreach ($list as $file)
    {
        if (is_dir($dir.$file))
        {
            clear_dir($dir.$file.'/');
            rmdir($dir.$file);
        }
        else
        {
            unlink($dir.$file);
        }
    }
}

// пример использования
clear_dir('images/'.$category.'/'.$model.'/');
rmdir('images/'.$category.'/'.$model.'/');

}
mysql_close();
?>