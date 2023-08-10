<?php


class RandomColor {

    public function randomColor() {

        $colors = ['black', 'yellow', 'crimson'];
        return $colors[rand(0, count($colors) - 1)];
    
    }

}