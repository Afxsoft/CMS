<?php

namespace Library\Core;

use PDO;

/**
 * [Connexion Class]
 * Make db connection with PDO
 */
class Connexion
{

    private $cx;

    public function __construct()
    {
    }

    /**
     *
     * @param string $host
     * @param string $dbname
     * @param string $user
     * @param string $password
     * @param string $charset
     */
    public function connectDb(
        $host = DB_HOST,
        $dbname = DB_NAME,
        $user = DB_USER,
        $password = DB_PASSWORD,
        $charset = DB_CHARSET
    ) {

        try {
            $this->cx = new PDO("mysql:host=" . $host . ";dbname=" . $dbname, $user, $password);
            $this->cx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            $this->cx->exec("SET CHARACTER SET $charset");
        } catch (PDOException $e) {
            die($e);
        }
    }

    /**
     * getCx()
     * This method allows retrieve the current connection
     * @return Connexion Boject
     */
    public function getCx()
    {
        return $this->cx;
    }

}
