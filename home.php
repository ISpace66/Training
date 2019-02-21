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
     <div id="myCarousel" class="carousel slide" data-ride="carousel">
       <!-- Indicators -->
       <ol class="carousel-indicators">
         <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
         <li data-target="#myCarousel" data-slide-to="1"></li>
         <li data-target="#myCarousel" data-slide-to="2"></li>
       </ol>

       <!-- Wrapper for slides -->
       <div class="carousel-inner">
         <div class="item active">
           <img src="img/header_11810.jpg" alt="könyvelés" style="width:100%;">
         </div>

         <div class="item">
           <img src="img/header_11810.jpg" alt="könyvelés" style="width:100%;">
         </div>

         <div class="item">
           <img src="img/header_11810.jpg" alt="könyvelés" style="width:100%;">
         </div>
       </div>

       <!-- Left and right controls -->
       <a class="left carousel-control" href="#myCarousel" data-slide="prev">
         <span class="glyphicon glyphicon-chevron-left"></span>
         <span class="sr-only">Előző</span>
       </a>
       <a class="right carousel-control" href="#myCarousel" data-slide="next">
         <span class="glyphicon glyphicon-chevron-right"></span>
         <span class="sr-only">Következő</span>
       </a>
     </div>
   </nav>
   <div class="jumbotron text-center">
     <h1>FIFO-LIFO.KFT</h1>
     <p>Keressen minket bizalommal, munkatársaink segítséget nyújtanak Önnek mindenben!</p>
	 <p>Szedje le önéletrajzom hogy jobban megismerhessen!</p>
	 <a href="office/Önéletrajz kitalált.docx" class="btn btn-warning">Letöltés</a>
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
   </body>
   </html>
