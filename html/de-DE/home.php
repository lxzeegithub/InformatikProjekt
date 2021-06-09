<?php
  session_start();
?>

<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="../css/home.css">
    <title>AI Technology | Home</title>
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
    <section class="intro">
      <div class="container grid">
        <div class="intro-text card">
          <h1>Was ist eine KI?</h1>
          <p>„KI“ steht für Künstliche Intelligenz (im englischen „AI“) und ist der Überbegriff für Anwendungen, bei denen Maschinen menschenähnliche Intelligenzleitungen wie Lernen, Urteilen und Problemlösungen erbringen. Dabei wird eine Künstliche Intelligenz trainiert und lernt dadurch menschliche Fähigkeiten wie logisches Denken, Lernen, Planen und Kreativität zu imitieren. KI ermöglicht es technischen Systemen, ihre Umwelt wahrzunehmen, mit dem Wahrgenommenen umzugehen und Probleme zu lösen, um ein bestimmtes Ziel zu erreichen.</p>
        </div>
      </div>
    </section>
    <section class="language">
      <div class="container grid">
        <div class="language-text card">
          <h1>Welche Programmiersprache?</h1>
          <ul>
            <li>
              <p>Wenn man eine KI entwickeln möchte, sollte man sich zuerst eine passende Programmiersprache aussuchen. Python ist zweifellos die beste Programmiersprache, wenn es um Künstliche Intelligenzen geht. Python bietet die größte Auswahl an Machine.- und Deep Learning Frameworks und ist zudem sehr einfach zu lernen.</p>
            </li>
            <li><img src="../img/python.png" class="python-logo"></li>
          </ul>
        </div>
      </div>
    </section>
  </body>
</html>
