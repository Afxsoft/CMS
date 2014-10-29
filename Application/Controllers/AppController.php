<?php

namespace Application\Controllers;

use Library\Core\Controller as MainController;

class AppController extends MainController {

    protected $source_root = APP_ROOT;
    protected $source_link = "Application\Controllers\\";

    function __construct() {
        parent::__construct();
    }

}
