<?php
    // Otomatik indis Alır.
    $array = array(
        "Veriable", 
        "Değişken", 
        "Demektir"
    );
        // Array'i Elemanlarıyla birlikte göstermek için kullanılmaktadır.
        print_r($array);
    $array2 = array(
        'Do' => "Do", 
        'Surekli' => "Sürekli", 
        'Olarak' => "Olarak", 
        'Yaptıklarından' => "Yaptıklarından", 
        'Bahsetmektir' => "Bahsetmektir"
    );
        // Array 2 de tanımladığımız değiş
        echo $array2["Surekli"];
    
        // Array'in yeni kullanı şekli
        $array3 = [
            0,
            1,
            2,
            3
        ];
        print_r($array3);
?>
