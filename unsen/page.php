<?php
$category = $_POST['category'];
if ($category>10 && $category<20)
{
$nm = '1'.$category;
}
else 
{
$nm = $category;
}
$filename = 'p¹¹.php';
$file = file_get_contents($filename);
$file = str_replace('¹', $nm, $file);
$file = str_replace('&', $model, $file);
file_put_contents('p'.$nm.$model.'.php', $file);
?>