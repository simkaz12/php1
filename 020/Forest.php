<?php

class Forest {

    private $area, $treesCount;

    private static $animalsCount = 222;

    public static function addAnimals() {
        $count = rand(20, 40);
        self::$animalsCount += $count;
        
    }

    public function __construct($area) {
        $this->area = $area;
        $this->treesCount = $area * rand(700, 1000);
    }

    public function __destruct() {
        echo 'Forest destructed.<br> Animals left: ' . self::$animalsCount . '<br>';

    }



    public function __get($prop) {
        if ($prop == 'area') {
            return $this->area . 'km2';
        }
    }

    public function kill() {
        $kill = rand(1, 10);
        self::$animalsCount -= $kill;
    }

    public function cut() {
        $cut = rand(70, 500);
        $this->treesCount -= $cut;
        echo "$cut trees cut<br>";

    }
}