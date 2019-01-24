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
      $acts = $this->actDAO->search($_GET['dag']);
      $this->set('dag',$_GET['dag']);
      $this->set('currentDag', $_GET['dag']);
      // $this->set('act',$_GET['act']);
      $this->set('currentSoortact', $_GET['soort']);
    }else{
      $acts = $this->actDAO->search('1');
      $this->set('dag','1');
      $this->set('currentDag','1');
      // $this->set('act','alle');
    }

    $this->set('acts', $acts);
  }

  public function detail() {
    $this->set('currentPage', 'programma-detail');
  }

}
