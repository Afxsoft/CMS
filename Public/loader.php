<?php


if(PHP_VERSION < 5.3) {
    echo "Votre version de PHP est obsolète";
    exit();
}

function autoload($className){
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require str_replace('Public/index.php', $fileName, $_SERVER['SCRIPT_FILENAME']);
}

spl_autoload_register("autoload");


$Settings = new Application\Configs\Settings();
$Settings->get_variables();

$connexion = new Library\Core\Connexion();
$connexion->connect_db();


if ($_GET['end'] == 'admin') {
    $AdminRouter = new Administration\Router\AdminRouter();
    $AdminRouter->dispatch_page($url);
} else {

    $AppRouter = new Application\Router\AppRouter();
    $AppRouter->dispatch_page($url);
}