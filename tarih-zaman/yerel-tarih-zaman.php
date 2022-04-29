<?php

// https://www.php.net/manual/tr/function.setlocale

// Yereli Türkçe yapalım
setlocale(LC_TIME, 'tr_TR');
date_default_timezone_set('Europe/Istanbul');

// https://www.php.net/manual/tr/function.strftime Tarihi Türkçe kullanabilmek için 


$ingilizce = array(
	'January',
	'February',
	'March',
	'April',
	'May',
	'Jun',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December',
	'Monday',
	'Tuesday',
	'Wednesday',
	'Thursday',
	'Friday',
	'Saturday',
	'Sunday'
);

$turkce = array(
	'Ocak',
	'Şubat',
	'Mart',
	'Nisan',
	'Mayıs',
	'Haziran',
	'Temmuz',
	'Ağustos',
	'Eylül',
	'Ekim',
	'Kasım',
	'Aralık',
	'Pazartesi',
    'Salı',
    'Çarşamba',
    'Perşembe',
    'Cuma',
    'Cumartesi',
    'Pazar'
);
 
$tarih = str_replace($ingilizce,$turkce,date('d F Y l'));
echo $tarih; //örnek çıktı: 18 Şubat 2018 Pazar
