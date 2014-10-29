<?php 
namespace Administration\Router;

use Library\Core\Router as MainRouter;

class AdminRouter extends MainRouter{
  
  protected $source_root = ADMIN_ROOT;
  protected $source_link = "Administration\Controllers\\";

  function __construct() {
    parent::__construct();
  }
}