<?php
  // var_dump($act[0]);
  // var_dump($_GET['dag']);
  // var_dump($act[0]['id']);
?>
<section>
  <a href="index.php?page=programma">Terug naar overzicht</a> <img src="" alt="" />
  <h2><?php echo $act[0]['name_act']; ?></h2>
  <h3><?php echo $act[0]['name_group']; ?></h3>
  <span class="tag"><?php echo $act[0]['soort_act']; ?></span>
  <span class="tag"><?php echo $act[0]['soort_act']; ?></span>
  <ul>
    <li>
      <img src="" alt="icon" />
      <p><?php echo $act[0]['dag']; ?></p>
    </li>
    <li>
      <img src="" alt="icon" />
      <p><?php echo $act[0]['uur']; ?></p>
    </li>
    <li>
      <img src="" alt="icon" />
      <p><?php echo $act[0]['locatie']; ?></p>
    </li>
    <li>
      <img src="" alt="icon" />
      <p><?php echo $act[0]['website']; ?></p>
    </li>
    <li>
      <img src="" alt="icon" />
      <p><?php echo $act[0]['land']; ?></p>
    </li>
  </ul>
  <div>
    <img src="" alt="" />
    <h4>Over <?php echo $act[0]['name_group']; ?></h4>
    <p>
    <?php echo $act[0]['beschrijving']; ?>
    </p>
  </div>
  <div>
    <img src="" alt="" /> <img src="" alt="" /> <img src="" alt="" />
    <img src="" alt="" /> <img src="" alt="" /> <img src="" alt="" />
  </div>
  <?php echo $act[0]['video']; ?>
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
