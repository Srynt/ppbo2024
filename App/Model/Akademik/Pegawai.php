<?php

namespace App\Model\Akademik;


class Pegawai
{
   
    public $nip;
    public $nama;
    protected $no_hp; 
    public $alamat;

    public function __construct(int $nip, string $nama, int $no_hp, string $alamat)
    {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    public function cekin() : bool
    {
        return true; 
    }

    public function cekout() : bool
    {
        return true;
    }


    public function getNoHp() : int
    {
        return $this->no_hp;
    }

    public function setNoHp(int $no_hp) : void
    {
        $this->no_hp = $no_hp;
    }
}




