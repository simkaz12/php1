<?php

class Kibiras {
    private $akmenuKiekis = 0;

    public function pridetiAkmeni() {
        $this->akmenuKiekis++;
    }
    public function pridetiDaugAkmenu($kiekis) {
        $this->akmenuKiekis += $kiekis;
    }
    public function kiekPririnktaAkmenu() {
        echo "Yra $this->akmenuKiekis akmuo.";
    }
}