<?php

//Sınıf oluşturmak
class SatilikDaireler{

    /*
    Class ismini pascal olarak tanımlamakta fayda vardır. Örn: UyeBilgileri yani her kelimenin baş harfi büyük olacak

    CLASS yapısının içerisinde ne vardır?

    // değişkenler
        Değişkenler yerine özellikler, sabitler kullanılır
    // fonksiyonlar
        Fonksiyonlar yerine methodlar kullanılır

    Sınıf içinde tanımlanan her şey nesnemizdir.
    */

    public $daire; // Değiken tanımlamak
    public $residence = 'Residence'; // Değiken tanımlamak
    const Yas = 28; // Sabit tanımlamak

    public function adGoster(){
        return $this -> daire;
    }

    public function soyadGoster(){
        return $this -> residence; // Dışardan Değişken almak için bu method kullanılır
    }

    public function topla($a = 7, $b = 5){
        $sonuc= $a + $b;
        return $sonuc;
    }

    public function fonksiyonCagir($deger1 = 5, $deger2 = 85){
        return $this -> topla($deger1,$deger2); // Dışardan fonksiyon almak için bu method kullanılır
    }

    public function constGeriDonder(){
        return self::Yas; // Constları geri döndermek self kullanılır.
    }
}


$SatilikDaireler = new SatilikDaireler; // Class'ı çağırmak için kullanılır

$SatilikDaireler -> daire = 'Esentepe';
echo $SatilikDaireler -> adGoster() . '<br>';

echo $SatilikDaireler -> residence . "<br>"; // Normal değişkeni ekrana yazdırmak için kullanılır.
echo $sat = SatilikDaireler::Yas . "<br>"; // Sabit tanımlaması yaptıktan sonra bu şekilde çağırılır.
echo $SatilikDaireler -> soyadGoster() . '<br>'; // methodları çağırmak için bu şekilde kullanılır.
echo $SatilikDaireler -> topla(3,6) . '<br>'; // Parametreli method çağırmak için bu kullanılır
echo $SatilikDaireler -> fonksiyonCagir(3,6) . '<br>'; // Parametreli method çağırmak için bu kullanılır
echo $SatilikDaireler -> constGeriDonder() . '<br>'; // Const geri dönderen kod



/*

EXAMPLE



    $reyting = new ReytingClass;

    class ReytingClass{

        public $mahalle;
        public $ilce = 'Kartal';
        const Fiyat = '1500000';

        public $sayi1 = 5;
        public $sayi2 = 7;
        public const Sayi3 = 19;

        public function topla($a = 0, $b =0){
            $topla = $a + $b;
            return $topla;
        }

        public function toplaDetayli(){
            $sonuc = $this -> sayi1 + $this -> sayi2 + self::Sayi3 + $this -> topla(5,5);
            return $sonuc;
        }
    }

    echo $reyting -> ilce . '<br>';

    $reyting -> mahalle = 'Esentepe';

    echo $reyting -> mahalle . '<br>';

    echo ReytingClass::Fiyat . '<br>';

    echo $reyting -> topla(5,15) . '<br>';
    echo $reyting -> toplaDetayli() . '<br>';


    */