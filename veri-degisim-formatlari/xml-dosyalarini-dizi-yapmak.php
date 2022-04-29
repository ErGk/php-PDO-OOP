<?php

// Farklı bir dosyadan xml i okumak için kullanılır
$xml = simplexml_load_file('xml.xml');

print_r($xml);


// Aynı dosyadan xml çekmek için kullanılır.

$xml_in = "<?xml version='1.0' encoding='UTF-8' ?>
<eren>
	<ad>Eren</ad>
	<soyad>Gedik</soyad>
	<siteler>
		<site>
			<domain>reyting.com.tr</domain>
			<title>Reyting Gayrimenkul Danışmanlığı</title>
		</site>
		<site>
			<domain>kombitamircisi.com.tr</domain>
			<title>Kombi Teknik Servisi</title>
		</site>
		<site>
			<domain>klimatamircisi.com.tr</domain>
			<title>Klima Tamircisi</title>
		</site>
	</siteler>
</eren>";

$decode_xml = simplexml_load_string($xml_in);

print_r($decode_xml);