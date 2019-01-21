<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ActDAO.php';

class ActsController extends Controller {

  private $actDAO;

  function __construct() {
    $this->actDAO = new ActDAO();
  }

  public function detail() {

  }

}
