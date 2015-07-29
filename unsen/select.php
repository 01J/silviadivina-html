<?php

$postname = $_POST['name'];
$postnumber = $_POST['number'];


$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection);
$query = mysql_query("SELECT * FROM reg WHERE name = '$postname' AND number = '$postnumber'");
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
if ($postname=$name  and $postnumber=$number)
{
   require("forma10.php");
  session_start();
  $_SESSION['name'] = $name;
  $_SESSION['number'] = $number;
  $_SESSION['pay'] = $pay;
  $_SESSION['bank'] = $bank;
  $_SESSION['code'] = $code;
  $_SESSION['fax'] = $fax;
  $_SESSION['adres'] = $adres;
  $_SESSION['who'] = $who;  
  $_SESSION['phone'] = $phone; 
}
else 
{
   require("vhod.php");
}
mysql_close();
?>