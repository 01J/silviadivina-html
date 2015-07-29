<?php

$name = $_POST['name'];
$problem = $_POST['problem'];
$skype = $_POST['skype'];

if (empty ($name))
{
    require ("blank.html");
}
else if (empty ($problem))
{
    require ("blank.html");
}
else if (empty ($skype))
{
   require ("blank.html");
} 
else {
$host = 'localhost';
$user = 'u35712_elena';
$pass = 'PlaJ7Y30';
$db = 'u35712_elenacoach';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
mysql_query("INSERT INTO blank 
(name, problem, skype) 
VALUES ('$name', '$problem', '$skype')");
mail("eolena2@gmail.com", "Заявка на коуч-сессию", "Имя клиента: ".$name."\n Текст заявки: ".$problem."\n Логин клиента вkype: ".$skype); 
require('news1.html');

}



?>