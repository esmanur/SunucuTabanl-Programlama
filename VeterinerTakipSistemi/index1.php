<!DOCTYPE html>
<html lang="en">
<head>
  <title>Veteriner Takip Sistemi</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Yıldız Veteriner Kliniği</a>
    </div>

     <!-- menülerin ayarlanması örneğin ilaç satışı ekleye basınca index2.php ye yönlendirip çalıştırıyor -->
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index1.php">Anasayfa</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">İlaçlar <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index2.php">Yeni İlaç Satışı Ekle</a></li>

            <li><a href="ilaclistele.php">İlaç Listesi</a></li>
            <li><a href="sutun.php">Aylık Satış Analizi</a></li>
            <li><a href="daire.php">İlaç Kar Analizi</a></li>

          </ul>
        </li>


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Müşteriler<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index3.php">Yeni Müşteri Ekle</a></li>
            <li><a href="musteriliste.php">Müşterileri Listele</a></li>
            <li><a href="musterianaliz.php">Müşteri Analizi</a></li>
          </ul>
        </li>

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Mamalar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index4.php">Yeni mama Ekle</a></li>
            <li><a href="mamaliste.php">Mama Listesi</a></li>
           
             <li><a href="mamaanaliz.php">Aylık Mama Analizi</a></li>
          </ul>
        </li>


          <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hastalar<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index5.php">Yeni Hasta Ekle</a></li>
            <li><a href="hastalistele.php">Hasta Listesi</a></li>
            <li><a href="hastaanalizi.php">Hasta Analizi</a></li>
           
          </ul>
        </li>

       







      </ul>
      <ul class="nav navbar-nav navbar-right">
       
         <!-- logout php ye bağladım çıkış yapa basınca logout php çalışıyor -->
        
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>Çıkış Yap</a></li> 
        <div id="LoginModal" style="overflow: auto"


      </ul>
    </div>
  </div>
</nav>
   <!-- slayt ve resimleri ayarlama -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- resimleri bağlama -->
    <div class="carousel-inner">
      <div align="center" class="item active">
        <img src="animal.jpg"  alt="Anasayfa">
      </div>

      <div align="center" class="item"><img src="ciftlik.jpg" alt="ciftlik"></div>


      <div align="center" class="item">
        <img src="kedi.jpg" alt="Kedi">
      </div>

      <div align="center" class="item">
        <img src="kopek.jpg" alt="Köpek">
      </div>

       <div align="center" class="item">
        <img src="mamakedi.jpg" alt="mama">
      </div>
    </div>

    <!-- sag sol kontrolleri -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


</body>
</html>