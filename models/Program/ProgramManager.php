<?php

namespace App\Program;

class ProgramManager {

    private $_db;

    public function __construct($db) {
        $this->setDb($db);
    }

    function setDb() {
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

    public function getProg_jan() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_jan ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_feb() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_feb ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_mar() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_mar ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_apr() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_apr ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_may() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_may ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_jun() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_jun ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_jul() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_jul ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_aug() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_aug ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_sep() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_sep ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_oct() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_oct ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_nov() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_nov ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function getProg_dec() {
        $row = [];

        $q = $this->_db->prepare('SELECT * FROM prog_dec ORDER BY id ASC');
        $q->execute(array());

        $row = $q->fetchAll(\PDO::FETCH_ASSOC);

        return $row;
    }

    public function addProgJan($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_jan SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgFeb($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_feb SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgMar($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_mar SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgApr($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_apr SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgMay($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_may SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgJun($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_jun SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgJul($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_jul SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgAug($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_aug SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgSep($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_sep SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgOct($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_oct SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgNov($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_nov SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    public function addProgDec($mission, $details_mission, $location, $available_beds, $comments, $week) {
        $q = $this->_db->prepare('UPDATE prog_dec SET mission = ?, details_mission = ?, location = ?, available_beds = ?, comments = ? WHERE id = ?');
        $q->execute(array($mission, $details_mission, $location, $available_beds, $comments, $week));
    }

    /*public function setDb(\PDO $db) {
        $this->_db = $db;
    }*/
}