<?php
$dollar=$_POST['dollar'];
if (empty ($dollar))
{
    header ("Location: http://diano4ka96.narod.ru/dollar_change.html");
    exit();
}
$filename = 'dollar_template.php';
$file = file_get_contents($filename);
$file = str_replace('8000', $dollar, $file);

file_put_contents('dollar.php', $file);
?>