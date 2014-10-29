<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;

class Deleteuser extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        $this->add_data_view(array("viewTitle" => "Admin", "viewSiteName" => "AFDAL","user" => $user[0]));
        
    }

}
