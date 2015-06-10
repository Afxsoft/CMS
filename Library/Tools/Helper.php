<?php

namespace Library\Tools;

class Helper {
    /**
     * This function check if the param you give is numeric
     */
    static function checkUrlParamsIsNumeric(){
        if ($_GET['params'] === NULL || $_GET['params'] == '' || !is_numeric($_GET['params'])) {
            header('Location: /admin/404');
            die;
        }
    }

}
