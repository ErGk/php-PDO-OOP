<?php


## print_r();
## var_dump();
## explode();
## implode();
## count();
## is_array();
## shuffle();
## array_combine();
## array_count_values();
## array_flip()
## array_key_exists()

## array_map()
## array_filter()
## array_merge()
## array_rand()
## array_reverse()
## array_search()
## in_array()
## array_shift()
## array_pop()
## array_slice()
## array_sum()
## array_product()
## array_unique()

## array_values()
## array_push()
## array_unshift()
## array_keys()
## current()
## end()
## next()
## prev()
## reset()
## extract()
## asort()
## arsort()
## ksort()
## krsort()

$arr = [
    'reyting',
    'gayrimenkul',
    'danismanligi'
];
/*

    ## print_r();

    > >  Bir diziyi okunabilir hale döküyor
*/
    echo "print_r(); <br>";
    print_r($arr). '<br>';


echo "<hr>";


/*
    ## var_dump();

    > > Bir diziyi daha detaylı hale getirerek okunmasını sağlar
*/

    echo "var_dump(); <br>";
    var_dump($arr);


    echo "<hr>";


/*
    ## explode();
    > > dizideki elemanları belirilen karaktere göre ayırır
*/

    echo "explode(); <br>";
    
    $exp = "Reyting,Satılık,Kiralık,Tapu,Arsa,Ofis";

    $ary = explode(',', $exp);

    print_r($ary);


    echo "<hr>";


/*
    ## implode();
    > > dizideki elemanları belirtilen karaktere göre birleştirir
*/
    echo "explode(); <br>";
    $imp = implode('|', $ary);

    echo $imp;

    echo "<hr>";

/*
    ## count();
    > > Dizideki eleman sayısını bize bildirir
*/
    echo "count(); <br>";
    
    echo count($ary);

    echo "<hr>";
   
/*
    ## is_array();
    > > bir değişkenin dizi olup olmadığını kontrol eder
*/

    echo "is_array(); <br>";

    if(is_array($ary)){
        echo "\$ary değişkeni Bu bir dizidir";
    }else{
        echo "\$ary Bu bir dizi değildir.";
    }

    echo "<hr>";
/*
    ## shuffle();
    > > Dizide bulunan değişkenleri karıştırmaya yarar
*/
    echo "shuffle(); <br>";

    shuffle($ary); // Önce karıştırır sonra altta ayrıca yazdırmak gerekir.


    
    print_r($ary);  

    echo "<hr>";
/*
    ## array_combine();
    > > İki diziyi birleştirmek için kullanılır
*/
    echo "array_combine(); <br>";

    $keys = ['name', 'surname'];
    $values = ['Reyting', 'Gayrimenkul'];

    $arr_comb = array_combine($keys, $values);
    print_r($arr_comb);
    echo "<hr>";
/*
    ## array_count_values();
    > > Dizide yer alan aynı değişkenlerin kaç kere tekrarlandığını bulur 
*/
    echo "array_count_values(); <br>";
    $arr = ['Reyting', 'Reyting', 'Reyting', 'Gayrimenkul', 'Gayrimenkul', 'Danışmanlığı', 'Danışmanlığı', 'Danışmanlığı', 'Danışmanlığı', 'Danışmanlığı'];
    $arry = array_count_values($arr);
    print_r($arry);

    echo "<hr>";
/*
    ## array_flip()
    > > Dizide yer alan anahtar ve değerlerin yerlerini değiştirir.
*/


    echo "array_flip(); <br>";

    $arr = [
        '01' => 'reyting',
        '02' => 'gayrimenkul',
        '03' => 'danismanligi'
    ];

    $arry = array_flip($arr);
    print_r($arry);

    echo "<hr>";
/*
    ## array_key_exists()
    > > dizide anahtar var mı kontrol ettirir.
*/
    echo "array_key_exists(); <br>";

    if(array_key_exists('0s1', $arr)){
        echo "true";
    }else{
        echo "false";
    }

    echo "<hr>";
/*
    ## array_map()
    > > Dizide bulunan elemanların fonksiyonda dönmesini sağlar
*/
echo "array_map(); <br>";

    function filtrele($val){
        return $val * 2 . "-";
    }

    $arr = [1,2,3,4,5,6,7,8,9];
    $arry = array_map("filtrele", $arr);
    print_r($arry);

echo "<hr>";
/*
    ## array_filter()
    > > Dizide ki boş olan değerleri kaldırır.
*/

