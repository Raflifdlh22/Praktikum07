<?php

class Balok 
{
    public $panjang, $lebar, $tinggi;

    public function __construct($panjang, $lebar, $tinggi)
    {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function Volume()
    {
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    public function Permukaan()
    {
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }
}

$balok = new Balok(5, 3, 2);
$volume_balok = $balok->Volume();
$permukaan_balok = $balok->Permukaan();
echo "Volume balok 1: " . $volume_balok . "<br>";
echo "Permukaan balok 1: " . $permukaan_balok;
?>
