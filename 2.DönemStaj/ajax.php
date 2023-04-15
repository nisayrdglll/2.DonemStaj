<?php
$href=explode('/',rtrim($_POST['href'],'/'));
switch ($href[0]) {
	case 'yatirma':
		  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        
        <div class="row" >
            <div class="col-md-9 mx-auto">
              <div class="contact-form">
                <form action="" method="post">
                  <div >
                  Yatırılacak Tutarı Giriniz:
                  <br>
                    <input type="text" placeholder="Miktar" name="yatirilacakTutar">
                  </div>
                  <br>
                  <div class="d-flex justify-content-center" float="left">
                    <input type="submit" style="background-color:yellow;color:black" value="Yatır" name="submit" class="btn_on-hover">
                   
                 </div>
               </form>
              
      </div>
      <div class="box layout_padding2-top layout_padding-bottom">
        <div class="detail-box">
       
        </div>
        <div class="img-box">
          <img src="images/banka.jpg" alt="" />
        </div>
      </div>
    </div>
    
  </section>

   <?php

if(isset($_POST['submit']))
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
                echo "<br>";
                echo "<p><b>Toplam Bakiyeniz:</b></p>";
                echo $toplamBakiye;

}


?>
		break;


?>