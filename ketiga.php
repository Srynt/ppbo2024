<?php


class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;


    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }


    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }


    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}



class Bola
{
    public $jari_jari;
    const PHI = 3.14;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}


class Tabung
{
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi =$tinggi;
    }
    
    const PHI = 3.14;
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}


class Kerucut
{
    public $jari_jari;
    public $tinggi;
    const PHI = 3.14;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi =$tinggi;
    }
   
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

$nasi_tumpeng = new Lingkaran(4);
echo "Ini adalah luas seonggok nasi tumpeng {$nasi_tumpeng->luas()}\n";
echo "Ini adalah keliling nazi tumpeng {$nasi_tumpeng ->Keliling()}\n";

$bola_budi = new Bola(5);
echo "Volume bola budi adalah {$bola_budi->volume()}\n";

$tab= new Tabung(6,7);
echo "Volume tabung budi adaalh {$tab->volume()}\n";

$ker= new Kerucut(8,9);
echo "Volume kerucut nya adalah {$ker->volume()}\n";
