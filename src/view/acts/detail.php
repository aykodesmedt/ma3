<?php
  // var_dump($act[0]);
  // var_dump($_GET['dag']);
  var_dump($act[0]['id']);
?>
<section>
        <a href="index.php?page=programma">Terug naar overzicht</a> <img src="" alt="" />
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
          var_dump($ook_vandaag);
          foreach($ook_vandaag as $ookvandaag){
        ?>
            <article>
              <img src="" alt="" />
              <p>TAG</p>
              <h3><?php echo $ookvandaag['name_act'];?></h3>
              <p>by <?php echo $ookvandaag['name_group'];?></p>
              <p><?php echo $ookvandaag['uur'];?></p>
              <a href="index.php?page=detail&amp;id=<?php echo $ookvandaag['id']; ?>&amp;dag=<?php echo $ookvandaag['dag_id']; ?>&amp;exceptact=<?php echo $ookvandaag['id'];?>">MEER WETEN</a>
            </article>
          <?php
          }
          ?>
      </section>
