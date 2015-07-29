<?php
$A=$_POST['ok'];
$B=$_POST['print'];
if (empty($A))
{
include('echo.php');
}
else if (empty($B))
{
include('mail.php');
}
?>