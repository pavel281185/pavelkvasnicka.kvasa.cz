document.write(`
<!-- Body -->
<body>
  <div class="main-container">
    <!-- Header -->
    <header class="header" onclick="location.href='./index.html';">
      <h1 class="header-text">Pavel Kvasnička</h1>
    </header>
    <!-- Navigation -->
    <nav>
      <ul class="nav">
        <li class="nav-item" onclick="location.href='./omne.php';">O mně</li>
        <li class="nav-item" onclick="location.href='./portfolio.php';">
          Portfolio
        </li>
        <li class="nav-item" onclick="location.href='./fotogalerie.php';">
          Fotogalerie
        </li>
        <li class="nav-item" onclick="location.href='./kontakty.php';">
          Kontakty
        </li>
      </ul>
    </nav>
    `);