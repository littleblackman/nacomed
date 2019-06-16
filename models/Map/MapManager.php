<?php

class MapManager {

    private $_db;

    public function __construct($db) {
        $this->setDb($db);
    }

    public function addEvent($name, $lat, $lng) {
        $q = $this->_db->prepare('INSERT INTO map_events (event_name, event_lat, event_lng) VALUES (?, ?, ?)');
        $eventToAdd = $q->execute(array($name, $lat, $lng));
    }

    public function displayEvents() {
        $events = [];

        $q = $this->_db->query('SELECT * FROM map_events');
        
        while ($data = $q->fetch(PDO::FETCH_ASSOC)) {
            $events[] = new Map($data);
        }
        return $events;
    }

    public function setDb(PDO $db) {
        $this->_db = $db;
    }
}