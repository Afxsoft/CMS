<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;

class Users extends MainController {

  public function __construct() {
    parent::__construct();
  }

  public function indexAction() {
    global $connexion;
    $cx = $connexion->get_cx();
    $modelUser = new \Application\Models\User($cx);
    $result = $modelUser->fetchAll();
//    var_dump($result);
    $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL","user" => $result));
  }

}
