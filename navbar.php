<link rel="stylesheet" href="css/navbar.css">

<div class="container_nav">
    <div class="logo">
      <a href="index.php"><img src="images/Best_Car.png" alt=""></a>
    </div>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <ul class="menu">
      <li><a href="prijava.php"><?php echo $_SESSION['username']; ?></a></li>
      <li><a href="objaviOglas.php">Objavi oglas</a></li>
      <li><a href="#">mojiOglasi</a></li>
      <li><a href="index.php?logout='1'" style="color: red;">Odjava</a></li>
      </ul>
    <?php endif ?>

    <ul class="menu">
      <li><a href="index.php">Oglasi</a></li>
      <li><a href="prijava.php">Prijava</a></li>
      <li><a href="registracija.php">Registracija</a></li>

    </ul>
  </div>