<?php

/**
 *  Framework
 * 
 *  PHP micro framework.
 * 
 *  For more informations: {@linkhttps://github.com/afxsoft/framework}
 *  
 *  @author Afxsoft
 *  @copyright Copyright (c) 2014 Afxsoft
 *  @package Framework
 */

session_start();


$url = explode("/", @$_GET["page"]);

require_once 'loader.php';
