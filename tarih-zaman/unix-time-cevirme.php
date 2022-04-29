<?php 

#strtotime()

//3 gün sonraya giden unix saniye biçimini bize aktarır
$unix = strtotime('+3 Day', time());

// Oluşan unix'i  date fonksiyonundaki oarametreye atıyoruz.
echo date('Y-m-d H:i:s', $unix);


echo strtotime("+1 year 1 mount -2 year 3 day"); // 1 tıl 1 ay ileri git 2 yıl 3 gün geri gel ve unix kodunu ver.

echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
