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

// ������, ������� ����� ����������
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
// ��������� ����, ���� ���� �� ����������,
//�������� ������� ������� ���
$fp = fopen("$nm$model.php", "w");
 
// ���������� � ���� �����
fwrite($fp, $text);
 
// ���������
fclose($fp);
?>