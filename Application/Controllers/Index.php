<?php

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;

class Index extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }
    // @TODO put dynamical stuff
    public function indexAction()
    {
        $this->add_data_view(array("viewTitle" => "Home", "viewSiteName" => "SITRUC", "front" => true));
    }

}
