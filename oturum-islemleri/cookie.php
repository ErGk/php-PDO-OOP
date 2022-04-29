<?php
    //setcookie() Fonksiyonu Çerez fonksiyonudur
    //$_COOKIE

    setcookie('site', 'Reyting', time() + (86400 * 3)); // Cookie oluşturmak için kullanılır.

    setcookie('site', 'Reyting', time() + (86400 * 3)); // Cookie Silmek için kullanılır

    //print_r($_COOKIE);

    $_COOKIE['reyting'] = 'Success';

    echo $_COOKIE['reyting'];
?>
