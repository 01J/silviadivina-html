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
      $month ="������";
	break;
	case February: 
      $month ="�������";
	break;
	case March: 
      $month ="�����";
	break;
	case April: 
      $month ="������";
	break;
	case May:
      $month ="���";
	break;
	case June: 
      $month ="����";
	break;
        case July: 
      $month ="����";
	break;
	Case August:
      $month ="�������";
	break;
	case September: 
     $month ="��������";
	break;
	case October: 
      $month ="�������";
	break;
	case November: 
      $month ="������";
	break;
	case December :
      $month ="�������";
	break;
}
$date = $number." ".$month." ".$year;
mysql_query("INSERT INTO book (name, text, date, time) 
VALUES ('$name', '$text', '$date', '$time')");
header ("Location: book.php");
}
mail("cannabic@mail.ru", 
    "�������� �����", 
    "� �������� ����� ����� ��������� �� $name:
    \n $text 
    \n ��������� $date � $time.");
mysql_close();
?>