<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php
  $db = new mysqli('localhost','root','','konyv');
  if (isset($_POST['submit'])) {
      $errors = array();
      $true = true;
      if (empty($_POST['username'])) {
        $true = false;
        array_push($errors, "A felhasználónév üres!");
      }
      if (empty($_POST['password'])) {
        $true = false;
        array_push($errors, "A jelszó üres!");
      }
      if (empty($_POST['password2'])) {
        $true = false;
        array_push($errors, "A jelszó megerősítése üres!");
      }
      if (!($_POST['password']==$_POST['password2'])) {
        $true = false;
        array_push($errors, "A jelszavak nem egyeznek!");
      }
      if ($true) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password = md5($password);

        $sql = "INSERT INTO users(username, password, Date) VALUES('$username','$password',NOW())";
        $db->query($sql);
        session_start();
        $_SESSION['username'] = $username;
        header('location: index.php');
      }
  }
  $db->close();
?>
<html lang="hu" dir="ltr">
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" href="css/mainHeader.css"
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">FIFO-LIFO.KFT</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Regisztrálj</h2>
   <p>Készítsd el fiókod hogy felfedezhesd szolgáltatásaink!</p>
   </div>
    <form id="Login" form action="register.php" method="POST"/>

        <div class="form-group">


            <input type="text" class="form-control" id="inputEmail" placeholder="Felhasználónév" name="username" />

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Jelszó" name="password" />

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Jelszó megerősítése" name="password2" />

        </div>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Regisztráció</button>
        <a class="btn btn-light btn-block" href="index.php">Bejelentkezés</a>
    </form>
    </div>
<p class="botto-text"> &copy;V&M Design - 2018 | Mobil: +36 11 111 11 11 </p>
</div></div></div>
<?php
  if (!empty($errors)) {
    foreach ($errors as $key) {
      echo $key."<br/>";
    }
  }
 ?>
</body>
</html>
