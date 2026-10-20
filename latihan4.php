<?php
class Mahasiswa {
    private $nama;
    private $nilai = null;

    public function setNama($nama) { $this->nama = $nama; }

    public function setNilai($nilai) {
        if (!is_numeric($nilai) || $nilai < 0 || $nilai > 100) {
            echo "Nilai harus berupa angka antara 0 sampai 100.<br>";
            return false;
        }
        $this->nilai = (float) $nilai;
        return true;
    }

    public function getNama() { return $this->nama; }
    public function getNilai() { return $this->nilai; }
}

$mhs1 = new Mahasiswa();
$mhs1->setNama("Andi");
$mhs1->setNilai(85);
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";

echo "Percobaan memasukkan nilai 150:<br>";
$mhs1->setNilai(150);
echo "Nilai setelah percobaan: " . $mhs1->getNilai();
