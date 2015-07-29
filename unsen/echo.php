<?php 
 session_start();
?>
<body onload = "window.print()">
<div id="bg"></div>  
<div id="content">
<?php
  $name = $_SESSION['name'];
  $number = $_SESSION['number'];
  $pay = $_SESSION['pay'];
  $bank = $_SESSION['bank'];
  $code = $_SESSION['code'];
  $fax = $_SESSION['fax'];
  $adres = $_SESSION['adres'];
  $who = $_SESSION['who'];  
  $phone = $_SESSION['phone'];
  $model = $_POST['model'];
  $size1 = $_POST['size1'];
  $height1 = $_POST['height1'];
  $ckolko1 = $_POST['ckolko1'];
  $size2 = $_POST['size2'];
  $height2 = $_POST['height2'];
  $ckolko2 = $_POST['ckolko2'];
  $size3 = $_POST['size3'];
  $height3 = $_POST['height3'];
  $ckolko3 = $_POST['ckolko3'];
  $size4 = $_POST['size4'];
  $height4 = $_POST['height4'];
  $ckolko4 = $_POST['ckolko4'];
  $size5 = $_POST['size5'];
  $height5 = $_POST['height5'];
  $ckolko5 = $_POST['ckolko5'];
  $size6 = $_POST['size6'];
  $height6 = $_POST['height6'];
  $ckolko6 = $_POST['ckolko6'];
  $size7 = $_POST['size7'];
  $height7 = $_POST['height7'];
  $ckolko7 = $_POST['ckolko7'];
  $size8 = $_POST['size8'];
  $height8 = $_POST['height8'];
  $ckolko8 = $_POST['ckolko8'];
  $size9 = $_POST['size9'];
  $height9 = $_POST['height9'];
  $ckolko9 = $_POST['ckolko9'];
  $size10 = $_POST['size10'];
  $height10 = $_POST['height10'];
  $ckolko10 = $_POST['ckolko10'];
$dir = $_POST['dir'];
if (empty($model) or empty($dir)) 
{   require("forma10.php");
}
else if
(empty($size1) or empty($height1) or empty($ckolko1)) 
{  require("forma10.php");
}
ECHO('<font size = 4px color="#333399" face="Verdana">'); 
ECHO('ֽאחגאםטו ןנוהןנטÿעטÿ: ');
ECHO($name);
ECHO('<br>');
ECHO('׃ֽֿ: '); 
ECHO($number);
ECHO('<br>');
ECHO('׀אססקועםûי סקוע: ');
ECHO($pay);
ECHO('<br>');
ECHO('ֱאםך: '); ECHO($bank);
ECHO('<br>');
ECHO('Êמה באםךא: '); ECHO($code);
ECHO('<br>');
ECHO('Þנטהטקוסךטי אהנוס: ');
ECHO($adres);
ECHO('<br>');
ECHO('ֽמלונ פאךסא: '); ECHO($fax);
ECHO('<br>');
ECHO('Êמםעאךעםמו כטצמ: ');
ECHO($who);
ECHO('<br>');
ECHO('ׂוכופמם: '); ECHO($phone);
ECHO('<br>');
ECHO('ֿנמסטל מערטעü סןוצמהוזהף: '); ECHO($model);
ECHO('<br>');
ECHO('ׁכוהף‏שטץ נאחלונמג: ');
ECHO('<br>');
if (empty($size2) and empty($height2) or empty($ckolko2)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO('<br>');
}
else if (empty($size3) and empty($height3) or empty($ckolko3)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO('<br>');
}

else if (empty($size4) and empty($height4) or empty($ckolko4)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO('<br>');
}
else if (empty($size5) and empty($height5) or empty($ckolko5)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO($size4); 
ECHO(' / ');
ECHO($height4);
ECHO(' - ');
ECHO($ckolko4);
ECHO(' רע');
ECHO('<br>');
}

else if (empty($size6) and empty($height6) or empty($ckolko6)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO($size4); 
ECHO(' / ');
ECHO($height4);
ECHO(' - ');
ECHO($ckolko4);
ECHO(' רע');
ECHO($size5); 
ECHO(' / ');
ECHO($height5);
ECHO(' - ');
ECHO($ckolko5);
ECHO(' רע');
ECHO('<br>');
}

else if (empty($size7) and empty($height7) or empty($ckolko7)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO($size4); 
ECHO(' / ');
ECHO($height4);
ECHO(' - ');
ECHO($ckolko4);
ECHO(' רע');
ECHO($size5); 
ECHO(' / ');
ECHO($height5);
ECHO(' - ');
ECHO($ckolko5);
ECHO(' רע');
ECHO($size6); 
ECHO(' / ');
ECHO($height6);
ECHO(' - ');
ECHO($ckolko6);
ECHO(' רע');
ECHO('<br>');
}

