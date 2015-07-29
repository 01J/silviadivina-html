<?php
$category=$_POST['category'];
if ($category==1)
{
$category='01';
}
$name=$_POST['name'];

if (empty ($category))
{
    header ("Location: http://diano4ka96.narod.ru/add_category.html");
    exit();
}
else if (empty ($name))
{
    header ("Location: http://diano4ka96.narod.ru/add_category.html");
    exit();
}
$filename = '№.php';
$file = file_get_contents($filename);
$file = str_replace('№', $category, $file);
$file = str_replace('Спецодежда', $name, $file);
file_put_contents($category.'.php', $file);

$filenames = 'catalog.php';
$files = file_get_contents($filenames);
$files = str_replace('</B></font></div>', '<br><a href='.$category.'.php>'.$category.'.'.$name.'</a></B></font></div>', $files);
file_put_contents('catalog.php', $files);


?>