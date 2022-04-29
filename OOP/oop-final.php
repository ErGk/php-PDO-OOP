<?php
/**
 * **
 * 
 * final kelimesi bir class'a geldiği vakit o classtan sonra hiç bir türeme yapılamayacağı anlamına gelmektedir.
 * 
 * **
 */
class marka{

}

class model extends marka{

}

class seri extends model{

}

final class urun extends seri{
    public function test(){
        return  'ürün';
    }
}

$urun = new Urun;

echo $urun -> test();