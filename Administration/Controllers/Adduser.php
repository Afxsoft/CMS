<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;

class Adduser extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
      if(!empty($_POST['nickname'])&&!empty($_POST['mail'])&&!empty($_POST['password'])){
      var_dump($_POST);
        global $connexion;
        $cx = $connexion->get_cx();
        $nickname = $_POST['nickname'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
        $modelUser  = new \Application\Models\User($cx);
        $nicknameResult  = $modelUser->fetchAll("nickname= '$nickname' Or mail= '$mail' ");
        $mailResult  = $modelUser->fetchAll("nickname= '$nickname' Or mail= '$mail' ");
       
        var_dump($result);
        
//        $modelUser->insert(array(
//          "nickname" => $_POST['nickname'],
//          "mail" => $_POST['mail'],
//          "password" => $_POST['password'],
//        ));
//        
      }
      
        
        $this->add_data_view(array("viewTitle" => "Admin - Add User", "viewSiteName" => "AFDAL"));

    }

}
