<?php
  // var_dump($acts);
?>
<form class="filter--form" action="index.php?page=programma">
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
    <hr/>
    <div class="switch-field switch-soorten">
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
    <input type="submit" value="Filter" class="button--filter-submit">
</form>
<section class="section--slechtweer">
  <img src="" alt="" />
  <p>
    Bij slecht weer zal er een alternatief programma opgesteld worden dat
    door zal gaan in de gemeentelijke sporthal.
  </p>
</section>
<section>
  <h2 class="page--title-underlined">Resultaten (<?php echo COUNT($acts); ?>)</h2>
  <ul class="grid--resultaten">
    <?php
      foreach($acts as $act){
        ?>
          <li>
              <article class="article--resultaat">
                <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>&amp;dag=<?php echo $act['dag_id']; ?>">

                  <div class="container--resultaat-img">
                    <span class="page--tag page--tag-results"><?php echo $act['locatie']; ?></span>
                    <img src="./assets/img/acts/jpg/<?php echo $act['img']; ?>.jpg" alt="<?php echo $act['name_act']; ?>" width="300" height="300">

                  </div>
                </a>
                <div class="container--resultaat-info">
                  <h3 class="title--resultaat-name-act"><?php echo $act['name_act'];?></h3>
                  <p class="title--resultaat-name-group"><?php echo $act['name_group'];?></p>
                  <p class="p--resultaat-uur"><?php echo $act['uur'];?></p>
                  <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>&amp;dag=<?php echo $act['dag_id']; ?>" class="link--meerWeten">MEER WETEN</a>
                </div>
                <img src="./assets/img/resultaat_320.png" class="decoratie--streep" alt="">
              </article>
          </li>
        <?php
      }
    ?>
  </ul>
</section>
