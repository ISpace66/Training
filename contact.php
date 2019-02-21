<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php
  session_start();
  echo $_SESSION['username'];
   ?></title>
   <style> #map {
     height: 600px;
     width: 100%;
   }
   </style>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/contact.css"
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
  <div id="map"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: 47.5129992, lng: 19.1306074};

        // Create a map object and specify the DOM element for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 4
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Üdvözöllek!'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClV-6EvY16cD5I6PIPRQ52IrSC42VLpiQ&callback=initMap"
        async defer></script>
</nav>
<div class="container">
	<div class="box">
		<div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
		<div class='details'><h3>Magyarország</h3></div>
	</div>

	<div class="box">
		<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
		<div class='details'><h3>+36701234567</h3></div>
	</div>

	<div class="box">
		<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
		<div class='details'><h3>info@gmail.com</h3></div>
	</div>
</div>
</body>
</html>
