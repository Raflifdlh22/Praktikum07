<?php
class mamalia
{
    public $nama;
    public $warna;
    public $habitat;

    function menyusui()
    {
        return "$this->nama adalah hewan menyusui";
    }
    function melahirkan()
    {
        return "$this->nama adalah hewan yang melahirkan";
    }
}
$objek = new mamalia;
$objek->nama = "kucing";
$objek->warna = "coklat";
$objek->habitat = "Sekitar Manusia";
echo $objek-> menyusui();
echo "<br>";
echo $objek->melahirkan();
