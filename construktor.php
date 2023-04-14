<?php
class buah
{
    public $nama, $warna, $rasa;

    public function __construct($n, $w, $r)
    {
        $this->nama = $n;
        $this->warna = $w;
        $this->rasa = $r;

    }

    function tumbuh()
    {
        return "$this->nama bisa tumbuh besar";
    }
}
$objek = new buah ("jeruk", "oren", "Manis");
echo $objek->tumbuh();