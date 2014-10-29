<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools as Tools;

class Adduser extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        global $connexion;
        $cx = $connexion->get_cx();
        
        
        if (!empty($_POST['nickname']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
            $nickname = $_POST['nickname'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConfirm'];
            $role = $_POST['role'];
            var_dump($_POST);
            $modelUser = new \Application\Models\User($cx);
            $nicknameResult = $modelUser->fetchAll("nickname= '$nickname' ");
            $mailResult = $modelUser->fetchAll("mail= '$mail' ");


            if (!empty($nicknameResult)) {
                $alert = Tools\Alert::render("Ce nom utilisateur existe déjà !", "danger");
            } elseif (!empty($mailResult)) {
                $alert = Tools\Alert::render("Cette adresse mail existe déjà !", "danger");
            } elseif (empty($password)) {
                var_dump($password);
                $alert = Tools\Alert::render("le mote passe est obligatoire !", "danger");
            } elseif (empty($passwordConf)) {
                $alert = Tools\Alert::render("La confirmation du mot de passe est obligatoire !", "danger");
            } elseif ($passwordConf != $password) {
                $alert = Tools\Alert::render("Les deux mot de passes ne concorde pas", "danger");
            } else {
                $modelUser->insert(array(
                    "nickname" => $nickname,
                    "mail" => $mail,
                    "password" => $password,
                    "id_role" => $role,
                ));
                $alert = Tools\Alert::render("L'utilisateur $nickname a bien été ajouter! ", "success");
            }
        }
        $modelRole = new \Administration\Models\Role($cx);
        $allRole = $modelRole->fetchAll();
        var_dump($allRole);
        $this->add_data_view(
                array(
                    "viewTitle" => "Admin - Add User",
                    "viewSiteName" => "AFDAL",
                    "role" => $allRole,
                    "alert" => (!empty($alert)) ? $alert : '')
        );
    }

}
