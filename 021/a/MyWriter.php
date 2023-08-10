<?php

class MyWriter extends Writer implements WriterPlan {
    public function randomColor() {
        $colors = ['black', 'yellow', 'crimson'];
        return $colors[rand(0, count($colors) - 1)];
    }
}