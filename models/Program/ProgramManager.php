<?php
class Program {
    
    // Décalaration des attributs
    private $_prog_id;
    private $_prog_mission;
    private $_prog_details_mission;
    private $_prog_location;
    private $_prog_available_beds;
    private $_prog_comments;

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
        return $this->_prog_id;
    }

    public function prog_mission() {
        return $this->_prog_mission;
    }

    public function prog_details_mission() {
        return $this->_prog_details_mission;
    }

    public function prog_location() {
        return $this->_prog_location;
    }

    public function prog_available_beds() {
        return $this->_prog_available_beds;
    }

    public function prog_comments() {
        return $this->_prog_comments;
    }

    // Déclaration des setters (mutateurs)
    public function setProg_id($art_id) {
        $art_id = (int) $prog_id;
        if ($prog_id > 0) {
            $this->_prog_id = $prog_id;
        }
    }

    public function setProg_mission($prog_mission) {
        if (is_string($prog_mission)) {
            $this->_prog_mission = $prog_mission;
        } 
    }

    public function setProg_details_mission($prog_details_mission) {
        if (is_string($prog_details_mission)) {
            $this->_prog_details_mission = $prog_details_mission;
        }
    }

    public function setProg_location($prog_location) {
        if (is_string($prog_location)) {
            $this->_prog_location = $prog_location;
        }
    }

    public function setProg_available_beds($prog_available_beds) {
        $this->_prog_available_beds = $prog_available_beds;
    }

    public function setProg_comments($prog_comments) {
        $this->_prog_comments = $prog_comments;
    }
}