

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

       <!-- burada giriş ekranı olduğu için vet takip sis oluyor kullanıcı girişine göre onun sayfası açılıyor bu yazı yerine kendi kliniğinin adı yazıyor -->
      <a class="navbar-brand" href="#">Veteriner Takip Sistemi</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Anasayfa</a></li>
       
         





      </ul>
      <ul class="nav navbar-nav navbar-right">
       
         <!-- giriş yapa basınca login.php ye yönlendiriyor -->
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>Giriş Yap</a></li>
        <div id="LoginModal" style="overflow: auto"


      </ul>
    </div>
  </div>
</nav>
  

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- slayt ayarlamaları -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

   
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

    <!-- sag sol ayarlamalrı -->
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