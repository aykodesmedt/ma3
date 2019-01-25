<?php
  // var_dump($acts);
?>
<form class="form" action="index.php?page=programma">
    <input type="hidden" name="page" value="programma" />
    <input type="hidden" name="action" value="filter" />

    <div class="switch-field switch-dagen">
      <input type="radio" id="switch_2_left" name="dag" value="1"
      <?php
        if($currentDag == 1){
          echo 'checked';
        }
      ?>
      />
      <label for="switch_2_left">Vrijdag 24 augustus</label>
      <input type="radio" id="switch_2_center" name="dag" value="2"
        <?php
          if($currentDag == 2){
            echo 'checked';
          }
        ?>
      />
      <label for="switch_2_center">Zaterdag 25 augustus</label>
      <input type="radio" id="switch_2_right" name="dag" value="3"
      <?php
        if($currentDag == 3){
          echo 'checked';
        }
      ?>
      />
      <label for="switch_2_right">Zondag 26 augustus</label>
    </div>
    <div class="switch-field switch-soorten">
      <div class="switch-title">Soort:</div>
      <input type="radio" id="switch_3_left" name="act" value=""
      checked
      />
      <label for="switch_3_left">Alle acts</label>
      <div>
        <input type="radio" id="switch_3_center" name="act" value="voorstelling"
        <?php
          if($currentSoortact == 'voorstelling'){
            echo 'checked';
          }
        ?>
        />
        <label for="switch_3_center">Voorstellingen</label>
        <input type="radio" id="switch_3_right" name="act" value="straatact"
        <?php
          if($currentSoortact == 'straatact'){
            echo 'checked';
          }
        ?>
        />
        <label for="switch_3_right">Straatacts</label>
      </div>
    </div>
    <input type="submit" value="filter">
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
  <ul class="resultaten_grid">
    <?php
      foreach($acts as $act){
        ?>
          <li>
            <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>&amp;dag=<?php echo $act['dag_id']; ?>&amp;exceptact=<?php echo $act['id'];?>">
              <article class="resultaat">
                <div class="resultaat_foto">
                <img class="img--full" src="./assets/img/acts/jpg/<?php echo $act['img']; ?>.jpg" alt="<?php echo $act['name_act']; ?>" width="300" height="300">
                  <span class="tag">Acrobatie</span>
                </div>
                <div class="resultaat_info">
                  <h3 class="resultaat_info_act"><?php echo $act['name_act'];?></h3>
                  <p class="resultaat_info_group"><?php echo $act['name_group'];?></p>
                  <p class="resultaat_info_hour"><?php echo $act['uur'];?></p>
                  <a href="" class="meerWeten">MEER WETEN</a>
                </div>
              </article>
            </a>

          </li>
        <?php
      }
    ?>
  </ul>
  <p class="meer_resultaten">meer resultaten laden</p>
</section>
