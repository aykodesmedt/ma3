<!DOCTYPE html>
<html lang="nl">
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
            <h1>
              <img src="./assets/img/logo_klein_320.png" alt="logoKlein"/>
            </h1>

          </a>
          <ul class="menu_list">
            <li>
              <a href="index.php?page=programma"
              class="
              <?php
                if($currentPage == 'programma'){
                  echo 'menu_active';
                }
              ?>
              ">Programma</a>
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
      <?php echo $content; ?>
    </main>
    <footer>
      <div class="footer_text">
        <article class="footer_article_opdehoogte">
          <h2 class="footer_title">Blijf op de hoogte!</h2>
          <img src="./assets/img/fb-logo.png" alt="">
        </article>
        <div class="footer_article_rest">
          <article class="footer_article">
            <h2 class="footer_title">Algemeen</h2>
            <p>Programma</p>
            <p>Bij slecht weer</p>
          </article>
          <article class="footer_article">
            <h2 class="footer_title">Praktisch</h2>
            <p>Bereikbaarheid</p>
            <p>Toegankelijkheid</p>
            <p>Plan</p>
          </article>
          <article class="footer_article">
            <h2 class="footer_title">Organisatoren</h2>
            <p>Beveren Verbindt</p>
            <p>Vrijwilligers</p>
            <p>Partners</p>
          </article>
        </div>
      </div>
      <p>&copy;Ayko De Smedt 2019  MAIII</p>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
