<?php

$who = $_POST['name'];
$mail = $_POST['mail'];

if (empty ($who) || empty ($mail))
{
header ("Location: save.php");
}
else
{
$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection);
$query = mysql_query("SELECT * FROM reg WHERE who = '$who'");
$row = mysql_fetch_array ($query);
$name = $row['name'];
$number = $row['number'];
$pay = $row['pay'];
$bank = $row['bank'];
$code = $row['code'];
$fax = $row['fax'];
$adres = $row['adres'];
$who = $row['who'];  
$phone = $row['phone'];
mail("$mail", 
    "Ваши данные для входа", 
    "Название предприятия: $name;
 \n УНП: $number;
    \n Рассчетный счет: $pay; 
    \n Банк: $bank;
    \n Код банка: $code;
    \n Юридический адрес: $adres;
    \n Номер факса: $fax;
    \n Контактное лицо: $who;
    \n Телефон: $phone;");
header ("Location: vhod.php");
}
mysql_close();
?>