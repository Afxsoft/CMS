<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools as Tools;

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
        $nicknameResult  = $modelUser->fetchAll("nickname= '$nickname' ");
        $mailResult  = $modelUser->fetchAll("mail= '$mail' ");
      
        if(!empty($nicknameResult)){
          $msg = Tools\Alert::render("Ce nom utilisateur existe déjà");
           var_dump($msg);
//           var_dump("Message: Ce nom utilisateur existe déjà");
        }elseif(!empty($mailResult)){
           var_dump("Message: Cette adresse mail existe déjà");          
        }
//        $modelUser->insert(array(
//          "nickname" => $_POST['nickname'],
//          "mail" => $_POST['mail'],
//          "password" => $_POST['password'],
//        ));
//        
      }else{
        $msg  = "Vous devez renseigner tout les informations obligatoire : ";
        if(empty($_POST['nickname'])){
          $msg.="le nom de l'utilisateur ";
        }
        if(empty($_POST['mail'])){
          $msg.="l'adresse mail ";
          
        }
        if(empty($_POST['password'])){
          $msg.=" le mot de passe ";
          
        }
        var_dump("Message : ".$msg);
      }
      
        
        $this->add_data_view(array("viewTitle" => "Admin - Add User", "viewSiteName" => "AFDAL"));

    }

}
