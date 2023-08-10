<?php

abstract class Writer extends RandomColor {

    public function write($text) {

        echo '<h1 style="color:'.$this->randomColor().';">' . $text . '</h1>';
    
    }

}