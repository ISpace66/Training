<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
	session_start();
	if (!empty($_SESSION['username'])) {
		header('location: home.php');
	}else{
		session_destroy();
	}
	$db =  new mysqli("localhost","root","","konyv");
	if (isset($_POST["submit"])) {
		$errors = array();
		$true = true;
		if (empty($_POST['username'])) {
			$true = false;
			array_push($errors,"A felhasználónév üres!");
		}
		if (empty($_POST['password'])) {
			$true = false;
			array_push($errors, "A jelszó üres!");
		}
		if ($true) {
			$username = mysqli_real_escape_string($db, $_POST['username']);
			$password = mysqli_real_escape_string($db, $_POST['password']);
			$password = md5($password);
			$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$query = $db->query($sql);
			if (mysqli_num_rows($query) == 1) {
				session_start();
				$_SESSION['username'] = $username;
				header('location: home.php');
			}else{
				array_push($errors, "A felhasználónév és a jelszó nem megfelelő!");
			}
		}
	}
	$db->close();
?>
<html>
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
  <link rel="stylesheet" href="css/mainHeader.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script>
  function main(){
    var username = document.forms['form']['username'];
    var password = document.forms['form']['password'];
    var errors = document.getElementById('erorrs');

    if (username.value == "" && password.value == "") {
      username.style.border = "1px solid red";
      password.style.border = "1px solid red";
      errors.innerHTML = "A felhasználónév és a jelszó üres!";
      username.focus();
      return false;

    }else if (username.value == ""){
      username.style.border = "1px solid red";
      username.focus();
      errors.innerHTML = "A felhasználónév üres!";
      return false;

    }else if (password.value == "") {
      password.style.border = "1px solid red";
      password.focus();
      errors.innerHTML = "A jelszó üres!";
      return false;
    }
  }
</script>
  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">FIFO-LIFO.KFT</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Bejelentkezés</h2>
   <p>Kérlek add meg felhasználóneved és jelszavad</p>
   </div>
    <form onsubmit="return main()" name="form" action="index.php" method="POST">

        <div class="form-group">

            <input type="text" class="form-control" id="inputEmail" placeholder="Felhasználónév" name="username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Jelszó" name="password">

        </div>
        <div class="forgot">
        <a href="register.php">Elfelejtetted a jelszavad?</a>
</div>
        <button type="submit" name="submit" class="btn btn-primary btn-block">Tovább</button>

				<a class="btn btn-light btn-block" href="register.php">Regisztrálok</a>

    </form>
    </div>
<p class="botto-text"> &copy;V&M Design - 2018 | Mobil: +36 11 111 11 11 </p>
</div></div></div>
<div id="errors"></div>
<?php
if (!empty($errors)) {
  foreach ($errors as $key) {
    echo $key."<br/>";
  }
}
?>
</body>
</html>
