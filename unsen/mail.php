<?php 
 session_start();
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

else if (empty($size2) and empty($height2) or empty($ckolko2)) 
{
    mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n ��� ��������� $dir.");
}
else if (empty($size3) and empty($height3) or empty($ckolko3)) 
{
    mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n ��� ��������� $dir.");
}
else if (empty($size4) and empty($height4) or empty($ckolko4)) 
{
    mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��; 
    \n ��� ��������� $dir.");
}
else if (empty($size5) and empty($height5) or empty($ckolko5)) 
{
    mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��;
    \n $size4 / $height4 - $ckolko4 ��; 
    \n ��� ��������� $dir.");
}
else if (empty($size6) and empty($height6) or empty($ckolko6)) 
{
    mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��;
    \n $size4 / $height4 - $ckolko4 ��; 
    \n $size5 / $height5 - $ckolko5 ��;
    \n ��� ��������� $dir.");
}
else if (empty($size7) and empty($height7) or empty($ckolko7)) 
{
     mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��;
    \n $size4 / $height4 - $ckolko4 ��; 
    \n $size5 / $height5 - $ckolko5 ��;
    \n $size6 / $height6 - $ckolko6 ��;");
}    
else if (empty($size8)and empty($height8) or empty($ckolko8)) 
{
     mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��;
    \n $size4 / $height4 - $ckolko4 ��; 
    \n $size5 / $height5 - $ckolko5 ��;
    \n $size6 / $height6 - $ckolko6 ��;
    \n $size7 / $height7 - $ckolko7 ��; 
    \n ��� ��������� $dir.");
}
else if (empty($size9)and empty($height9) or empty($ckolko9)) 
{
      mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��;
    \n $size4 / $height4 - $ckolko4 ��; 
    \n $size5 / $height5 - $ckolko5 ��;
    \n $size6 / $height6 - $ckolko6 ��;
    \n $size7 / $height7 - $ckolko7 ��; 
    \n $size8 / $height8 - $ckolko8 ��; 
    \n ��� ��������� $dir.");
}
else if (empty($size10)and empty($height10) or empty($ckolko10)) 
{
      mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��;
    \n $size4 / $height4 - $ckolko4 ��; 
    \n $size5 / $height5 - $ckolko5 ��;
    \n $size6 / $height6 - $ckolko6 ��;
    \n $size7 / $height7 - $ckolko7 ��; 
    \n $size8 / $height8 - $ckolko8 ��; 
    \n $size9 / $height9 - $ckolko9 ��; 
    \n ��� ��������� $dir.");
} 
else {
    mail("cannabic@mail.ru", 
    "����� ����������", 
    "�������� �����������: $name; 
    \n ���: $number;
    \n ���������� ����: $pay; 
    \n ����: $bank;
    \n ��� �����: $code;
    \n ����������� �����: $adres;
    \n ����� �����: $fax;
    \n ���������� ����: $who;
    \n �������: $phone;
    \n ������ ������ ����������:$model;
    \n ��������� ��������:
    \n $size1 / $height1 - $ckolko1 ��;
    \n $size2 / $height2 - $ckolko2 ��; 
    \n $size3 / $height3 - $ckolko3 ��;
    \n $size4 / $height4 - $ckolko4 ��; 
    \n $size5 / $height5 - $ckolko5 ��;
    \n $size6 / $height6 - $ckolko6 ��;
    \n $size7 / $height7 - $ckolko7 ��; 
    \n $size8 / $height8 - $ckolko8 ��; 
    \n $size9 / $height9 - $ckolko9 ��; 
    \n $size10 / $height10 - $ckolko10 ��; 
    \n ��� ��������� $dir.");
}  
mysql_close(); 
?>  