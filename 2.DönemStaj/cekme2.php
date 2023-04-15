


                      

  <?php
include 'baglanti.php';
?>
  
<?php

  $cekilecekTutar=$_REQUEST['q'];;
  $VeriTabaniSorgusu = mysqli_query($baglanti,"SELECT * FROM musteri WHERE online=1");
  $cikti=mysqli_fetch_array($VeriTabaniSorgusu);
  $id=$cikti['id'];
  $toplamBakiye=$cikti['toplamBakiye'];
  
  $guncelleSorgusu = mysqli_query($baglanti, "INSERT INTO islem(musteri_id,islemTipi,miktar) values($id,2,'$cekilecekTutar')");
                if($guncelleSorgusu){  
                  $toplamBakiye=$toplamBakiye-$cekilecekTutar;
                  $guncelleSorgusu = mysqli_query($baglanti,"UPDATE musteri SET toplamBakiye='$toplamBakiye' WHERE id='$id'");

                    if ($guncelleSorgusu) {
                     //echo "toplam bakiye güncellendi";
                    }
                }
                
                echo $toplamBakiye;
				echo "<br>";

?>



  


  

</body>

</html>