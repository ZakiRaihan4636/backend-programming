<?php

class person
{
  public $nama;
  public $alamat;
  public $jurusan;

  public function __construct($nama, $alamat, $jurusan)
  {
    $this->nama = $nama;
    $this->alamat = $alamat;
    $this->jurusan = $jurusan;
  }


  public function setNama($data)
  {
    $this->nama = $data;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function setAlamat($data)
  {
    $this->alamat = $data;
  }

  public function getAlamat()
  {
    return $this->alamat;
  }

  public function setJurusan()
  {
    
  }
}

$mahasiswa = [
  [
    "nama" => "Muhamad Zaki Raihan",
    "alamat" => "bogor",
    "jurusan" => "Teknik Informatika"
  ],
  [
    "nama" => "Rikaa rahma",
    "alamat" => "bogor",
    "jurusan" => "Teknik Informatika"
  ]
];

$zaki = new Person("Muhamad Zaki Raihan", "Bogor", "Teknik Informatika");
$rika = new person("Rikaa Rahma", "bogor", "Teknik Informatika");

echo $zaki->nama;
// $zaki->nama = "Muhamad Zaki Raihan";
// $zaki->alamat = "Bogor";
// $zaki->jurusan = "Teknik Informatika";

// echo $zaki->nama . "\n";

// $rika = new Person("Rika rahmaa","Bogor","Teknik Informatika");
// $rika->setNama("Rikaa Rahma");

// echo $rika->getNama();
