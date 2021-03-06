<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" src="./assets/img/icon.png">
  <script>
    WebFontConfig = {
      custom: {
        families: ['Montserrat', 'Gobold'],
        urls: ['./assets/fonts/fonts.css']
      }
    };

    (function(d) {
      var wf = d.createElement("script"),
        s = d.scripts[0];
      wf.src =
        "https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js";
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
    })(document);
  </script>
  <!-- <meta http-equiv="refresh"> -->
    <title>ISB - Home</title>
    <?php echo $css;?>
  </head>
  <body>
    <header>
        <nav id="menu">
          <a href="index.php" class="logo">
            <h1 class="hidden">ISB - logo</h1>
            <img src="./assets/img/logo_klein_320.png" alt="klein logo van Internationaal Straattheaterfestival Beveren">
          </a>
          <ul class="menu--list_item">
            <li>
              <a href="index.php?page=programma"
              class="
              <?php
                if($currentPage == 'programma'){
                  echo 'menu_active"';
                  echo 'aria-describedby="current"';
                }
              ?>
              ">Programma</a>
            </li>
            <li>
              <label for="drop" class="toggle">Meer <img src="./assets/img/dropdown.png" alt="pijltje naar beneden om dropdown duidelijk te maken"></label>
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
      <div class="container--footer">
        <article class="footer--article-opdehoogte">
          <h2 class="footer--title">Blijf op de hoogte!</h2>
          <a href="https://straattheaterfestivalbeveren.wordpress.com/"><img src="./assets/img/fb-logo.png" alt="klein logo van facebook als link naar facebook"></a>
        </article>
        <div class="footer--article-info">
          <article class="footer--article footer--slechtweer">
            <h2 class="footer--title">Algemeen</h2>
            <a href="index.php?page=programma">Programma</a>
            <a href="index.php?page=programma">Bij slecht weer</a>
          </article>
          <article class="footer--article">
            <h2 class="footer--title">Praktisch</h2>
            <p>Bereikbaarheid</p>
            <p>Toegankelijkheid</p>
            <p>Plan</p>
          </article>
          <article class="footer--article footer--slechtweer">
            <h2 class="footer--title">Organisatoren</h2>
            <a href="http://beverse-feesten.be/">Beveren Verbindt</a>
            <p>Vrijwilligers</p>
            <p>Partners</p>
          </article>
        </div>
      </div>
      <div class="footer--kleinetekst">
        <p>Privacy Policy</p>
        <p>&copy;Ayko De Smedt 2019  MAIII</p>
      </div>
    </footer>
    <?php echo $js; ?>
  </body>
</html>