else if (empty($size8)and empty($height8) or empty($ckolko8)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO($size4); 
ECHO(' / ');
ECHO($height4);
ECHO(' - ');
ECHO($ckolko4);
ECHO(' רע');
ECHO($size5); 
ECHO(' / ');
ECHO($height5);
ECHO(' - ');
ECHO($ckolko5);
ECHO(' רע');
ECHO($size6); 
ECHO(' / ');
ECHO($height6);
ECHO(' - ');
ECHO($ckolko6);
ECHO(' רע');
ECHO($size7); 
ECHO(' / ');
ECHO($height7);
ECHO(' - ');
ECHO($ckolko7);
ECHO(' רע');
ECHO('<br>');
}

else if (empty($size9)and empty($height9) or empty($ckolko9)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO($size4); 
ECHO(' / ');
ECHO($height4);
ECHO(' - ');
ECHO($ckolko4);
ECHO(' רע');
ECHO($size5); 
ECHO(' / ');
ECHO($height5);
ECHO(' - ');
ECHO($ckolko5);
ECHO(' רע');
ECHO($size6); 
ECHO(' / ');
ECHO($height6);
ECHO(' - ');
ECHO($ckolko6);
ECHO(' רע');
ECHO($size7); 
ECHO(' / ');
ECHO($height7);
ECHO(' - ');
ECHO($ckolko7);
ECHO(' רע');
ECHO($size8); 
ECHO(' / ');
ECHO($height8);
ECHO(' - ');
ECHO($ckolko8);
ECHO(' רע');
ECHO('<br>');
}

else if (empty($size10)and empty($height10) or empty($ckolko10)) 
{
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO($size4); 
ECHO(' / ');
ECHO($height4);
ECHO(' - ');
ECHO($ckolko4);
ECHO(' רע');
ECHO($size5); 
ECHO(' / ');
ECHO($height5);
ECHO(' - ');
ECHO($ckolko5);
ECHO(' רע');
ECHO($size6); 
ECHO(' / ');
ECHO($height6);
ECHO(' - ');
ECHO($ckolko6);
ECHO(' רע');
ECHO($size7); 
ECHO(' / ');
ECHO($height7);
ECHO(' - ');
ECHO($ckolko7);
ECHO(' רע');
ECHO($size8); 
ECHO(' / ');
ECHO($height8);
ECHO(' - ');
ECHO($ckolko8);
ECHO(' רע');
ECHO($size9); 
ECHO(' / ');
ECHO($height9);
ECHO(' - ');
ECHO($ckolko9);
ECHO(' רע');
ECHO('<br>');
}

else {
ECHO($size1); 
ECHO(' / ');
ECHO($height1);
ECHO(' - ');
ECHO($ckolko1);
ECHO(' רע');
ECHO('<br>');
ECHO($size2); 
ECHO(' / ');
ECHO($height2);
ECHO(' - ');
ECHO($ckolko2);
ECHO(' רע');
ECHO('<br>');
ECHO($size3); 
ECHO(' / ');
ECHO($height3);
ECHO(' - ');
ECHO($ckolko3);
ECHO(' רע');
ECHO('<br>');
ECHO($size4); 
ECHO(' / ');
ECHO($height4);
ECHO(' - ');
ECHO($ckolko4);
ECHO(' רע');
ECHO('<br>');
ECHO($size5); 
ECHO(' / ');
ECHO($height5);
ECHO(' - ');
ECHO($ckolko5);
ECHO(' רע');
ECHO('<br>');
ECHO($size6); 
ECHO(' / ');
ECHO($height6);
ECHO(' - ');
ECHO($ckolko6);
ECHO(' רע');
ECHO('<br>');
ECHO($size7); 
ECHO(' / ');
ECHO($height7);
ECHO(' - ');
ECHO($ckolko7);
ECHO(' רע');
ECHO('<br>');
ECHO($size8); 
ECHO(' / ');
ECHO($height8);
ECHO(' - ');
ECHO($ckolko8);
ECHO(' רע');
ECHO('<br>');
ECHO($size9); 
ECHO(' / ');
ECHO($height9);
ECHO(' - ');
ECHO($ckolko9);
ECHO(' רע');
ECHO('<br>');
ECHO($size10); 
ECHO(' / ');
ECHO($height10);
ECHO(' - ');
ECHO($ckolko10);
ECHO(' רע');
ECHO('<br>');
}
ECHO('װָ־ הטנוךעמנא '); 
ECHO($dir);
ECHO('.');
ECHO('</B></font>');
?>
</div> 
</body>