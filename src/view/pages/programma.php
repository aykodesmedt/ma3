<form class="form">
    <div class="switch-field switch-dagen">
      <!-- <div class="switch-title">Three fields? Sure.</div> -->
      <input type="radio" id="switch_2_left" name="switch_2" value="yes" checked/>
      <label for="switch_2_left">Vrijdag 24 augustus</label>
      <input type="radio" id="switch_2_center" name="switch_2" value="maybe" />
      <label for="switch_2_center">Zaterdag 25 augustus</label>
			<input type="radio" id="switch_2_right" name="switch_2" value="no" />
      <label for="switch_2_right">Zondag augustus</label>
    </div>
    <div class="switch-field switch-soorten">
      <div class="switch-title">Soort:</div>
      <input type="radio" id="switch_3_left" name="switch_3" value="yes" checked/>
      <label for="switch_3_left">Alle acts</label>
      <div>
        <input type="radio" id="switch_3_center" name="switch_3" value="maybe" />
        <label for="switch_3_center">Voorstellingen</label>
        <input type="radio" id="switch_3_right" name="switch_3" value="no" />
        <label for="switch_3_right">Straatacts</label>
      </div>
    </div>
</form>
<section class="slecht_weer">
  <img src="" alt="" />
  <p>
    Bij slecht weer zal er een alternatief programma opgesteld worden dat
    door zal gaan in de gemeentelijke sporthal.
  </p>
</section>
<section class="resultaten_section">
  <h2 class="title_underline">Resultaten</h2>
  <ul>
    <?php
      // foreach($acts as $act){
        ?>
          <li>
            <article class="resultaat">
              <div class="resultaat_foto">
                <img src="" alt="" />
                <span class="tag">Acrobatie</span>
              </div>
              <div class="resultaat_info">
                <h3 class="resultaat_info_act">The Sky Is The Limit</h3>
                <p class="resultaat_info_group">by The Flying Dutchmen</p>
                <p class="resultaat_info_hour">13.45 - 15. 45</p>
                <p class="resultaat_info_hour">13.45 - 15. 45</p>
                <a href="" class="meerWeten">MEER WETEN</a>
              </div>
            </article>
          </li>
        <?php
      // }
    ?>
  </ul>
  <p class="meer_resultaten">meer resultaten laden</p>
</section>
