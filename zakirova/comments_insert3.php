<?php

$name = $_POST['name'];
$mail = $_POST['mail'];
$comment = $_POST['comment'];

if (empty ($name))
{
    require ("money.html");
}
else if (empty ($mail))
{
    require ("money.html");
}
else if (empty ($comment))
{
   require ("money.html");
} 

$host = 'localhost';
$user = 'u35712_elena';
$pass = 'PlaJ7Y30';
$db = 'u35712_elenacoach';
$connection = mysql_connect($host, $user, $pass);
mysql_select_db($db, $connection);
mysql_query("set names 'cp1251'", $connection); 
mysql_query("INSERT INTO commentarii
(name, mail, comment) 
VALUES ('$name', '$mail', '$comment')");
require ("money.html");
?>