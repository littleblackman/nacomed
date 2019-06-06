<?php

//namespace App\Program;

class ProgramManager {

    private $_db;

    public function __construct($db) {
        $this->setDb($db);
    }

    public function getProg_may() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_may ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(PDO::FETCH_ASSOC);
        /*while ($data = $q->fetchAll(PDO::FETCH_ASSOC)) {
            $row = new Program($data);
        }*/

        return $row;
    }

    public function getProg_jun() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_jun ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(PDO::FETCH_ASSOC);
        /*while ($data = $q->fetchAll(PDO::FETCH_ASSOC)) {
            $row = new Program($data);
        }*/

        return $row;
    }

    public function getProg_jul() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_jul ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(PDO::FETCH_ASSOC);
        /*while ($data = $q->fetchAll(PDO::FETCH_ASSOC)) {
            $row = new Program($data);
        }*/

        return $row;
    }

    public function getProg_aug() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_aug ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(PDO::FETCH_ASSOC);
        /*while ($data = $q->fetchAll(PDO::FETCH_ASSOC)) {
            $row = new Program($data);
        }*/

        return $row;
    }

    public function getProg_sep() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_sep ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(PDO::FETCH_ASSOC);
        /*while ($data = $q->fetchAll(PDO::FETCH_ASSOC)) {
            $row = new Program($data);
        }*/

        return $row;
    }

    public function getProg_oct() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_oct ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(PDO::FETCH_ASSOC);
        /*while ($data = $q->fetchAll(PDO::FETCH_ASSOC)) {
            $row = new Program($data);
        }*/

        return $row;
    }

    public function setDb(PDO $db) {
        $this->_db = $db;
    }
}