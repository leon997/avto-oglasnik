<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Avto-oglasnikL</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

    <?php include 'navbar.php';?>

  <div class="header">
  	<h2>Registracija</h2>
  </div>
	
  <form method="post" action="registracija.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Uporabniško ime</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Geslo</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Ponovno vnesite geslo</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Potrdi</button>
  	</div>
  	<p>
  		Obstoječi uporabnik? <a href="prijava.php">Prijava</a>
  	</p>
  </form>
</body>
</html>