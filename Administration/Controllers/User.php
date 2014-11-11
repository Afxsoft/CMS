<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools as Tools;

class User extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        $result = $modelUser->fetchAll();
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL", "user" => $result));
    }

    public function deleteAction() {
        if ($_GET['params'] === NULL || $_GET['params'] == '' || !is_numeric($_GET['params'])) {
            header('Location: /admin/404');
        }
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        if (!empty($_POST['submit'])) {

            if ($modelUser->findById($_GET['params'])) {
                $modelUser->delete($_GET['params']);
                $alert = Tools\Alert::render("L'utilisateur a bien été supprimer ! ", "success");
                $action = TRUE;
            } else {
                $alert = Tools\Alert::render("L'utilisateur n'existe pas  ! ", "danger");
            }
        }

        $this->add_data_view(
                array(
                    "viewTitle" => "Admin",
                    "viewSiteName" => "AFDAL",
                    "action" => (!empty($action)) ? TRUE : FALSE,
                    "alert" => (!empty($alert)) ? $alert : '')
        );
    }

    public function modifyAction() {
        //Vérification du GET
        if ($_GET['params'] === NULL || $_GET['params'] == '' || !is_numeric($_GET['params'])) {
            header('Location: /admin/404');
        }
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        $form = $modelUser->findById($_GET['params']);
        $form = $form[0];
        $modelRole = new \Administration\Models\Role($cx);
        $role = $modelRole->fetchAll();

        if (!empty($_POST['nickname']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {
            $nickname = $_POST['nickname'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConfirm'];
            $role = $_POST['role'];
            $nicknameResult = $modelUser->fetchAll("nickname= '$nickname' ");
            $mailResult = $modelUser->fetchAll("mail= '$mail' ");


            if (!empty($nicknameResult) && $nickname != $form->nickname) {
                $alert = Tools\Alert::render("Ce nom utilisateur existe déjà !", "danger");
            } elseif (!empty($mailResult) && $mail != $form->mail) {
                $alert = Tools\Alert::render("Cette adresse mail existe déjà !", "danger");
            } elseif (empty($password)) {
                $alert = Tools\Alert::render("le mote passe est obligatoire !", "danger");
            } elseif (empty($passwordConf)) {
                $alert = Tools\Alert::render("La confirmation du mot de passe est obligatoire !", "danger");
            } elseif ($passwordConf != $password) {
                $alert = Tools\Alert::render("Les deux mot de passes ne concorde pas", "danger");
            } else {
                if ($password != $form->password) {
                    $password = md5($password);
                }
                $modelUser->update(array(
                    "nickname" => $nickname,
                    "mail" => $mail,
                    "password" => $password,
                    "id_role" => $role,
                        ), 'id = ' . $form->id);
                $alert = Tools\Alert::render("L'utilisateur $nickname a bien été modifier ! ", "success");
            }
        }

        $this->add_data_view(
                array(
                    "viewTitle" => "Admin - Add User",
                    "viewSiteName" => "AFDAL",
                    "role" => $role,
                    "formValue" => $form,
                    "alert" => (!empty($alert)) ? $alert : '')
        );
    }

    public function addAction() {

        global $connexion;
        $cx = $connexion->get_cx();
        $modelRole = new \Administration\Models\Role($cx);
        $role = $modelRole->fetchAll();
        $modelUser = new \Application\Models\User($cx);
//        $user = $modelUser->findById();

        if (!empty($_POST['nickname']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {

            $nickname = $_POST['nickname'];
            $mail = $_POST['mail'];
            $password = $_POST['password'];
            $passwordConf = $_POST['passwordConfirm'];
            $role = $_POST['role'];
            $nicknameResult = $modelUser->fetchAll("nickname= '$nickname' ");
            $mailResult = $modelUser->fetchAll("mail= '$mail' ");


            if (!empty($nicknameResult)) {
                $alert = Tools\Alert::render("Ce nom utilisateur existe déjà !", "danger");
            } elseif (!empty($mailResult)) {
                $alert = Tools\Alert::render("Cette adresse mail existe déjà !", "danger");
            } elseif (empty($password)) {
                $alert = Tools\Alert::render("le mote passe est obligatoire !", "danger");
            } elseif (empty($passwordConf)) {
                $alert = Tools\Alert::render("La confirmation du mot de passe est obligatoire !", "danger");
            } elseif ($passwordConf != $password) {
                $alert = Tools\Alert::render("Les deux mot de passes ne concorde pas", "danger");
            } else {
                $modelUser->insert(array(
                    "nickname" => $nickname,
                    "mail" => $mail,
                    "password" => md5($password),
                    "id_role" => $role,
                ));
                $alert = Tools\Alert::render("L'utilisateur $nickname a bien été ajouter! ", "success");
            }
        }

        $this->add_data_view(
                array(
                    "viewTitle" => "Admin - Add User",
                    "viewSiteName" => "AFDAL",
                    "role" => $role,
                    "alert" => (!empty($alert)) ? $alert : '')
        );
    }

}
