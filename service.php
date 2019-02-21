<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php
  session_start();
  echo $_SESSION['username'];
   ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">FIFO-LIFO.KFT</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="color-me"><a href="home.php">Főoldal</a></li>
      <li class="color-me"><a href="about.php">Rólunk</a></li>
      <li class="color-me"><a href="service.php">Szolgáltatás</a></li>
      <li class="color-me"><a href="gallery.php">Galéria</a></li>
      <li class="color-me"><a href="contact.php">Elérhetőségek</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Kijelentkezés</a></li>
    </ul>
  </div>
</nav>
<div class="carousel-item active" style="background-image: url('img/konyv2.jpg')">
      <div class="carousel-caption d-none d-md-block">
      </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Számviteli szolgáltatás</h3>
      <p>A számviteli szolgáltatás a számviteli törvényben, továbbá a kapcsolódó kormányrendeletben előírt...</p>
    </div>
    <div class="col-sm-4">
      <h3>Könyviteli szolgáltatások</h3>
      <p>a számviteli politika, a könyvviteli elszámolás, a beszámoló-készítés rendszerének...</p>
    </div>
    <div class="col-sm-4">
      <h3>Bérszámfejtés</h3>
      <p>A bérszámfejtés magába foglalja a munkaadó és a munkavállaló és egyéb jogviszonyban állók bér és bérjellegű juttatásaival...</p>
    </div>
    <div class="col-sm-4">
      <h3>Pénzügyi szolgáltatás</h3>
      <p>Pénzügyi szolgáltatás, kiegészítő pénzügyi szolgáltatás a pénzügyi intézmények ...</p>
    </div>
    <div class="col-sm-4">
      <h3>Pénzügyi tevékenységek</h3>
      <p>betét gyűjtése és más visszafizetendő pénzeszköz nyilvánosságtól történő elfogadása...</p>
      <p>hitel és pénzkölcsön nyújtása...</p>
    </div>
    <div class="col-sm-4">
      <h3>Adótanácsadási tevékenységek</h3>
      <p>költségvetési kapcsolatokhoz tartozó bevallások készítése és ellenőrzése...</p>
      <p>bevallásokhoz kapcsolódó számviteli feltételrendszer ellenőrzése...</p>
    </div>
  </div>
</div>

<div style="text-align:center">
  <button onclick="playPause()" type="button" class="btn btn-warning">Lejátszás/Megállítás</button>
  <button onclick="makeBig()" type="button" class="btn btn-warning">Nagy</button>
  <button onclick="makeSmall()" type="button" class="btn btn-warning">Kicsi</button>
  <button onclick="makeNormal()" type="button" class="btn btn-warning">Közepes</button>
  <br><br>
  <video id="video1" width="420">
    <source src="office/Szolgáltatásaink.mp4" type="video/mp4">
    <source src="Szolgáltatásaink.ogg" type="video/ogg">
    Your browser does not support HTML5 video.
  </video>
</div>

<script>
var myVideo = document.getElementById("video1");

function playPause() {
    if (myVideo.paused)
        myVideo.play();
    else
        myVideo.pause();
}

function makeBig() {
    myVideo.width = 560;
}

function makeSmall() {
    myVideo.width = 320;
}

function makeNormal() {
    myVideo.width = 420;
}
</script>
</body>
</html>
