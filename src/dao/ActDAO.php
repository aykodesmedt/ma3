<?php

require_once( __DIR__ . '/DAO.php');

class ActDAO extends DAO {

  public function search($dag = '', $act = ''){
    $sql = "SELECT acts .*, isb_locatie.locatie, isb_uren.locatie_id, isb_uren.uur, isb_dagen.dag, isb_dagen.id as dag_id
    FROM acts
    INNER JOIN isb_uren
    ON acts.id = isb_uren.act_id
    INNER JOIN isb_dagen
    ON isb_uren.dag_id = isb_dagen.id
    INNER JOIN isb_locatie
    ON isb_uren.locatie_id = isb_locatie.id
    WHERE 1";

    if (!empty($dag)) {
      $sql .= " AND isb_uren.dag_id = :dag";
    }
    if (!empty($act)) {
      $sql .= " AND acts.soort_act = :act";
    }

    // $sql .= " ORDER BY `titel` DESC LIMIT :max";

    $stmt = $this->pdo->prepare($sql);

    if (!empty($dag)) {
      $stmt->bindValue(':dag',$dag);
    }
    if (!empty($act)) {
      $stmt->bindValue(':act', $act);
    }

    // $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT acts .*, isb_uren.uur, isb_dagen.id as dag_id , isb_dagen.dag, isb_locatie.locatie
    FROM acts
    INNER JOIN isb_uren
    ON acts.id = isb_uren.act_id
    INNER JOIN isb_dagen
    ON isb_uren.dag_id = isb_dagen.id
    INNER JOIN isb_locatie
    ON isb_uren.locatie_id = isb_locatie.id
    WHERE isb_uren.act_id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectByDag($dagId, $id, $max = 6){
    $sql = "SELECT acts .*, isb_uren.uur, isb_dagen.dag, isb_dagen.id as dag_id
    FROM acts
    INNER JOIN isb_uren
    ON acts.id = isb_uren.act_id
    INNER JOIN isb_dagen
    ON isb_uren.dag_id = isb_dagen.id
    WHERE isb_uren.dag_id = :dag_id AND isb_uren.act_id != :id
    LIMIT :max";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':dag_id', $dagId);
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':max', $max);
    $stmt->execute();
    return $stmt->fetchALL(PDO::FETCH_ASSOC);
  }

  public function selectImagesById($actId){
    $sql = "SELECT act_images.imagepath
    FROM act_images
    INNER JOIN acts
    ON act_images.act_id = acts.id
    WHERE act_images.act_id = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $actId);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

}
