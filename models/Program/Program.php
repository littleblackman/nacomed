<?php

class Program {
    
    // Décalaration des attributs
    private $_id;
    private $_mission;
    private $_details_mission;
    private $_location;
    private $_available_beds;
    private $_comments;

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
    public function prog_id() {
        return $this->_id;
    }

    public function prog_mission() {
        return $this->_mission;
    }

    public function prog_details_mission() {
        return $this->_details_mission;
    }

    public function prog_location() {
        return $this->_location;
    }

    public function prog_available_beds() {
        return $this->_available_beds;
    }

    public function prog_comments() {
        return $this->_comments;
    }

    // Déclaration des setters (mutateurs)
    public function setProg_id($prog_id) {
        $prog_id = (int) $prog_id;
        if ($prog_id > 0) {
            $this->_id = $prog_id;
        }
    }

    public function setProg_mission($prog_mission) {
        if (is_string($prog_mission)) {
            $this->_mission = $prog_mission;
        } 
    }

    public function setProg_details_mission($prog_details_mission) {
        if (is_string($prog_details_mission)) {
            $this->_details_mission = $prog_details_mission;
        }
    }

    public function setProg_location($prog_location) {
        if (is_string($prog_location)) {
            $this->_location = $prog_location;
        }
    }

    public function setProg_available_beds($prog_available_beds) {
        $prog_available_beds = (int) $prog_available_beds;
        if ($prog_available_beds >= 0) {
            $this->_available_beds = $prog_available_beds;
        }
    }

    public function setProg_comments($prog_comments) {
        if (is_string($prog_comments)) {
            $this->_comments = $prog_comments;
        }
    }
}