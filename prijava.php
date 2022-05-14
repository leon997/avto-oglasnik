<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Avto-oglasnik</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php include("navbar.php") ?>
  <div class="header">
  	<h2>Prijava</h2>
  </div>
	 
  <form method="post" action="prijava.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Uporabniško ime</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Geslo</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Potrdi</button>
  	</div>
  	<p>
  		Novi uporabnik? <a href="registracija.php">Ustvarite račun</a>
  	</p>
  </form>
</body>
</html>