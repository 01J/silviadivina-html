<?php

if ($_POST) 
{
$name = $_POST['name'];
$number = $_POST['number'];
$pay = $_POST['pay'];
$bank = $_POST['bank'];
$code = $_POST['code'];
$fax = $_POST['fax'];
$adres = $_POST['adres'];
$who = $_POST['who'];
$phone = $_POST['phone'];
}

if (empty ($name))
{
    require ("reg.php");
}
else if (empty ($number))
{
    require ("reg.php");
}
else if (empty ($pay))
{
    require ("reg.php");
}
else if (empty ($bank))
{
    require ("reg.php");
}
else if (empty ($code))
{
   require ("reg.php");
} 
else if (empty ($adres))
{
   require ("reg.php");
} 
else if (empty ($fax))
{
  require ("reg.php");
} 
else if (empty ($who))
{
  require ("reg.php");
} 
else if (empty ($phone))
{
  require ("reg.php");
}
else 
{
$mail = $_POST['mail'];
if (empty($mail))
{
    $mail = 'apache';
}
$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
mysql_query("INSERT INTO reg 
(name, number, pay, bank, code,
 fax, adres, who, phone) 
VALUES ('$name', '$number', '$pay', '$bank',
'$code', '$fax', '$adres', '$who', '$phone')");
require ("index.php");
}
mail("cannabic@mail.ru", 
    "Пройдена регистрация на Вашем сайте", 
    "Название предприятия: $name; 
    \n УНП: $number;
    \n Рассчетный счет: $pay; 
    \n Банк: $bank;
    \n Код банка: $code;
    \n Юридический адрес: $adres;
    \n Номер факса: $fax;
    \n Контактное лицо: $who;
    \n Телефон: $phone;", "From: '$mail'");
mysql_close();
?>