<?php
  session_start();
  $verhalten = 0;

  if(!isset($_SESSION["username"]) and !isset($_GET["page"])) {
    $verhalten = 0;
  }

  if($_GET["page"] == "log") {
    $user = $_POST["user"];
    $password = $_POST["password"];

    if($user == "Lukas" and $password =="AI_technology1") {
      $_SESSION["username"] = $user;
      $verhalten = 1;
    } else {
      $verhalten = 2;
    }
  }
?>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/login.css">
    <title>AI Technology | Login</title>
    <?php
      if($verhalten == 1) {
    ?>
      <meta http-equiv="refresh" content="0; url=dashboard.php">
    <?php
      }
    ?>
  </head>
  <body>
    <?php
      if($verhalten == 0) {
    ?>
      <header>
        <h1 class="logo">AI TECHNOLOGY</h1>
        <nav>
          <ul class="nav-area">
            <li><a href="./home.php">Home</a></li>
            <li><a href="#">Tutorial</a></li>
            <li><a href="#">Docs</a></li>
          </ul>
        </nav>
        <a href="login.php" class="btn-area">Login</a>
      </header>
      <div class="login-card">
        <h1>Login</h1>
        <form class="login" action="login.php?page=log" method="post">
          <div class="input">
            <input type="text" name="user" required>
            <span></span>
            <label>Benutzername</label>
          </div>
          <div class="input">
            <input type="password" name="password" required>
            <span></span>
            <label>Passwort</label>
          </div>
          <div class="password_forgot">
            <p>Passwort vergessen?</p>
          </div>
          <input type="submit" value="Login">
          <div class="signup">
            Kein Mitglied? <a href="login.php">Jetzt registrieren</a>
          </div>
        </form>
      </div>
    <?php
      }
      if($verhalten == 1) {
    ?>
      logged in
    <?php
      }
      if($verhalten == 2) {
    ?>
      <meta http-equiv="refresh" content="0; url=login.php">
    <?php
      }
    ?>
  </body>
</html>
