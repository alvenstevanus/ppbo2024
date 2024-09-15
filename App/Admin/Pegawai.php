<?php
namespace App\Admin;

class Pegawai {
    public $nip;
    public $nama;
    protected $no_hp;
    public $alamat;

    public function __construct($nip, $nama, $no_hp, $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekIn() {
        echo $this->nama . " berhasil cek in.<br>";
        return true;
    }

    public function cekOut() {
        echo $this->nama . " berhasil cek out.<br>";
        return true;
    }

    public function getNoHp() {
        return $this->no_hp;
    }

    public function setNoHp($no_hp) {
        $this->no_hp = $no_hp;
    }
}

namespace App\Admin;

class Dosen extends Pegawai {
    public string $nidn;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, string $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar(): void {
        echo $this->nama . " sedang mengajar perkuliahan";
    }
}

namespace App\Admin;

class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, int $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->gaji_pokok = $gaji_pokok;
    }

    public function cuti(): void {
        echo $this->nama . " sedang cuti";
    }
}