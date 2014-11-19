<?php

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;

class Content extends MainController {

    public function __construct() {
        parent::__construct();
    }

    public function indexAction() {
       header('Location: /404');
    } 
    public function pageAction() {
        global $connexion;
        $cx = $connexion->get_cx();
        $modelArticle = new \Administration\Models\Article($cx);
        $content = $modelArticle->getArticleByAlias($_GET['params']);

        if (!empty($content)) {

            $this->add_data_view(array(
                "viewTitle" => $content[0]->title,
                "viewSiteName" => "Sitruc",
                "pageContent" => $content[0]
            ));
        }else{
            header('Location: /404');
        }
    }

}
