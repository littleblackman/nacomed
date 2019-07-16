<?php

namespace App\Managers;

class Manager {

    protected function dbConnect() {
        try {
            include('./config.php');
            $db = new \PDO('mysql:host=' . $localhost . ';dbname=' . $dbName . '; charset=utf8' , '' . $loginLocal . '', ''. $pwdLocal . '');
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
            return $db;
        } catch(Exception $e) {
            $errorMessage = $e->getMessage();
            require('./public/views/frontend/errorView.php');
        }
    }
}