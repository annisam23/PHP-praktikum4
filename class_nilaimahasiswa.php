<?php

//buat class
class NilaiMahasiswa{
    //buat property
    public $nim;
    public $matakuliah;
    public $nilai;

    //buat method construct
    function __construct($nim,$matakuliah,$nilai)
    {
        $this->nim = $nim;
        $this->matakuliah = $matakuliah;
        $this->nilai = $nilai; 
    }

    function hitungNilai(){
        return $this->nilai;
    }

    //method grade
    function grade($keterangan)
    {
        if ($keterangan > 55){
            return "Anda lulus";
        }else{
            return "Anda tidak Lulus";
        }
    }

    //method nilai
    function predikat($keterangan)
    {
        if($keterangan >= 85 && $keterangan <= 100){
            return "A";
        }else if($keterangan >= 70 && $keterangan <= 84 ){
            return "B";
        }else if($keterangan >= 56 && $keterangan <= 69 ){
            return "C";
        }else if($keterangan >= 36 && $keterangan <= 55 ){
            return "D";
        }else if($keterangan >= 0 && $keterangan <= 35){
            return "e";
        }else{
            return "-";
        }
    }
}