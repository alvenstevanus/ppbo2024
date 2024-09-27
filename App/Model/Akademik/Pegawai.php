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

    protected function getNoHp() {
        return $this->no_hp;
    }

    public function setNoHp($no_hp) {
        $this->no_hp = $no_hp;
    }
}