<?php

namespace Application\Controllers;

use Application\Controllers\AppController as MainController;
use \Administration\Models\Article;

class Content extends MainController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAction()
    {
        header('Location: /404');
    }

    public function pageAction()
    {
        global $connexion;
        $cx = $connexion->getCx();
        $modelArticle = new Article($cx);
        $content = $modelArticle->getArticleByAlias($_GET['params']);
        if (!empty($content)) {
            $calendar = false;
            if ($_GET['params'] == "calendrier") {
                $calendar = true;

            }
            // @TODO Make this file dynamical
            $this->add_data_view(array(
                "viewTitle" => $content[0]->title,
                "viewSiteName" => "Sitruc",
                "calendar" => $calendar,
                "pageContent" => $content[0]
            ));
        } else {
            header('Location: /404');
        }
    }

}
