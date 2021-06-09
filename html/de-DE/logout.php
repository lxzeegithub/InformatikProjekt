<?php
  session_start();
  session_destroy();
?>

<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/logout.css">
    <title>AI Technology | Logout</title>
    <meta http-equiv="refresh" content="5; url=home.php">
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
    <div class="logout-card">
      <h1>Logged out</h1>
      <p>Du wirst gleich weitergeleitet...</p>
      <a href="./home.php" class="home-btn">Direkt zurück</a>
    </div>
  </body>
</html>
