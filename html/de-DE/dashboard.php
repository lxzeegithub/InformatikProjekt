<?php
  session_start();
  if(isset($_SESSION["username"])) {
?>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>AI Technology | Dashboard</title>
  </head>
  <body>
    <header>
      <h1 class="logo">AI TECHNOLOGY</h1>
      <nav>
        <ul class="nav-area">
          <li><a href="./home.php">Home</a></li>
          <li><a href="#">Tutorial</a></li>
          <li><a href="#">Docs</a></li>
        </ul>
      </nav>
      <a href="logout.php" class="btn-area">Ausloggen</a>
    </header>
  </body>
</html>
<?php
} else {
?>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/fail_login.css">
    <title>AI Technology | Not logged in</title>
  </head>
  <body>
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
    <div class="login-fail-card">
      <h1>You are not logged in!</h1>
      <p>Please log in with the button below.</p>
      <a href="./login.php" class="login-btn">Login</a>
    </div>
  </body>
</html>
<?php
  }
?>
