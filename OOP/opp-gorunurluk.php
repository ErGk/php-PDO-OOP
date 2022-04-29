<?php

// public -> her yerden erişim yapılabilir
// private -> sadece ilgili class erişebilir
//  protected -> miras almada kullanılabilir.

class Test{
    public $a = 'b';
    private $b = 'c'; // Değere private vermek sadece sınıf içerisinde kullanılabileceğini anlatır

    public function b(){
        return $this -> b;
    }
}

$Test = new Test;

echo $Test -> a. '<br>'; // public olduğu için yazıyor
echo $Test -> b(); // private olan bir değişkeni public metoduna tanımlayarak çekebildik

