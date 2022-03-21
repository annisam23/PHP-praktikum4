<?php

//cara membuat class
class Mahasiswa {
    //cara membuat property(variabe;)
    public $name = "Anyong";
    public $alamat = "Bogor";
    public $jurusan = "Informatika";

    //cara membuat methpd(fungsi)

    function CekNama()
    {
        echo "Nama saya adalah : ".$this->name;
    }

    function __construct($datanama,$dataalamat,$datajurusan)
    {
        $this->name = $datanama;
        $this->alamat = $dataalamat;
        $this->jurusan = $datajurusan;
    }

}
//cara buat object
$nisa = new Mahasiswa("Nisa","Depok","SI");
$nisa2 = new Mahasiswa("Ani","Bogor","TI");

//cara akses property
echo $nisa->name;
echo "<br>";

//CEK NISA 2
echo $nisa2->name;
echo "<br>";

//cara akses method
//$nisa->CekNama();
