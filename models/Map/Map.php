<?php

class Map {
    
    // Décalaration des attributs
    private $_event_id;
    private $_event_name;
    private $_event_lat;
    private $_event_lng;
    private $_onboarding_date;

    public function __construct(array $data) {
        $this->hydrate($data);
    }

    // Hydratation
    public function hydrate(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set'.ucfirst($key);

            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Déclaration des getters (accesseurs)
    public function event_id() {
        return $this->_event_id;
    }

    public function event_name() {
        return $this->_event_name;
    }

    public function event_lat() {
        return $this->_event_lat;
    }

    public function event_lng() {
        return $this->_event_lng;
    }

    public function onboarding_date() {
        return $this->_onboarding_date;
    }

    // Déclaration des setters (mutateurs)
    public function setEvent_id($event_id) {
        $event_id = (int) $event_id;
        if ($event_id > 0) {
            $this->_event_id = $event_id;
        }
    }

    public function setEvent_name($event_name) {
        if (is_string($event_name)) {
            $this->_event_name = $event_name;
        }
    }
    public function setEvent_lat($event_lat) {
        $lat = floatval($event_lat);
            $this->_event_lat = $event_lat;
    }

    public function setEvent_lng($event_lng) {
        $lng = floatval($event_lng);
            $this->_event_lng = $event_lng;
    }

    public function setOnboarding_date($onboarding_date) {
        if (is_string($onboarding_date)) {
            $this->_onboarding_date = $onboarding_date;
        }
    }
}