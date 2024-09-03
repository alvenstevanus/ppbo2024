<?php
class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}


class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}


class Tabung
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume($tinggi) : float {
        return self::PHI*pow($this->jari_jari,2)*$tinggi;
    }
}


class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public function volume($tinggi) : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$tinggi;
    }
}

$nasi_tumpeng = new Kerucut();
$nasi_tumpeng->jari_jari=4;
$volume_nastum=$nasi_tumpeng->volume(10);

echo "Volume Nasi tumpeng adalah {$volume_nastum}\n";

$jam_dinding=new Lingkaran();
$jam_dinding->jari_jari=14;
$luasjam=$jam_dinding->luas();
$kelilingjam=$jam_dinding->keliling();

echo "Luas jam dinding adalah {$luasjam} dan kelilingnya {$kelilingjam}\n";

$bolakasti=new Bola();
$bolakasti->jari_jari=10;
$volumekasti=$bolakasti->volume();

echo "volume bola kasti adalah {$volumekasti}\n";

$gelas=new Tabung();
$gelas->jari_jari=3.5;
$volumegelas=$gelas->volume(10);

echo "Volume gelas adalah {$volumegelas}\n";