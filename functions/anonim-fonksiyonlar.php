<?php 
/*
    Anonim fonksiyonlar, değişkene atanarak isim belirtmeden kullanılabilir. Değişken fonksiyon görevi taşıyabilir

    Aşağıdaki örnekte çıkan sonuç 6'dır.
*/
$topla = function($sayi1, $sayi2){
    $topla = $sayi1 + $sayi2;
    return $topla;
};

$sonuc = $topla(2,4);
echo $sonuc. '<br>';

#############################################################################

// Array Değişkene Atama

$arry = [
    'f1' => function($arr = 5){
        return "Function One". $arr;
    },
    'f2' => function($arr = 5){
        return "Function Two". $arr;
    },
    'f3' => function($arr = 5){
        return "Function Three". $arr;
    }
];

echo $arry["f".rand(1,3)](51). "<br>";
#############################################################################

?>
