<?php

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;

class User extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        $this->add_data_view(array("viewTitle" => "User"));
    }

}
