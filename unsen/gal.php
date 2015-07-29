<?php
  $img1   = 'images/katalog/1/';
  $img2 = 'images/katalog/2/';
  $img3   = 'images/katalog/3/';
  $img4 = 'images/katalog/4/';
  $img5   = 'images/katalog/5/';
  $img6 = 'images/katalog/6/';
  $img7   = 'images/katalog/7/';
  $img8 = 'images/katalog/8/';
  $img9 = 'images/katalog/9/';
  $thumb9 = '9/';
  $img10   = 'images/katalog/10/';
  $img11 = 'images/katalog/11/';
  $img12   = 'images/katalog/12/';
  $img13 = 'images/katalog/13/';
  $img14   = 'images/katalog/14/';
  $img15 = 'images/katalog/15/';
  $img16   = 'images/katalog/16/';
  $img17 = 'images/katalog/17/';
  $img18 = 'images/katalog/18/';
  $img19   = 'images/katalog/19/';
  //  Получает файлы, расположенные в директории 
  //  @param $path : String - путь к директории с файлами, 
  //  return Array - индексный массив, содержащий файлы
  function getFiles(/*string*/$path)
  {
    // результат выполнения функции is_dir кэшируется,
    // поэтому сбрасываем кэш.
    clearstatcache();
     
    $files = scandir($path);
     
    for($i = 0, $length = count($files); $i < $length; $i++)
    {
      // Исключаем из списка директории:
      if( is_dir($path.$files[$i]) )
      {
        unset($files[$i]);
      }
    }
    return $files; //array
  }
session_start();
?>