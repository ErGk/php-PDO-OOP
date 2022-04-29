<?php

// https://www.php.net/manual/tr/class.datetime

/// 3 saat önce yayınlandır vs. gibi bildirim göstermeyeye yarar.
$tarih = new DateTime();

//$tarih->setTimezone(new DateTimeZone('Europe/Istanbul')); // TR Saat dilimi
echo $tarih->format('Y-m-d H:i:s');

echo '<br>';

$tarih = new DateTime('2022-04-23 10:09:00', new DateTimeZone('Europe/Istanbul'));
$tarih2 = new DateTime('');

$fark = $tarih -> diff($tarih2);

$tarih =  $fark -> format('%y yıl %m ay %d gün %h saat %i dakika %s saniye');

$datePrint = str_replace([
    '0 yıl',
    ' 0 ay',
    ' 0 gün',
    ' 0 saat',
    ' 0 dakika'
], '', $tarih);

echo $datePrint. ' önce paylaşıldı.';
