<?php 

class Test extends Parent_ {
    static $a = 'Bu bir Statik A değişkenidir.'; // statik methodlar içerisinde sadece static özellikler ve statik methodlar kullanılmaktadır. Bu yüzden değişkenimizie static özelliğini vererek çağırdık.
    static public function helloWord(){
        return 'Hello Word! ' . self::$a ." ". parent::$parent; // Self veya parent olarak erişim sağlayabiliyoruz // Self içerde Parent Dışardan
    }
}

class Parent_ {
    static $parent = 'Bu parent olarak çekilmiştir.';
}

// static olarak oluşturulan methodları aşağıdaki şekilde yazırabiliriz.
echo Test::helloWord();

