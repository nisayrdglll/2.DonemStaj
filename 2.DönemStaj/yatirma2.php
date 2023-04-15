<?php
include 'baglanti.php';
?>
              

<?php


if(($_POST))
{
  $yatirilacakTutar=$_POST['yatirilacakTutar'];
  $VeriTabaniSorgusu = mysqli_query($baglanti,"SELECT *FROM musteri WHERE online=1");
  $cikti=mysqli_fetch_array($VeriTabaniSorgusu);
  $id=$cikti['id'];
  $toplamBakiye=$cikti['toplamBakiye'];
  $Kullanici_Adi=$cikti['KullaniciAdi'];
  
   
  $guncelleSorgusu = mysqli_query($baglanti, "INSERT INTO islem(musteri_id,islemTipi,miktar) values('$id',1,'$yatirilacakTutar')");
                if($guncelleSorgusu){  
                  $toplamBakiye=$toplamBakiye+$yatirilacakTutar;
                  $guncelleSorgusu = mysqli_query($baglanti,"UPDATE musteri SET toplamBakiye='$toplamBakiye' WHERE KullaniciAdi='$Kullanici_Adi'");

                    if ($guncelleSorgusu) {
                     //echo "toplam bakiye güncellendi";
                    }
                }
                
                echo "<b>Toplam Bakiyeniz:</b>";
                echo $toplamBakiye;



}
else {
    echo "aaa";
  }  

?>
      