echo "array_filter(); <br>";

$arr = ['', '', '1','3',''];
$arry = array_filter($arr);
print_r($arry);

echo "<hr>";

/*
    ## array_merge()
    > > iki diziyi birleştirmek için kullanılır.
*/

echo "array_merge(); <br>";

$arr1 = [1,2,3,4,5,6,7,8,9];
$arr2 = [0,5,8,9,6,3,2,5,4];

$arry3 = array_merge($arr1, $arr2);

print_r($arry3);

echo "<hr>";

/*
    ## array_rand()
    > > Rast gele değer göstermemizi sağlar
*/

echo "array_rand(); <br>";

    $arr = [
        '01' => 'reyting',
        '02' => 'gayrimenkul',
        '03' => 'danismanligi'
    ];
    $rand = array_rand($arr, 2);
    print_r($rand);
    
echo "<hr>";

/*
    ## array_reverse()
    > > Dizideki elemanları tersten yazdırmaya başlar
*/

echo "array_reverse(); <br>";

$arr1 = [1,2,3,4,5,6,7,8,9];
$arr2 = array_reverse($arr1);

print_r($arr2);

echo "<hr>";

/*
    ## array_search()
    > > Dizilerde arama yapmaya yarar, bulunduğu dizinin id nosunu verir.
*/

echo "array_search(); <br>";

    $arr = [
        'Name' => 'Reyting',
        'Surname' => 'Gayrimenkul'
    ];

    $arr2 = array_search( 'Reyting',$arr);

    print_r($arr2);

    echo "<hr>";

/*
    ## in_array()
    > > Dizi içerisinde belirtilen elemanın olup olmadığını kontrol eder
*/

echo "in_array(); <br>";

    $arr1 = [1,2,3,4,5,6,7,8,9];
    if (in_array('3', $arr1)){
        echo 'yes';
    }else{
        echo "Yok";
    }

echo "<hr>";

/*
    ## array_shift()
    > > Dizinin ilk elemanını alır. Diziden çıkartır değişkende tutar.
*/

echo "array_shift(); <br>";

    $arr1 = [1,2,3,4,5,6,7,8,9];
    $ilk_eleman = array_shift($arr1);
    print_r($arr1);
    echo "Dizinin İlk Elemanı: " . $ilk_eleman;

echo "<hr>";

/*
    ## array_pop()
    > > Dizinin Son Elemanını Alır
*/

echo "array_pop(); <br>";

$arr1 = [1,2,3,4,5,6,7,8,9];
$son_eleman = array_pop($arr1);
print_r($arr1);
echo "Dizinin Son Elemanı: " . $son_eleman;

echo "<hr>";

/*
    ## array_slice()
    > > dizinin belli bir aralığını seçmek için kullanılır
*/

echo "array_slice(); <br>";

    $arr1 = [1,2,3,4,5,6,7,8,9];
    print_r(array_slice($arr1, 2, 5)); // İlk iki elemanı atlar daha sonraki 5 elemanı dizide bırakır
    print_r(array_slice($arr1, -2));  // Son iki elemanı seçer

echo "<hr>";

/*
    ## array_sum()
    > >  Dizinin değerlerinin toplamını bulmak için kullanılır.
*/

echo "array_sum(); <br>";
    $arr1 = [1,2,3,4,5,6,7,8,9];
    echo "Toplamı : " . array_sum($arr1);
echo "<hr>";

/*
    ## array_product()
    > > dizi elemanlarının çarpımını alır
*/

echo "array_product(); <br>";
    $arr1 = [1,2,3,4,5,6,7,8,9];
    echo "Çarpımı : " . array_product($arr1);
echo "<hr>";

/*
    ## array_unique()
    > > Dizide tekrarlanan elemanları siler
*/

echo "array_unique(); <br>";
    $arr1 = [1,2,2,2,2,2,2,2,2,2,2,2,3,4,5,6,7,8,9];
    print_r( array_unique($arr1));
echo "<hr>";

/*
## array_values()
    > > indisleri tekrar sıralamak için kullanılır
*/

echo "array_values(); <br>";
    $arr = [
        'Reyting',
        'Reyting',
        'Danışman',
        'Danışman',
        'Gayrimenkul',
        'Gayrimenkul',
        'Satılık',
        'Satılık',
        'Kartal',
        'Kartal'
    ];

    $arr2 = array_unique($arr); // Tekrar eden elemanlar çıkartıldıklarında indisleri değişmiyor. Ancak array_values kullanılırsa indis numaraları değişir.

    print_r(array_values($arr2)); // Indis numaralarını tekrardan 0 lar ve yazdırır.

