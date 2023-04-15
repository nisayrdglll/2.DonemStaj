<?php 
 include 'baglanti.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GİRİŞ</title>
</head>
<body>
<?php
session_start();

if($_POST['giris'])
{
  $Kullanici_Adi=$_POST['ad'];
  $Sifre=$_POST['sifre'];
  
  if($Kullanici_Adi==""||$Sifre=="")
  {
    //header("location: contact.html");
     $message="Kullanıcı adı veya şifre boş geçilemez";
     echo "<script>alert('$message')</script>";
     echo "<script>window.location='contact.html'</script>";
  }
 
  else{
     $KullaniciSor="SELECT *FROM musteri WHERE KullaniciAdi='$Kullanici_Adi' AND sifre='$Sifre'";
     $gonder=mysqli_query($baglanti,$KullaniciSor);
     $cikti=mysqli_fetch_array($gonder);
     //$id=$cikti['id'];
     $KullaniciSayisi=mysqli_num_rows($gonder);
     if($KullaniciSayisi>0)
     {
       $KullaniciSor="UPDATE musteri SET online=1 WHERE KullaniciAdi='$Kullanici_Adi'";
       $gonder=mysqli_query($baglanti,$KullaniciSor);
       $_SESSION['kullaniciAdi']=$Kullanici_Adi;
       $_SESSION['password']=$Sifre;
       $_SESSION['id']=$id;
      echo '<script>window.location.href="giris2.php"</script>';

     }
     else
     {
      
      $message="Kullanıcı adı veya şifre hatalı";
      echo "<script>alert('$message')</script>";
      echo "<script>window.location='contact.html'</script>";

     }

  }
  


}

?>
</body>
</html>
