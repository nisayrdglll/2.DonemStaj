<?php
include 'baglanti.php';
?>
<?php

echo '<script>
var cikis=prompt("Çıkmak için 0 giriniz", "");
</script>';
$cikis='<script>document.write(cikis);</script>';
$cikis=0;
if($cikis==0)
{
	 $KullaniciSor="UPDATE musteri SET online=0";
       $gonder=mysqli_query($baglanti,$KullaniciSor);
       if($gonder)
       {
       	echo "güncellendi";
       	header("location:banka.html");
       }
       else
       {
       	echo "bb";
       }
}
else
{
	echo "aaa";
}

?>