<?php
 include 'baglanti.php';
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>NİSA BANK</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700|Roboto:400,700&display=swap" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-11 offset-md-1 px-0">
            <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
              <a class="navbar-brand" href="">
                <span>
                  NİSA BANK
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                  <ul class="navbar-nav  ">
                    <li class="nav-item ">
                      <a class="nav-link pl-0" href="giris.html">Ana Sayfa <span class="sr-only">(current)</span></a>
                    </li>
                    <div id="demo">
                    <li class="nav-item active">
                      <a class="nav-link" href="yatirma2.php" onclick="loadDoc()"> Para Yatırma</a>
                    </li>
                    </div>
                    <li class="nav-item">
                      <a class="nav-link" href="cekme.php" onclick="loadCekme()">Para Çekme</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="banka.html">Çıkış</a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- end header section -->
  </div>
  <script type="text/javascript">
  function loadDoc(){

  const xhttp=new XMLHttpRequest();
  xhttp.onload=function(){
    document.getElementById("demo").innerHTML=this.responseText(); 
  }
  xhttp.open("post","yairma2.php");
  xhttp.send();
  }

function loadCekme(){

  const xhttp2=new XMLHttpRequest();
  xhttp2.onload=function(){
    document.getElementById("demo").innerHTML=this.responseText(); 
  }
  xhttp.open("post","yairma2.php");
  xhttp.send();
  }

  </script>

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Bankamıza Hoş Geldin
        </h2>
      </div>
      <div class="box layout_padding2-top layout_padding-bottom">
        <div class="detail-box">
          <p>
            
          </p>
        </div>
        <div class="img-box">
          <img src="images/banka.jpg" alt="" />
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="">
        Read More
      </a>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->
  <section class="info_section layout_padding-top layout_padding2-bottom">
    <div class="container">
      <div class="social_container">
        <h2>
          Follow Us
        </h2>
        <div class="social_box">
          <a href="https://www.facebook.com/">
            <img src="images/fb.png" alt="" />
          </a>
          <a href="https://twitter.com/">
            <img src="images/twitter.png" alt="" />
          </a>
          <a href="https://www.linkedin.com/feed/">
            <img src="images/linkedin.png" alt="" />
          </a>
          <a href="https://www.youtube.com/">
            <img src="images/youtube.png" alt="" />
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <div class="container">
      <p>
        &copy; 2020 All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section>
  <!-- footer section -->

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.width = "0%";
    }
  </script>

</body>

</html>