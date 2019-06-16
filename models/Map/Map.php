<?php

class Map {
    
    // Décalaration des attributs
    private $_id;
    private $_name;
    private $_lat;
    private $_lng;

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
    public function id() {
        return $this->_id;
    }

    public function name() {
        return $this->_name;
    }

    public function lat() {
        return $this->_lat;
    }

    public function lng() {
        return $this->_lng;
    }

    // Déclaration des setters (mutateurs)
    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setName($name) {
        if (is_string($$name)) {
            $this->_name = $name;
        }
    }
    public function setLat($lat) {
        $lat = floatval($lat);
            $this->_lat = $lat;
    }

    public function setLng($lng) {
        $lng = floatval($lng);
            $this->_lng = $lng;
    }
}