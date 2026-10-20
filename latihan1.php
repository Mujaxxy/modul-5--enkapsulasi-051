<?php
class Mahasiswa {
    public $nama;
    private $nilai;

    public function setNama($nama) {
        $this->nama = $nama;
    }
}

$mhs1 = new Mahasiswa();
$mhs1->nama = "Andi";
echo "Nama: " . $mhs1->nama;

// Hapus tanda // untuk mengamati error akses property private:
// $mhs1->nilai = 90;
