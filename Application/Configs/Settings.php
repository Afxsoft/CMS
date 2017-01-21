<?php

namespace Application\Configs;

class Settings {

    public function __construct() {

        $admin_root = str_replace('Public/index.php', 'Administration/', $_SERVER["SCRIPT_FILENAME"]);
        $app_root = str_replace('Public/index.php', 'Application/', $_SERVER["SCRIPT_FILENAME"]);
        $lib_root = str_replace('Public/index.php', 'Library/', $_SERVER["SCRIPT_FILENAME"]);
        $web_root = str_replace('Public/index.php', '', $_SERVER["SCRIPT_FILENAME"]);

        /* General constante */

        define('ADMIN_ROOT', $admin_root);
        define('APP_ROOT', $app_root);
        define('LIB_ROOT', $lib_root);
        define('LINK_ROOT', '/');
        define('WEB_ROOT', $web_root);
        define('HOST_ROOT', 'http://'.$_SERVER['HTTP_HOST']);

        /* Database Conf */

        define('DB_HOST', '127.0.0.1');
        define('DB_NAME', 'cms');
        define('DB_USER', 'root');
        define('DB_PASSWORD', 'root');
        define('DB_CHARSET', 'utf8');
    }

    public function get_variables() {
        // Récupération de l'adresse, et on l'éclate sous forme de tableau
        $urlTmp = explode('/', $_GET['page']);

        // Si le controller et l'action ne sont pas défini, on les initialise sur "index"
        $_GET['controller'] = (!empty($urlTmp[0])) ? $urlTmp[0] : 'index';
        $_GET['action'] = (!empty($urlTmp[1])) ? $urlTmp[1] : 'index';

        // Si le controller est renseigné et si l'action l'est aussi, on les supprime du tableau pour le boucler que sur les valeurs
        (!empty($urlTmp[0])) ? array_splice($urlTmp, 0, 2) : '';

        // Si après avoir supprimé le controller et action de la chaine,il reste quelque chose, on boucle dessus pour créer les
        // variables $_GET['params'];
        if (count($urlTmp) > 0):
            $i = 0;
            foreach ($urlTmp as $get):
                $_GET['params' . (($i == 0) ? '' : $i)] = $get;
                $i++;
            endforeach;
        else:
            $_GET['params'] = null;
        endif;
    }

}
