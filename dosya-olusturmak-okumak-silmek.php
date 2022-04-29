<?php 
/*
touch("test.txt"); // Dosya oluşturmaya yarar
touch("test2.txt", time() - 84000); // Dosya oluşturmaya yarar 2. parametrede ise ne zaman oluşturulduğunun ayarını verebilirsiz. bu günden itibaren 84 000 saniye önce oluşturuldu gibisinden
*/


/*
    fopen() -> dosyayı açmamızı sağlar
    fclose() -> dosyayı kapatmayı sağlar
    fwrite() -> dosyaya birşeyler yazmamızı sağlar
    fread() -> tüm içeriği okur
    fgets() -> satır satır okur
    feof() -> dosyanın sonuna gelip gelinmediğini okur.
    filesize() -> dosyanın karakter sayısını döndürür.
    unlink(); - dosyayı siler
*/

/*
    r  - okumak için aç
    r+ - okumak ve yaz
    w  - yazmak için aç (Dosya yoksa oluşturulur.)
    w+ - okumak ve yazmak için aç
    a - yazmak için aç
    a+ - okumak ve yazmak için aç
*/
$icerik = "Dosya İçeriği";

$dosya = fopen('test.txt', 'a');

fwrite($dosya, $icerik);
fclose($dosya);


?>