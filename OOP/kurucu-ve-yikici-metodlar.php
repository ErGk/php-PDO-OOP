<?php

/*

__construct()
Class başlar başlamaz çalışır


__destruct();
Class'ın içerisindeki işlemler bittikten sonra en son olarak çalışır.

*/

class DB{
    private $db;
    // Class Çağırıldığında hemen çalışır
    public function __construct($host,$kadi,$sifre){
        $this -> db  = new PDO('mysql:host='.$host, $kadi, $sifre);
    }

    public function araMethod(){
        return 'Ara Method'. '<br>';
    }

    //Class'ın işlemleri bittikten sonra çalışır
    public function __destruct(){
        echo 'Yıkıcı Method';
    }

}

$test = New DB('localhost', 'root', ''); // Sadece Class Çağırarak DB ye bağlandık

echo $test -> araMethod();
/*
Yukarıdaki araMethod ekrana bastırılmasa çıktımız:

Kurucu Method
Yıkıcı Method 

Olacaktı

Yazdırdığımız için;

Kurucu Method
Ara Method
Yıkıcı Method 

olarak çıktı
*/