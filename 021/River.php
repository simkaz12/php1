<?php

class River {
    public $title;
    protected $distance;
    private static $allFish = [
        'carp',
        'heck',
        'pike',
        'catfish',
        'bass'
    ];
    private $fish = [];

    public function __construct($title, $distance) {
        $this->title = $title;
        $this -> distance = $distance;

        $this->fish = range(1, rand(1, 10));

        array_walk($this->fish, function (&$fish) {
            $fish = self::$allFish[rand(0, count(self::$allFish) - 1)];
        });
    }



}