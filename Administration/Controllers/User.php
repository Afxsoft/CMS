<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools as Tools;

class User extends MainController {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Index controller of user model
     * @global \Administration\Controllers\type $connexion
     */
    public function indexAction() {
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        $result = $modelUser->fetchAll();
        $this->add_data_view(array("viewTitle" => "Admin - Users", "user" => $result));
    }

    /**
     * Delete controller of user model
     * @global \Administration\Controllers\type $connexion
     */
    public function deleteAction() {

        Tools\Helper::checkUrlParamsIsNumeric();
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        if (!empty($_POST['submit'])) {

            if ($modelUser->findById($_GET['params'])) {
                $modelUser->delete($_GET['params']);
                $alert = Tools\Alert::render("L'utilisateur a bien été supprimé! ", "success");
                $action = TRUE;
            } else {
                $alert = Tools\Alert::render("L'utilisateur n'existe pas  ! ", "danger");
            }
        }

        $this->add_data_view(
                array( "viewTitle" => "Admin",
                       "action" => (!empty($action)) ? TRUE : FALSE,
                       "alert" => (!empty($alert)) ? $alert : '')
        );
    }

    /**
     * Modify controller of user model
     * @global type $connexion
     */
    public function modifyAction() {
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        $form = $modelUser->findById($_GET['params']);
        $form = $form[0];
        $modelRole = new \Administration\Models\Role($cx);
        $role = $modelRole->fetchAll();

        if (!empty($_POST['nickname']) && !empty($_POST['mail'])) {
          
            $_POST['password'] = (!empty($_POST['password']))? md5($_POST['password']):NULL;
            $_POST['passwordConfirm'] = (!empty($_POST['passwordConfirm']))? md5($_POST['passwordConfirm']):NULL;
            $nicknameResult = $modelUser->getUserByName($_POST['nickname']);
            $mailResult = $modelUser->getUserByMail($_POST['mail']);


            if (!empty($nicknameResult) && $_POST['nickname'] != $form->nickname) {
                $alert = Tools\Alert::render("Ce nom utilisateur existe déjà !", "danger");
            } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $alert = Tools\Alert::render("le format de l'adresse mail n'est pas bon !", "danger");            
            } elseif (!empty($mailResult) && $_POST['mail'] != $form->mail) {
                $alert = Tools\Alert::render("Cette adresse mail existe déjà !", "danger");            
            } elseif ($_POST['passwordConfirm'] != $_POST['password']) {              
                $alert = Tools\Alert::render("Les deux mot de passes ne concorde pas", "danger");
            } else {
                if (empty($_POST['password'])) {
                  $_POST['password']= $form->password; 
                }                
                $modelUser->updateUser($_POST, $form->id);
                $alert = Tools\Alert::render("L'utilisateur ".$_POST['nickname']." a bien été modifier ! ", "success");
                $action = TRUE;
            }
        }

        $this->add_data_view(
                array(
                    "viewTitle" => "Admin - Add User",
                    "role" => $role,
                    "formValue" => $form,
                    "action" => (!empty($action)) ? TRUE : FALSE,
                    "alert" => (!empty($alert)) ? $alert : '')
        );
    }

    /**
     * Add controller of user model
     * @global \Administration\Controllers\type $connexion
     */
    public function addAction() {

        global $connexion;
        $cx = $connexion->get_cx();
        $modelRole = new \Administration\Models\Role($cx);
        $role = $modelRole->fetchAll();
        $modelUser = new \Application\Models\User($cx);

        if (!empty($_POST['nickname']) && !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['passwordConfirm'])) {

            
            $nicknameResult = $modelUser->getUserByName($_POST['nickname']);
            $mailResult = $modelUser->getUserByMail($_POST['mail']);


            if (!empty($nicknameResult)) {
                $alert = Tools\Alert::render("Ce nom utilisateur existe déjà !", "danger");
            } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $alert = Tools\Alert::render("le format de l'adresse mail n'est pas bon !", "danger");
            } elseif (!empty($mailResult)) {
                $alert = Tools\Alert::render("Cette adresse mail existe déjà !", "danger");
            } elseif (empty($_POST['password'])) {
                $alert = Tools\Alert::render("le mote passe est obligatoire !", "danger");
            } elseif (empty($_POST['passwordConfirm'])) {
                $alert = Tools\Alert::render("La confirmation du mot de passe est obligatoire !", "danger");
            } elseif ($_POST['passwordConfirm'] != $_POST['password']) {
                $alert = Tools\Alert::render("Les deux mot de passes ne concorde pas", "danger");
            } else {
                $modelUser->insertUser($_POST);
                $alert = Tools\Alert::render("L'utilisateur ".$_POST['nickname']." a bien été ajouter! ", "success");
            }
        }

        $this->add_data_view(
                array(
                    "viewTitle" => "Admin - Add User",
                    "role" => $role,
                    "alert" => (!empty($alert)) ? $alert : '')
        );
    }

    public function viewAction(){
        Tools\Helper::checkUrlParamsIsNumeric();
        global $connexion;
        $cx = $connexion->get_cx();
        $modelUser = new \Application\Models\User($cx);
        $user = $modelUser->findById($_GET['params']);
        $user = $user[0];
        $this->add_data_view(array("viewTitle" => "Admin - Users", "user" => $user));
    }

}
