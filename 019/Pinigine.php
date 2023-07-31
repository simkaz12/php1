<?php

class Pinigine {
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti($kiekis) {
        if ($kiekis <= 2) {
            $this->metaliniaiPinigai += $kiekis;
        } else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti() {
        $suma = $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo "Piniginėje yra $this->metaliniaiPinigai metaliniu ir $this->popieriniaiPinigai popieriniu. Ju suma yra: $suma pinigai.";
    }
    public function monetos() {
        echo "Pinigineje yra $this->metaliniaiPinigai monetu.";
    }
    public function banknotai() {
        echo "Pinigineje yra $this->popieriniaiPinigai banknotu.";
    }
}