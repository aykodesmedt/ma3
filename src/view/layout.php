<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ISB - Home</title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
        <!-- <a href="index.php"><img src="./assets/img/logo_klein_1440.png" alt="logoKlein"/></a> -->
        <nav>
          <a href="index.php" class="logo">
            <img src="./assets/img/logo_klein_320.png" alt="logoKlein"/>
          </a>
          <ul class="menu_list">
            <li>
              <a href="index.php?page=programma">Programma</a>
            </li>
            <li>
              <label for="drop" class="toggle">Meer</label>
              <input type="checkbox" id="drop" />
                <ul class="menu">
                  <li><a href="#">Flashback</a></li>
                  <li><a href="#">Praktisch</a></li>
                  <li><a href="#">Organisatoren</a></li>
                </ul>
            </li>
          </ul>
        </nav>
    </header>
    <main>
      <?php echo $content;?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
