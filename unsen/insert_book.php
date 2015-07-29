<?php
$host = 'localhost';
$user = 'unsen';
$pass = 'aO4pRdXS';
$db = 'unsen';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 

if ($_POST) 
{
$name = $_POST['name'];
$text = $_POST['text'];
}

if (empty ($name))
{
    require ("book.php");
}
else if (empty ($text))
{
    require ("book.php");
}
else 
{
$month = date("F");
$year = date("Y");
$number = date("j");
$time = date("G:i:s");
switch($month)
{
	Case January:
      $month ="января";
	break;
	case February: 
      $month ="февраля";
	break;
	case March: 
      $month ="марта";
	break;
	case April: 
      $month ="апреля";
	break;
	case May:
      $month ="мая";
	break;
	case June: 
      $month ="июня";
	break;
        case July: 
      $month ="июля";
	break;
	Case August:
      $month ="августа";
	break;
	case September: 
     $month ="сентября";
	break;
	case October: 
      $month ="октября";
	break;
	case November: 
      $month ="ноября";
	break;
	case December :
      $month ="декабря";
	break;
}
$date = $number." ".$month." ".$year;
mysql_query("INSERT INTO book (name, text, date, time) 
VALUES ('$name', '$text', '$date', '$time')");
header ("Location: book.php");
}
mail("cannabic@mail.ru", 
    "Гостевая книга", 
    "В гостевой книге новое сообщение от $name:
    \n $text 
    \n Добавлено $date в $time.");
mysql_close();
?>