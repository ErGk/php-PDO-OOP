<?php 

$yazi = "Reyting Gayrimenkul Danışmanlığı ";

function _e($write){
   echo $write;
    return $write; 
}
#############################################################################
function word_short($word, $limit = 10){

    $word_numb = strlen($word);

    if($word_numb > $limit) 
        $word = substr($word, 0, $limit).".."; 
    return $word;
}

_e(word_short($yazi). "<br>");
#############################################################################
/*
    Anonim Fonksiyonlar
        - Değişkene tanımlanarak işleyiş görör   
*/

// Normal değişkene atama
$lorem = function($as){
    return "Lorem Ipsun" . " ". $as;
};

echo $lorem("as"). "<br>";
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
$yazi = "Reyting Gayrimenkul Danışmanlığı";

    function kisalt($wordi, $limit = 5){

        $yazi_uzunlugu = strlen($wordi);

        if($yazi_uzunlugu > $limit)
            $wordi = substr($wordi, 0, $limit). "..";
        return $wordi;
    }

    echo kisalt($yazi,511)."<br>";
 #############################################################################

$topla = function($sayi1, $sayi2){
    $topla = $sayi1 + $sayi2;
    return $topla;
};

$sonuc = $topla(2,4);
echo $sonuc. '<br>';
#############################################################################
//Fonksiyonda Sınırsız Parametre Göndermek
/*
    func_num_args()
    func_get_args()
    func_get_arg()
*/

function sinirsiz(){
    echo func_num_args(). '<br>'; // Fonksiyondaki parametreleri sayısını verir
    print_r(func_get_args()). '<br>'; // Fonksiyonu dizi haline getirir
    echo func_get_arg(rand(0,4)); // Dizi haline gelen fonksiyondan eleman çeker
    return;
}
sinirsiz(2,5,3,7,6);

#############################################################################

/*
function shorter($single,$limit){
    
    $charact = strlen($single);
    if($charact > $limit);
}
*/
