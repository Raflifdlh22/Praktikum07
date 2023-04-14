<?php
class kendaraan
{
    public $nama, $warna, $merk;
    public function berjalan()
    {
        return "$this->nama bisa jalan";
    }
    public function tambahkecepatan()
    {
        return "$this->nama bisa menambah kecepatan";
    }
    public function getkendaraan()
    {
        echo "Nama : $this->nama <br>
            warna : $this->warna <br>
            merk : $this->merk";
            
    }
}
$objekkendaraan = new kendaraan;
$objekkendaraan->nama = "Hijet 1008";
$objekkendaraan->warna = "Merah";
$objekkendaraan->merk = "dayhatsu";
echo $objekkendaraan->berjalan();
echo "<br>";
echo $objekkendaraan->tambahkecepatan();
echo "<br>";
echo $objekkendaraan->getkendaraan();

