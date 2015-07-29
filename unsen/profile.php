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

// строка, которую будем записывать
$text = "<?php
\$imgDir='images/".$category."/".$model."/';
\$category = ".$category.";
\$model = ".$model.";
\$nm = ".$nm.";
?>";
$category = $_POST['category'];
if ($category>10 && $category<20)
{
$nm = '1'.$category;
}
else 
{
$nm = $category;
}
// открываем файл, если файл не существует,
//делается попытка создать его
$fp = fopen("$nm$model.php", "w");
 
// записываем в файл текст
fwrite($fp, $text);
 
// закрываем
fclose($fp);
?>