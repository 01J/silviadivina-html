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
    "�������� ����������� �� ����� �����", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;", "From: '$mail'");
mysql_close();
?>