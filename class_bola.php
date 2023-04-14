<?php
class Bola {
    public $jarijari;

    public function __construct($jarijari) {
        $this->jarijari = $jarijari;
    }

    public function Volume()
    {
        return (4/3) * M_PI * pow($this->jarijari, 3);
    }

    public function Permukaan() {
        return 4 * M_PI * pow($this->jarijari, 2);
    }
}

// Membuat objek Bola
$bola = new Bola(5);
$volume = $bola->Volume();
$permukaan = $bola->Permukaan();
echo "Volume bola : " . $volume . "<br>";
echo "Permukaan bola : " . $permukaan;
