<!-- Nama   : Risha Kurnia Fitri -->
<!-- NIM    : 20051397009 -->
<!-- Kelas  : D4 Manajemen Informatika - 2020A -->
<!-- Praktikum 5 -->

<?php

class Pegawai {
    public $nama, $gaji;

    public function __construct($nama, $gaji){
        $this->nama = $nama;
        $this->gaji = $gaji;
    }

    public function infoGaji(){
        return $this->gaji;
    }
}

class Manajer extends Pegawai {
    private $tunjangan;

    public function __construct($nama, $gaji, $tunjangan){
        $this->tunjangan = $tunjangan;
        parent::__construct($nama,$gaji);
    }

    public function infoGaji(){
        return parent::infoGaji();
    }

    public function infoTunjangan(){
        return $this->tunjangan;
    }
}

class Programmer extends Pegawai {
    private $bonus;

    public function __construct($nama, $gaji, $bonus){
        $this->bonus = $bonus;
        parent::__construct($nama, $gaji);
    }

    public function infoGaji(){
        return parent::infoGaji();
    }

    public function infoBonus(){
        return $this->bonus;
    }
}

$manajer = new Manajer('Tiway', 50000000, 3000000);
$programmer = new Programmer('Jevano', 40000000, 3500000);