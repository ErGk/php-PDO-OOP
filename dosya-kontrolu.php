<?php

echo file_exists("dosya.txt"); // Dosyanın olup olmadığını kontrol eder.


if(file_exists("dosya.txt")){
    echo "Mevcut";
}else{
    $dosya = fopen('test.txt', 'a');
    fwrite($dosya, $icerik);
}