<?php

class Beaver extends River {
    public $name;

    public function __construct($name) {
        parent::__construct('Dunajec', '247 km');
        $this->name = $name;
    }
    public function __get($name) {
        if($name === 'distance') {
            return $this->distance;
        }
    }
}