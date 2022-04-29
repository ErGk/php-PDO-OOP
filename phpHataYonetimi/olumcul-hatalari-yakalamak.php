<?php

error_reporting(E_ALL ^ E_ERROR);
function fatalError(){
    $hata = error_get_last();
    print_r($hata);

    // Arrayden gelen veriler ile istenilen kontrol yapılır ve hatalar veritabanına kaydettirilir.
}
register_shutdown_function('fatalError');

a();

echo 'test';