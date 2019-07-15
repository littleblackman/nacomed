<?php

namespace App\Map;

class MapManager {

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

    public function addEvent($name, $lat, $lng, $date, $com) {
        $q = $this->_db->prepare('INSERT INTO map_events (event_name, event_lat, event_lng, onboarding_date, event_comments) VALUES (?, ?, ?, ?, ?)');
        $eventToAdd = $q->execute(array($name, $lat, $lng, $date, $com));
    }

    public function displayEvents() {
        $events = [];

        $q = $this->_db->query('SELECT * FROM map_events');
        
        while ($data = $q->fetch(\PDO::FETCH_ASSOC)) {
            $events[] = new Map($data);
        }
        return $events;
    }

    public function displayEditedEvent($id) {
        $q = $this->_db->prepare('SELECT * FROM map_events WHERE event_id = ?');
        $q->execute(array($id));

        $data = $q->fetch();
                
        return $data;
    }

    public function updateEvent($name, $lat, $lng, $date, $com, $id) {
        $q = $this->_db->prepare('UPDATE map_events SET event_name = ?, event_lat = ?, event_lng = ?, onboarding_date = ?, event_comments = ?  WHERE event_id = ?');
        $q->execute(array($name, $lat, $lng, $date, $com, $id));
    }

    public function deleteEvent($event_id) {
        $q = $this->_db->prepare('DELETE FROM map_events WHERE event_id = ?');
        $eventToDelete = $q->execute(array($event_id));
    }


    /*public function setDb(\PDO $db) {
        $this->_db = $db;
    }*/
}