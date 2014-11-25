<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;

class Index extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        $user = $modelUser->findById($_SESSION['User']['id']);
        $this->add_data_view(array("viewTitle" => "Admin", "viewSiteName" => "SITRUC", "user" => $user[0]));
    }

}
