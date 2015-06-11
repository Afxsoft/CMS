<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools as Tools;

class Content extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    /**
     * Display all element
     */
    public function articleAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function eventAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function newsAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function slideAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }
    public function presidentwordAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }
    /**
     * Add action
     */
    public function addArticleAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function addEventAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function addNewsAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function addSlideAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }
     public function addPresidentwordAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    /**
     * Modify action
     */
    public function modifyArticleAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function modifyEventAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function modifyNewsAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function modifySlideAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }
    public function modifyPresidentwordAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    /**
     * Delete action
     */
    public function deleteArticleAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function deleteEventAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function deleteNewsAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

    public function deleteSlideAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }
    public function deletePresidentwordAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users"));
    }

}
