<?php

namespace Library\Tools;

class Helper
{
    /**
     * This function check if the param you give is numeric
     */
    public static function checkUrlParamsIsNumeric()
    {
        if ($_GET['params'] === null || $_GET['params'] == '' || !is_numeric($_GET['params'])) {
            header('Location: /admin/404');
            die;
        }
    }

}
