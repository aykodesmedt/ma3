<?php
  // var_dump($act);
  // var_dump($_GET['dag']);
  // var_dump($act[0]['id']);
?>
<a href="index.php?page=programma&action=filter&dag=<?php echo $act[0]['dag_id']; ?>&act=<?php echo $act[0]['soort_act']; ?>">Terug naar overzicht</a>
<section>
  <div class="detail--div-grid">
    <div class="detail--div-foto">
      <img src="./assets/img/acts/jpg/<?php echo $act[0]['img']; ?>.jpg" alt="act" />
    </div>
    <div class="detail--div-titels">
      <div>
        <h2 class="detail__name_act"><?php echo $act[0]['name_act']; ?></h2>
        <h3 class="detail__name_group"><?php echo $act[0]['name_group']; ?></h3>
        <div class="page--div-tag">
          <span class="page--tag"><?php echo $act[0]['soort_act']; ?></span>
          <span class="page--tag"><?php echo $act[0]['soort_act']; ?></span>
        </div>
      </div>
    </div>
    <div class="detail__div__actinfo">

        <div class="detail--container-icons">
          <ul>
          <?php
            foreach($act as $actje):
          ?>
            <li class="detail--listitem-icon detail--dag">
              <p><?php echo $actje['dag']; ?></p>
            </li>
            <div class="detail--container-listitem-icon detail--daginfo">
              <li class="detail--listitem-icon">
                <img src="./assets/img/icons/icon_time.png" alt="icon" />
                <p><?php echo $actje['uur']; ?></p>
              </li>
              <li class="detail--listitem-icon">
                <img src="./assets/img/icons/icon_location.png" alt="icon" />
                <p><?php echo $actje['locatie']; ?></p>
              </li>
            </div>

          <?php
            endforeach;
          ?>
          <hr/>
          <?php
            if(!empty($act[0]['website'])):
          ?>
            <li class="detail--listitem-icon">
              <img src="./assets/img/icons/icon_website.png" alt="icon" />
              <a href="https://<?php echo $act[0]['website']; ?>">
                <p><?php echo $act[0]['website']; ?></p>
              </a>
            </li>
          <?php
            endif;
          ?>
            <li class="detail--listitem-icon">
              <img src="./assets/img/icons/icon_world.png" alt="icon" />
              <p><?php echo $act[0]['land']; ?></p>
            </li>
          </ul>
        </div>


    </div>
    <div class="detail--div-beschrijving">
      <div class="detail--div-beschrijving-foto">
        <p></p>
      </div>
      <div>
        <h4 class="detail--title-beschrijving-act">Over <?php echo $act[0]['name_group']; ?></h4>
        <p class="detail--beschrijving-act">
        <?php echo $act[0]['beschrijving']; ?>
        </p>
      </div>
    </div>
  </div>
  <div class="container--scrollfoto">
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
  </div>

  <?php
    if($act[0]['video'] !== ''){
  ?>
  <div class="container--video">
    <?php echo $act[0]['video']; ?>
  </div>
  <?php
    }
  ?>
</section>
<section class="title--ookvandaag">
  <h2 class="page--title-underlined">Ook vandaag</h2>
  <div class="container--scrollfoto">
    <?php
      // var_dump($ook_vandaag);
      foreach($ook_vandaag as $ookvandaag){
    ?>
      <a class="resultaat" href="index.php?page=detail&amp;id=<?php echo $ookvandaag['id']; ?>&amp;dag=<?php echo $ookvandaag['dag_id']; ?>">
          <div class="resultaat_foto">
          <img src="./assets/img/acts/jpg/<?php echo $ookvandaag['img']; ?>.jpg" alt="<?php echo $ookvandaag['name_act']; ?>" width="300" height="300">
            <span class="page--tag">Acrobatie</span>
          </div>
          <div class="resultaat_info">
            <h3 class="title--resultaat-name-act"><?php echo $ookvandaag['name_act'];?></h3>
            <p class="title--resultaat-name-group"><?php echo $ookvandaag['name_group'];?></p>
            <p class="p--resultaat-uur"><?php echo $ookvandaag['uur'];?></p>
          </div>
      </a>
    <?php
    }
    ?>
  </div>
</section>
