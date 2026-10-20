<?php
// Studi kasus sekaligus pengembangan bagian 10.3.
class Mahasiswa {
    private $nim;
    private $nama;
    private $prodi;
    private $semester;
    private $nilai = null;

    public function __construct($nim, $nama, $prodi, $semester = 1) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->prodi = $prodi;
        $this->setSemester($semester);
    }

    public function setSemester($semester) {
        if (!is_int($semester) || $semester < 1) {
            throw new InvalidArgumentException("Semester harus bilangan bulat positif.");
        }
        $this->semester = $semester;
    }

    public function setNilai($nilai) {
        if (!is_numeric($nilai) || $nilai < 0 || $nilai > 100) {
            return false;
        }
        $this->nilai = (float) $nilai;
        return true;
    }

    public function getNim() { return $this->nim; }
    public function getNama() { return $this->nama; }
    public function getProdi() { return $this->prodi; }
    public function getSemester() { return $this->semester; }
    public function getNilai() { return $this->nilai; }

    public function tentukanGrade() {
        if ($this->nilai === null) { return "Belum ada nilai"; }
        if ($this->nilai >= 80) { return "A"; }
        if ($this->nilai >= 70) { return "B"; }
        if ($this->nilai >= 60) { return "C"; }
        if ($this->nilai >= 50) { return "D"; }
        return "E";
    }
}

// Ganti identitas contoh berikut dengan data mahasiswa yang diperlukan.
$mhs1 = new Mahasiswa("2301001", "Andi", "Sistem Informasi", 2);
$mhs1->setNilai(85);

echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Nama: " . $mhs1->getNama() . "<br>";
echo "Prodi: " . $mhs1->getProdi() . "<br>";
echo "Semester: " . $mhs1->getSemester() . "<br>";
echo "Nilai: " . $mhs1->getNilai() . "<br>";
echo "Grade: " . $mhs1->tentukanGrade() . "<br>";

echo "<br>Percobaan memasukkan nilai 150:<br>";
if (!$mhs1->setNilai(150)) {
    echo "Nilai tidak valid. Nilai harus berupa angka antara 0 sampai 100.<br>";
}
echo "Nilai tersimpan: " . $mhs1->getNilai() . "<br>";
echo "Grade: " . $mhs1->tentukanGrade();
