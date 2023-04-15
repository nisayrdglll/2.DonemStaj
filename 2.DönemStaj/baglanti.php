<?php 
  $baglanti = mysqli_connect('localhost:330', 'root', '123456', 'banka');
  $baglanti->set_charset("utf8");
  if (!$baglanti) { 
      die('Hata: ' . mysqli_connect_error()); 
  }
  else
  {
    echo "";
  }
?>