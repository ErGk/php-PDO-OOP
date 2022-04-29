<?php
/*

    ## strlen()
    ## strstr()
    ## strpos()
    ## ucwords() ucfirst() strtolower() strtoupper
    ## trim() ltrim() rtrim()
    ## substr
    ## str_replace()
    ## str_repeat()

*/


/*
    ## strlen()
    > > değişkenin uzunluğunu bulur
*/
echo "strlen(); <br>";

$Lorem = "Lorem Ipsum Dolor Sit Amet";

echo "Karakter :" . strlen($Lorem);

echo "<hr>";

/*
    ## strstr()
    > > Belirtilen kelime öncesini almaz
*/
echo "strstr(); <br>";

$Lorem = "Lorem Ipsum Dolor Sit Amet";

$sonuc = strstr($Lorem, "um");
echo $sonuc;


echo "<hr>";

/*
    ## strpos()
    > > Belirtilen kelimenin kaçıncı karakter olduğunu söyler
*/
echo "strpos(); <br>";

$Lorem = "Lorem Ipsum Dolor Sit Amet";

$sonuc = strpos($Lorem, "um");
echo $sonuc;


echo "<hr>";

/*
    ## ucwords()
    > > Belirtilen değişkenin tüm kelimelerinin baş harfini büyük yapar
    ucfirst() 
    > > Belirtilen değişkenin ilk kelimesinin ilk harfini büyük yapar
    strtolower() 
    > > Tüm karakterleri küçültür
    strtoupper()
    > > Tüm Karakterleri büyütür.
*/
echo "<b>ucwords(); ucfirst(); strtolower(); strtoupper();</b>  <br>";

$Lorem = "lorem ipsum dolor Sit amet";

$ucwords = ucwords($Lorem);
$ucfirst = ucfirst($Lorem);
$strtolower = strtolower($Lorem);
$strtoupper = strtoupper($Lorem);
echo "ucwords: ". $ucwords. "<br>";
echo "ucfirst: ". $ucfirst. "<br>";
echo "strtolower: ". $strtolower. "<br>";
echo "strtoupper: ". $strtoupper. "<br>";


echo "<hr>";

/*
    ## trim() 
    > > Sağ ve soldaki tüm boşlukları temizler, bir karakter belirtilirse onu temizler 
    ## ltrim() 
    > > Sol taraftaki tüm boşlukları temizler, bir karakter belirtilirse onu temizler 
    ## rtrim()
    > > Sağ Taraftaki tüm boşlukları temizler, bir karakter belirtilirse onu temizler 
*/
echo "trim(); ltrim(); rtrim(); <br>";

$Lorem = "-Lorem Ipsum Dolor Sit Amet-";

$sonuc = trim($Lorem, "-");
$sonuc_lt = ltrim($Lorem);
$sonuc_rt = rtrim($Lorem);
echo "Trim: ". $sonuc. "<br>";
echo "LTrim: ". $sonuc_lt. "<br>";
echo "RTrim: ". $sonuc_rt. "<br>";
echo "<hr>";


/*
    ## substr()
    > > Belirtilen kelimenin kaçıncı karakterinden başlayarak kaç karakter göstereceğini belirtir.
*/
echo "substr(); <br>";

$Lorem = "Lorem Ipsum Dolor Sit Amet";

$sonuc = substr($Lorem, 3, 7);
echo $sonuc;


echo "<hr>";



/*
    ## str_replace()
    > > Belirtilen kelimeleri bulup, belirttiğimiz kelime ile değişimini yapar
*/
echo "str_replace(); <br>";

$Lorem = "Reyting Gayrimenkul, Kartal Gayrimenkul";

$sonuc = str_replace("Gayrimenkul", "Emlak", $Lorem);
echo $sonuc;


echo "<hr>";

/*
    ## str_repeat()
    > > 
*/
echo "str_repeat(); <br>";


for ($i=0; $i <= 10 ; $i++) { 
    echo str_repeat( "*", $i). "<br>";
}
for ($i=10; $i >= 0 ; $i--) { 
    echo str_repeat( "*", $i). "<br>";
}


echo "<hr>";
