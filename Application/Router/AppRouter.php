<?php
namespace Application\Router;

use Library\Core\Router as MainRouter;

class AppRouter extends MainRouter
{

    protected $source_root = APP_ROOT;
    protected $source_link = "Application\Controllers\\";

    public function __construct()
    {
        parent::__construct();
    }
}