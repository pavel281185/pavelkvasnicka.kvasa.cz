<!-- <script src="head.js"></script> -->
<!-- <script src="header-navigation.js"></script> -->
<!DOCTYPE html>
<html lang="cs">
  <!-- Head -->
  <head>
    <!-- Main head settings -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Pavel Kvasnička" />
    <meta name="keywords" content="Pavel, Kvasnička, prezentace, osobní" />
    <meta name="robots" content="index,follow" />
    <meta
      name="description"
      content="Pavel Kvasnička - osobní webové stránky."
    />
    <!-- Linked favicon -->
    <link rel="shortcut icon" href="./ico/favicon.png" type="image/x-icon" />
    <!-- Linked CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" />
    <!-- Linked Lightbox files -->
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css" />
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <!-- Title -->
    <title>Pavel Kvasnička</title>
  </head>
  <!-- Body -->
  <body>
    <!-- Header -->
    <header class="page-header">
      <h1 class="header-text" onclick="location.href='./index.html';">
        Pavel Kvasnička
      </h1>
      <!-- Navigation -->
      <nav>
        <ul class="nav">
          <li class="nav-item" onclick="location.href='./index.html';">Domů</li>
          <li class="nav-item" onclick="location.href='./omne.html';">O mně</li>
          <li class="nav-item" onclick="location.href='./praxe.html';">
            Praxe
          </li>
          <li class="nav-item" onclick="location.href='./fotogalerie.html';">
            Fotogalerie
          </li>
          <li
            class="nav-item active-nav-item"
            onclick="location.href='./kontakty.html';"
          >
            Kontakty
          </li>
        </ul>
      </nav>
    </header>
    <!-- Main content -->
    <div class="master">
      <main class="main-article">
<?php
$jmeno = $_POST['jmeno'];
$email = $_POST['email'];
$spam = $_POST['spam'];
$zprava = $_POST['zprava'];

if ($jmeno!="" and $email!="" and $zprava!="" and $spam=="2")
{
Mail("pavelkvasnicka@gmail.com", $jmeno, $zprava, "From: " . $email);
echo "<p><strong>Váš e-mail byl úspěšně odeslán</strong>.</p>";
}
else
{
echo "<p>Váš e-mail se <strong>nepodařilo odeslat</strong> pravděpodobně jste nevyplnili všechny údaje, nebo nevíte kolik je 1 + 1.</p>";
}
?>
      </main>
    </div>
    <!-- Footer -->
    <footer class="main-footer">
    <div>&copy;&nbsp;<span id="year">2021</span></div>
      &nbsp;Pavel Kvasnička&nbsp;
      <a href="mailto:pavelkvasnicka@gmail.com">pavelkvasnicka@gmail.com</a>
      <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
      </script>
    </footer>
  </body>
</html>
<!-- <script src="footer.js"></script> -->