<?php

namespace Administration\Controllers;

use Administration\Controllers\AdminController as MainController;
use Library\Tools as Tools;

class Content extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    /**
     * Add action
     */
    public function addArticleAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function addEventAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function addNewsAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function addSlideAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    /**
     * Modify action
     */
    public function modifyArticleAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function modifyEventAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function modifyNewsAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function modifySlideAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    /**
     * Delete action
     */
    public function deleteArticleAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function deleteEventAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function deleteNewsAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

    public function deleteSlideAction() {
        $this->add_data_view(array("viewTitle" => "Admin - Users", "viewSiteName" => "AFDAL"));
    }

}
