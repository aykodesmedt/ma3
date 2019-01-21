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
        <a href="index.php"><img src="./assets/img/logo_klein_1440.png" alt="logoKlein"/></a>
        <ul class="menu_list">
          <li><a href="index.php?page=programma">Programma</a></li>
          <li><a href="">Flashback</a></li>
          <li><a href="">Praktisch</a></li>
          <li><a href="">Organisatoren</a></li>
        </ul>
    </header>
    <main>
      <?php echo $content;?>
    </main>
    <?php echo $js; ?>
  </body>
</html>
