<form action="">
  <div>
    <label for="vrijdag">Vrijdag</label>
    <input type="radio" id="vrijdag" />
    <label for="zaterdag">Zaterdag</label>
    <input type="radio" id="zaterdag" />
    <label for="zondag">Zondag</label> <input type="radio" id="zondag" />
  </div>
  <div>
    <h3>Soort act:</h3>
    <label for="alleacts">Alle acts</label>
    <input type="radio" id="alleacts" />
    <label for="voorstellingen">Voorstellingen</label>
    <input type="radio" id="voorstellingen" />
    <label for="straatacts">Straatacts</label>
    <input type="radio" id="straatacts" />
  </div>
</form>
<article>
  <img src="" alt="" />
  <p>
    Bij slecht weer zal er een alternatief programma opgesteld worden dat
    door zal gaan in de gemeentelijke sporthal.
  </p>
</article>
<section>
  <h2>Resultaten</h2>
  <ul>
    <?php
      // foreach($acts as $act){
        ?>
          <article class="resultaten">
            <img src="" alt="" />
            <p>TAG</p>
            <h3>The Sky Is The Limit</h3>
            <p>by The Flying Dutchmen</p>
            <p>13.45 - 15. 45</p>
            <p>13.45 - 15. 45</p>
            <a href="">MEER WETEN</a>
          </article>
        <?php
      // }
    ?>
  </ul>
  <p>MEER RESULTATEN</p>
</section>
