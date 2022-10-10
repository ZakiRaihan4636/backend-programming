<?php

class Animal
{
  public $animals = [];

  public function __construct($data)
  {
    foreach ($data as $data) {
      array_push($this->animals, $data);
    }
  }

  public function index()
  {
    foreach ($this->animals as $animal) {
      echo $animal . "\n";
    }
  }

  public function store($data)
  {
    array_push($this->animals, $data);
  }

  public function update($index, $data)
  {
    $this->animals[$index] = $data;
  }

  public function destroy($index)
  {
    unset($this->animals[$index]);
  }
}

$animal = new Animal(["Ayam", "ikan"]);

echo "Index - Menampilkan seluruh hewan \n";
$animal->index();
echo "\n";

echo "Store - Menambagkan hewan baru (burung) \n";
$animal->store("Burung");
$animal->index();
echo "\n";

echo "Update = Mengupdate hewan \n";
$animal->update(0, "Kucing anggora");
$animal->index();
echo "\n";

echo "Destroy - menghapus hewan \n";
$animal->destroy(1);
$animal->index();
echo "\n";
