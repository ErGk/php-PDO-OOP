<?php

# date();
# https://www.php.net/manual/tr/function.date.php burada açıklıyor

# Normal kayıt ve karşılaştırma şekli format olarak : yıl-ay-gün saat:dakika:saniye olmalıdır

echo date('Y-m-d H:i:s'). '<br>';

/*

    Unix Zaman,

    1 Ocak 1970'den beri geçen saniye sayısına denilen sayısal veri tipidir.

*/

/* 
    time() fonksiyonu 1 Ocak 1970'den beri geçen saniye! 
    Tarihi saniye cinsinden vermektedir. date() fonksiyonuna parametre olarak gider. 

    (60 * 60 * 24) » toplamda 1 günü vermektedir. * 20 yaparak ve time() fonksiyonundan çıkartarak 20 gün öncesine gitmiş bulunuyoruz. tam tersi - yerine + dersek 20 gün ileriye gitmiş oluruz.
*/
$time =  time() - (60 * 60 * 24 * 20); 

echo date('Y-m-d H:i:s', $time);
