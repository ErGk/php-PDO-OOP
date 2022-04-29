<?php
/*

2 tane aynı isimde değilken varsa parent ile miras alınan değişkene ulaşılabilir.

*/
class test{
    public function merhaba(){
        return 'merhaba';
    }
}


// test class'ından miras almak için kullanılır
class test2 extends test{
    public function dunya(){
        return ' dünya';
    }
}

// Sadece test2 sınıfını çağırarak merhaba ve dünya kelimelerini yazdırdık. 
$test2 = new test2;
echo $test2 -> merhaba();
echo $test2 -> dunya() . '<br>';


class degiskenler{
    public $il = 'İstanbul';
    public $ilce = 'Kartal';
    public $mahalle = 'Esentepe';
    public $binaNo = 15;
    public $mulkDurumu = 'Satılık';
    public $onayDurumu = 1;
}

class ilanBilgileri extends degiskenler{
    public function bilgiler(){
        $bilgiler = $this->il. ' / ' . $this -> ilce . ' /' . $this -> mahalle . ' / ' . $this -> binaNo;
        return $bilgiler;
    }
}

$breadCrumb = New ilanBilgileri;
echo $breadCrumb -> bilgiler();


/*
    Classlar üzerinden birbirinden miras alarak değişken taşıyor.
*/

echo '<hr>';

class Calisanlar{
    public $personelMaasi;
    public function personelAdiSoyadi($personelAdiSoyadi){
        return $personelAdiSoyadi;
    }
    public function personelMaasi($personelMaasi){
        return $personelMaasi;
    }
}

class It extends Calisanlar{
    public function IT(){
        $it  = '<h3> IT ÇALIŞANI </h3>';
        $it .= 'IT Çalışanımız: ' . $this -> personelAdiSoyadi('Eren Gedik');
        $it .= '<br>' . $this -> personelMaasi(5000) . ' ₺ Maaş Almaktadır.';
        $it .= '<br> Elemanın Yıllık Maaşı : ' . $this -> personelMaasi(5000) * 12 . ' ₺\'dir';
        return $it;
    } 
}

class Muhasebe extends Calisanlar{
    public function MUHASEBE(){
        $it  = '<h3> Muhasebe ÇALIŞANI </h3>';
        $it .= 'Muhasebe Çalışanımız: ' . $this -> personelAdiSoyadi('İsmail Genç');
        $it .= '<br>' . $this -> personelMaasi(4300) . ' ₺ Maaş Almaktadır.';
        $it .= '<br> Elemanın Yıllık Maaşı : ' . $this -> personelMaasi(4300) * 12 . ' ₺\'dir';
        return $it;
    } 
}

$It = new It;
$Muhasebe = new Muhasebe;

echo $It -> IT();
echo $Muhasebe -> MUHASEBE();

/*****
 * 
 * 
 *  
 * 
 * EN İYİ ANLAŞILACAK YOL
 * 
 * 
 */

 class a{
    public function test(){
        return 'a::test';
    }
 }

 class b extends a{
    public function test(){
        return 'b::test';
    }
 }

 class c extends b{
    public function test(){
        return 'c::test';
    }

    public function go(){
       return '<br>' . 
       a::test(). '<br>' . 
       b::test(). '<br>' . 
       c::test(). '<br>';
    }
 }

 $c = new c;
 echo  $c -> go();