<?php

namespace Administration\Controllers;

use Library\Core\Controller as MainController;

class AdminController extends MainController {

    protected $source_root = ADMIN_ROOT;
    protected $source_link = "Administration\Controllers\\";

    public function __construct() {
        parent::__construct();
        $this->login_verif();
        
    }
    public function login_verif(){
      
      if(empty($_SESSION['User'])){
        header("location:/login");
      }
    }
    
   
}
