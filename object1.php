<?php

class Kendaraan {
    var$warna;
    var$jenis;
    var$bahan_bakar;
    public function berjalan_maju(){
        echo 'saya bisa berjalan maju';

    }

    public function berjalan_belok(){
        echo 'saya bisa berjalan belok';

    }

    public function berjalan_mundur(){
        echo 'saya bisa berjalan mundur';
    }

}

class MahlukHidup{
    var$pernapasan = 'paru-paru';

    public function bernafas(){
        echo 'saya bernafas dengan '.$this->pernapasan;
    
    }

    public function makan(){
        echo 'saya makan nasi '.$this->pernapasan;
    }

}
$mobil = new kendaraan ();
//echo $mobil->mundur;
$manusia = new MahlukHidup();
$manusia->bernafas ();

?>