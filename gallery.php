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
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/thumbnail-gallery.css">

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

<div class="container gallery-container">

    <h1>Ismerjen meg minket a mindennapjainkban.</h1>

    <p class="page-description text-center">A közgazdaságtan sokoldalúsága a mindennapokban.</p>

    <div class="tz-gallery">

        <div class="row">

            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/park.jpg">
                        <img src="img/park.jpg" alt="Park">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>A természet, mint mentsvár a rohanó életben.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/bridge.jpg">
                        <img src="img/bridge.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>A megfelelő szakemberek műve.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/tunnel.jpg">
                        <img src="img/tunnel.jpg" alt="Tunnel">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>A befektetések gyümölcse.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/coast.jpg">
                        <img src="img/coast.jpg" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Fontos a megfelelő gazdálkodás.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/rails.jpg">
                        <img src="img/rails.jpg" alt="Rails">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>Csupán egy lehetőség a sok lehetőség közül.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="img/traffic.jpg">
                        <img src="img/traffic.jpg" alt="Traffic">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        <p>A szürke hétköznapokat is megélhetjük színesként.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
