<?php
  // var_dump($act[0]);
  var_dump($_GET['dag']);
?>
<section>
        <a href="">Terug naar overzicht</a> <img src="" alt="" />
        <h2><?php echo $act[0]['name_act']; ?></h2>
        <h3><?php echo $act[0]['name_group']; ?></h3>
        <p><?php echo $act[0]['tag']; ?></p>
        <p><?php echo $act[0]['tag']; ?></p>
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
          <h4>Over <?php echo $act[0]['titel']; ?></h4>
          <p>
          <?php echo $act[0]['beschrijving']; ?>
          </p>
        </div>
        <div>
          <img src="" alt="" /> <img src="" alt="" /> <img src="" alt="" />
          <img src="" alt="" /> <img src="" alt="" /> <img src="" alt="" />
        </div>
        <a href=""><img src="" alt="VIDEO"/></a>
      </section>
      <section>
        <h2>Ook vandaag</h2>
        <?php
          // var_dump($ook_vandaag);
          foreach($ook_vandaag as $ookvandaag){
        ?>
          <!-- <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>&amp;dag=<?php echo $act['dag_id']; ?>"> -->
            <article>
              <img src="" alt="" />
              <p>TAG</p>
              <h3><?php echo $ookvandaag['name_act'];?></h3>
              <p>by <?php echo $ookvandaag['name_group'];?></p>
              <p><?php echo $ookvandaag['uur'];?></p>
              <!-- <a href="index.php?page=detail&amp;id=<?php echo $act['id']; ?>&amp;dag=<?php echo $act['dag_id']; ?>">MEER WETEN</a> -->
            </article>
          <!-- </a> -->
          <?php
          }
          ?>
      </section>
