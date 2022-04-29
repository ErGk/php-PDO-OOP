<?php

# preg_match()
# preg_match_all()

// unuttuysan ANLAMAK İÇİN VİDEOYU AÇ : 125. ders

$metin = "Ben phpyi çok seviyorum";
$sonuc1 = preg_match('/php/', $metin); // eşleşme sağlamak için kullanılır fakat tam eşleşme sağlamaz
$sonuc2 = preg_match('/\bphp\b/', $metin); // tam eşleşme sağlamak için kullanılır

echo '<sub>kelimemiz</sub><h3 style="margin-top:0">Ben phpyi çok seviyorum</h3>';

if($sonuc1){
    echo "Sonuc 1 : php geçiyor (kelimeler tam eşleşmedi phpyi içerisinden php okundu)";
}else{
    echo "Sonuc 1 : php geçmiyor";
}

echo '<hr>';

if($sonuc2){
    echo "Sonuc 2 : php geçiyor (kelimeler tam eşleşmedi phpyi içerisinden php okundu)";
}else{
    echo "Sonuc 2 : php geçmiyor";
}
echo '<hr>';

$mail = 'er-en_gdk.10@gmail.com';
$desen = '/^[a-z0-9._-]+@[a-z]+.[a-z]{2,}+$/'; // E-mail kontrol Desenei

$cikti = preg_match($desen, $mail);

if($cikti){
    echo 'Geçerli Mail';
}else{
    echo 'Geçersiz Mail';
}
