<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActDAO.php';

class ActsController extends Controller {

  private $actDAO;

  function __construct() {
    $this->actDAO = new ActDAO();
  }

  public function index() {
    $this->set('currentPage', 'home');

  }

  public function programma() {
    $this->set('currentPage', 'programma');

    if (!empty($_GET['action']) && $_GET['action'] == 'filter') {
      $acts = $this->actDAO->search($_GET['dag'], $_GET['act']);
      $this->set('dag',$_GET['dag']);
      $this->set('currentDag', $_GET['dag']);
      $this->set('act',$_GET['act']);
      $this->set('currentSoortact', $_GET['act']);
    }else{
      $acts = $this->actDAO->search('1');
      $this->set('dag','1');
      $this->set('currentDag','1');
      $this->set('act','');
      $this->set('currentSoortact', '');
    }

    $this->set('acts', $acts);
  }

  public function detail() {
    $this->set('currentPage', 'programma-detail');

    if(!empty($_GET['id'])){
      $act = $this->actDAO->selectById($_GET['id']);
      $this->set('act', $act);
    }

    if(empty($act)){
      $_SESSION['error'] = 'Deze act werd niet gevonden.';
      header('Location: index.php');
      exit();
    }

    //sql voor 4 acts die ook deze dag gebeuren

    if(!empty($_GET['dag']) && !empty($_GET['exceptact'])){
      $ookVandaag = $this->actDAO->selectByDag($_GET['dag'], $_GET['exceptact']);
      $this->set('ook_vandaag', $ookVandaag);
    }else{
      $this->set('ook_vandaag', 'NIET OKE');
    }

    if(empty($act)){
      $_SESSION['error'] = 'Deze act werd niet gevonden.';
      header('Location: index.php');
      exit();
    }

  }

}
