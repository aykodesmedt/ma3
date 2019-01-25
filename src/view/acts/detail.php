<?php
  // var_dump($act);
  // var_dump($_GET['dag']);
  // var_dump($act[0]['id']);
?>
<a href="index.php?page=programma">Terug naar overzicht</a>
<section>
  <div class="detail__div__grid">
    <div class="detail__div__foto">
    <img src="./assets/img/acts/jpg/<?php echo $act[0]['img']; ?>.jpg" alt="act" />
    </div>
    <div class="detail__div__titels">
      <div>
        <h2 class="detail__name_act"><?php echo $act[0]['name_act']; ?></h2>
        <h3 class="detail__name_group"><?php echo $act[0]['name_group']; ?></h3>
        <div>
          <span class="tag"><?php echo $act[0]['soort_act']; ?></span>
          <span class="tag"><?php echo $act[0]['soort_act']; ?></span>
        </div>
      </div>
    </div>
    <div class="detail__div__actinfo">
      <?php
        foreach($act as $actje):
      ?>
        <div class="detail_list_icon">
          <ul>
            <li class="detail_listitem_icon">
              <img src="./assets/img/icons/icon_date.png" alt="icon" />
              <p><?php echo $actje['dag']; ?></p>
            </li>
            <li class="detail_listitem_icon">
              <img src="./assets/img/icons/icon_time.png" alt="icon" />
              <p><?php echo $actje['uur']; ?></p>
            </li>
            <li class="detail_listitem_icon">
              <img src="./assets/img/icons/icon_location.png" alt="icon" />
              <p><?php echo $actje['locatie']; ?></p>
            </li>
            <li class="detail_listitem_icon">
              <img src="./assets/img/icons/icon_website.png" alt="icon" />
              <p><?php echo $actje['website']; ?></p>
            </li>
            <li class="detail_listitem_icon">
              <img src="./assets/img/icons/icon_world.png" alt="icon" />
              <p><?php echo $actje['land']; ?></p>
            </li>
          </ul>
        </div>
      <?php
        endforeach;
      ?>
    </div>
    <div class="detail__beschrijving__div">
      <img src="./assets/img/detail_beschrijving_1440.png" alt="" />
      <div>
        <h4 class="detail__titel_beschrijving_act">Over <?php echo $act[0]['name_group']; ?></h4>
        <p class="detail__beschrijving_act">
        <?php echo $act[0]['beschrijving']; ?>
        </p>
      </div>
    </div>
  </div>

  <div class="section__ookvandaag">
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
    <img src="./assets/img/acts/jpg/maschara.jpg" alt="" />
  </div>
  <div class="video__container">
    <?php echo $act[0]['video']; ?>
  </div>
</section>
<section class="ookvandaagtitel">
  <h2 class="title_underline">Ook vandaag</h2>
  <div class="section__ookvandaag">
    <?php
      // var_dump($ook_vandaag);
      foreach($ook_vandaag as $ookvandaag){
    ?>
      <a class="resultaat" href="index.php?page=detail&amp;id=<?php echo $ookvandaag['id']; ?>&amp;dag=<?php echo $ookvandaag['dag_id']; ?>">
          <div class="resultaat_foto">
          <img src="./assets/img/acts/jpg/<?php echo $ookvandaag['img']; ?>.jpg" alt="<?php echo $ookvandaag['name_act']; ?>" width="300" height="300">
            <span class="tag">Acrobatie</span>
          </div>
          <div class="resultaat_info">
            <h3 class="resultaat_info_act"><?php echo $ookvandaag['name_act'];?></h3>
            <p class="resultaat_info_group"><?php echo $ookvandaag['name_group'];?></p>
            <p class="resultaat_info_hour"><?php echo $ookvandaag['uur'];?></p>
          </div>
      </a>
    <?php
    }
    ?>
  </div>
</section>