echo "<hr>";

/*
## array_push()
    > > Diziye eleman eklemek için kullanılır
*/

echo "array_push(); <br>";

    $arr = [
        'Reyting'
    ];

    //<--- Alternatif YOL 
    $arr[] = 'Yeni Daire'; // anahtarsız olarak eklemek için 
    $arr['anahtar_ismi'] = 'Yeni Daire'; // anahtarlı olarak eklemek için 
    //--->
    $arr1 = array_push($arr, 'Danışman', 'Gayrimenkul', 'Satılık', 'Kiralık');
    print_r($arr);
    
echo "<hr>";

/*
## array_unshift()
    > > Dizilerin başına eleman ekler
*/

echo "array_unshift(); <br>";
    $arr = [
        'Reyting'
    ];

    $arr2 = array_unshift($arr, 'Argument');
    print_r($arr);
echo "<hr>";

/*
## array_keys()
    > > 
*/

echo "array_keys(); <br>";
    $arr = [
        'name' => 'Reyting',
        'surname' => 'Gayrimenkul'
    ];

echo "<hr>";

/*
## current()
    > > Dizinin ilk Elemanını Gösterir
*/

echo "current(); <br>";
    $arr = [
        'Reyting',
        'Gayrimenkul'
    ];
    echo current($arr);
echo "<hr>";

/*
## end()
    > > Dizinin son Elemanını Gösterir
*/

echo "end(); <br>";
$arr = [
    'Reyting',
    'Gayrimenkul'
];
echo end($arr); // direkt olarak ekrana yazdırmak problem çıkartabiliyor, bu sebeple önce değişkene tanımlamak gerekli
echo "<hr>";

/*
## next()
    > > bir sonraki elemana atlar
*/

echo "next(); <br>";
$arr1 = [1,2,3,4,5,6,7,8,9];
echo next($arr1). ",";
echo next($arr1). ",";
echo next($arr1). ",";
echo next($arr1). ",";
echo next($arr1);
echo "<hr>";

/*
## prev()
    > > bir önceki elemana geçer
*/

echo "prev(); <br>";

prev($arr1). ",";
prev($arr1). ",";
echo prev($arr1);

echo "<hr>";

/*
## reset()
    > > ileri geri alma işlemlerini iptal eder ve başa döner
*/

echo "reset(); <br>";
    reset($arr1);
echo "<hr>";

/*
## extract()
    > > İndis numaralarını değişken gibi algılamayı sağlar
*/

echo "extract(); <br>";
    $ext = [
        'Reyting' => 'Gayrimenkul',
        'Gayrimenkul' => 'Danışmanlığı',
        'Danışmanlığı' => 'Kartal',
        'Kartal' => 'Esentepe'
    ];
    extract($ext);

    echo $Reyting. "<br>";
    echo $Gayrimenkul. "<br>";
    echo $Danışmanlığı. "<br>";
    echo $Kartal;
echo "<hr>";

/*
## asort()
    > > Dizideki değerlere göre sıralama yapar. Küçükten büyüğe doğru A dan Z ye doğru
*/

echo "asort(); <br>";
    $arr = [3,1,4,5,6];
    asort($arr);
    print_r(array_values($arr));

echo "<hr>";

/*
## arsort()
    > > Dizideki değerlere göre sıralama yapar. Küçükten büyüğe doğru z dan a yea doğru
*/

echo "arsort(); <br>";
    $arr = [3,1,4,5,6];
    arsort($arr);
    print_r(array_values($arr));
echo "<hr>";

/*
## ksort()
    > > Indıs numarasına göre sıralama yapar Küçükten büyüğe doğru A dan Z ye doğru
*/

echo "ksort(); <br>";

    $arry = [
        'a' => 'Değer 1',
        'c' => 'Değer 3',
        'b' => 'Değer 2'
    ];

    ksort($arry);
    print_r($arry);
echo "<hr>";

/*
## krsort()
    > > Indıs numarasına göre sıralama yapar Küçükten büyüğe doğru Z dan A ye doğru
*/

echo "krsort(); <br>";
    $arry = [
        'a' => 'Değer 1',
        'c' => 'Değer 3',
        'b' => 'Değer 2'
    ];

    krsort($arry);
    print_r($arry);
echo "<hr>";

?>