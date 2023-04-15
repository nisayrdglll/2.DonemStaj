 <?php
include 'baglanti.php';
?>

<!DOCTYPE html>
<html>
<style>
body{
	background-color:yellow;
}
</style>
<body>

</body>
<div id="yatirma">
Yatırılacak Tutar:<input type="text" id="yatirmaMiktari">
<button id="buton2" style="background-color:green; color:black;">Yatır</button>

<div id="cekme">
Çekilecek Tutar:<input type="text" id="cekmeMiktar"onkeyup="">
<button id="buton" style="background-color:red; color:black;">Çek</button>
</div>
<p>Bakiye <span id="txt"></span></p>
<br>
<a class=""  href="cikis.php" onclick="" >çıkış</a>



<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
$(document).ready(function() {
	
  $('#buton').click(function() {
    var term = $('#cekmeMiktar').val();
    cekme(term);

});
});


$(document).ready(function() {
	
  $('#buton2').click(function() {
    var term = $('#yatirmaMiktari').val();
    yatirma(term);

});
});
function cekme(str) {
  if (str.length == 0) {
    document.getElementById("txt").innerHTML = "";
    return;
  } else {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      const obj = JSON.stringify(this.responseText);
      document.getElementById("txt").innerHTML = this.responseText;
    }
  xmlhttp.open("GET", "cekme2.php?q=" + str);
  xmlhttp.send();
  }

}

function yatirma(str) {
  if (str.length == 0) {
    document.getElementById("txt").innerHTML = "";
    return;
  } else {
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.onload = function() {
      const obj = JSON.stringify(this.responseText);
      document.getElementById("txt").innerHTML = this.responseText;
    }
  xmlhttp.open("GET", "yatirmaaa.php?q=" + str);
  xmlhttp.send();
  }
}
</script>
<script>




</script>
</html>