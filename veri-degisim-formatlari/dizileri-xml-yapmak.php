<?php
/*
// PHP ile  xml dosyası oluşturma
header('Content-type: text/xml');

$xml = new SimpleXMLElement('<eren />');
$xml -> addChild('ad', 'Eren');
$xml -> addChild('soyad', 'Gedik');
$siteler = $xml -> addChild('siteler');
    $site = $siteler -> addChild('site');
        $site -> addChild('domain', 'reyting.com.tr');
        $site -> addChild('title', 'Reyting Gayrimenkul Danışmanlığı');

    $site = $siteler -> addChild('site');
        $site -> addChild('domain', 'kombitamircisi.com.tr');
        $site -> addChild('title', 'Kombi Teknik Servisi');

    $site = $siteler -> addChild('site');
        $site -> addChild('domain', 'klimatamircisi.com.tr');
        $site -> addChild('title', 'Klima Tamircisi');

echo $xml -> asXML();

echo '<hr>';
*/
header('Content-type: text/xml');

$arr = [

    'ad' => 'Eren',
    'soyad' => 'Gedik',
    'siteler' => [
        0 => [
            'domain' => 'reyting.com.tr',
            'title' => 'Reyting Gayrimenkul'
        ],
        1 => [
            'domain' => 'kombitamircisi.com.tr',
            'title' => 'Kombi Teknik Servisi'
        ]
    ]
];



/* Diziyi xml çevirme fonksiyonu */
function array_to_xml($dizi, $xml){

    foreach ($dizi as $key => $value) {
        if(is_array($value)){
            if(is_numeric($key)){
                $key = 'site';
            }
            array_to_xml($value, $xml -> addChild($key));
        }else{
            $xml -> addChild($key, $value);
        }
    }
    return $xml -> asXML();
}

echo array_to_xml($arr, new SimpleXMLElement('<eren />'));
