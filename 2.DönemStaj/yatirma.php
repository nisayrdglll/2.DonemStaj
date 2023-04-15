


<form>
Yatırılacak Tutar:<input type="text" onkeyup="yatirma(this.value)">
</form>
<button id="yatirma">Yatır</button>
<p>Bakiye <span id="txt"></span></p>
 <script>
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