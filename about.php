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

<div class="container">
  <center><h3>Ismerj meg minket</h3>
    <p>Vállalkozásunk több éves alkalmazotti jogviszony, könyvelőirodában szerzett vezetői tapasztalat után jött létre. Fontosnak tartjuk, hogy nem csupán mérlegképes könyvelői szakképesítés során megszerzett ismeret alapján, hanem közgazdász fejjel gondolkodva találjuk meg ügyfeleinknek a legjobb lehetőségeket. Célunk, hogy ügyfeleink számára törvényes keretek közt megtaláljuk a lehető legköltséghatékonyabb működési feltételeket, melyeket ezekben az időkben kiemelten fontosak tartunk a vállalkozások életében .Hatalmas erényünk, hogy fiatalos lendülettel követjük nyomon a folyamatos jogszabályi változásokat, ezzel naprakész hasznos információkkal segítjük ügyfeleink munkáját.<p>
      <p>Társaságunk célja, hogy kedvező áron nyújtson magas színvonalú, és a megrendelők igényeihez alkalmazkodó szolgáltatást az egészen kis „családi” vállalkozások, egyéni vállalkozók, illetve a kis és közepes vállalatok számára is.</p>
      <p>Tisztában vagyunk azzal, hogy a vállalkozások vezetőinek nem feladata az adó és számviteli jogszabályok ismerete és eligazodás a szabályok dzsungelében, ezért nem kizárólag a szigorúan vett számviteli munkát végezzük el, hanem tájékoztatjuk ügyfeleinket a cégükre vonatkozó szabályok alkalmazásáról, a fontosabb teendőkről, tanácsot adunk azokban az adminisztratív kérdésekben is, amelyek nem a könyveléssel, hanem a cégnél folytatott adminisztrációs feladataival kapcsolatosak.</p>
      <p>Tájékoztatást adunk arról, ha az átadott anyagok kapcsán felmerül annak a lehetősége, hogy az üzletvitel során olyan hibák merülnek fel, amelyek következménye egy esetleges bírság lehet. Időben tájékoztatjuk a vállalkozást fizetési kötelezettségeiről.</p>
      <p>Vállaljuk a cég képviseletét az Adóhatóság előtt az ellenőrzések során, ezért külön díjat nem számítunk fel évi két adóellenőrzés esetében. A cégek átalakulásával (beolvadás, összeolvadás, szétválás, kiválás) kapcsolatos számviteli teendőket is elvégezzük, partnereink segítségével a szükséges jogi és könyvvizsgálati munkával együtt. Ilyen esetben Önnek csak minket kell megkeresnie a változással kapcsolatban, mi tájékoztatjuk a lehetőségekről, választása után pedig azt Önt érintő teendőkről.</p>
      <br>
      <b><p>Néhány ok, amiért szívesen választják könyvelő irodámat:</p>
      <ul class="list-group list-group-flush">
  <li class="list-group-item">•	12 év szakmai tapasztalat és rutin</li>
  <li class="list-group-item">•	Kölcsönös bizalom, ami nem csak szó, ügyfeleim meg is éreznek.</li>
  <li class="list-group-item">•	Szolgáltatásom több mint könyvelés, konzultáció és szakmai tanácsadás is egyben.</li>
  <li class="list-group-item">•	Laikus számára is érhető nyelven beszélek, nem számviteli szakzsargonban.</li>
  <li class="list-group-item">•	Kedves, családias légkörben könnyebb az egyeztetés.</li>
  <li class="list-group-item">•	Folyamatos továbbképzéseknek köszönhetően naprakész tudással rendelkezem.</li>
  <li class="list-group-item">•	Kizárólag szerződéses formában, legálisan végzem a munkám.</li>
  </b>
</ul>
</div>
</center>
</body>
</html>
