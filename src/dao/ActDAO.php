<?php

require_once( __DIR__ . '/DAO.php');

class ActDAO extends DAO {

  public function search($dag = ''){
    // $sql = "SELECT * FROM `players` WHERE 1";
    $sql = "SELECT acts .*, isb_uren.id, isb_uren.locatie_id, isb_uren.uur, isb_dagen.dag
    FROM acts
    INNER JOIN isb_uren
    ON acts.id = isb_uren.act_id
    INNER JOIN isb_dagen
    ON isb_uren.dag_id = isb_dagen.id
    WHERE 1";

    if (!empty($dag)) {
      $sql .= " AND isb_uren.dag_id = :dag";
    }
    // if (!empty($act)) {
    //   $sql .= " AND acts.soort = ':act'";
    // }

    // $sql .= " ORDER BY `titel` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);

    // $stmt->bindValue(':dag','%'.$dag.'%');
    if (!empty($dag)) {
      $stmt->bindValue(':dag',$dag);
    }
    // if (!empty($act)) {
    //   $stmt->bindValue(':act', $act);
    // }

    // $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

//


  }
}
