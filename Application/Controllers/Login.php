<?php

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;
use Library\Tools as Tools;

class Login extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        global $connexion;

        $cx = $connexion->get_cx();

        if (!empty($_POST['login']) && !empty($_POST['password'])) {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $modelUser = new \Application\Models\User($cx);

            $result = $modelUser->fetchAll("nickname='$login' and password='$password' ");
            if (!empty($result)) {
                $_SESSION['User']['id'] = $result[0]->id;
                $_SESSION['User']['name'] = $result[0]->nickname;
                header("location:/admin/");
            } else {
                $alert = Tools\Alert::render("Votre mot de passe ou login est incorrecte!", "warning");
            }
        }

        $this->add_data_view(array("viewTitle" => "Login","alert" => (!empty($alert)) ? $alert : ''));
        $this->set_layout('login');
    }

}
