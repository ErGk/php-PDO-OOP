<?php


// Diziyi jSon formatına çevirmek için json_encode kullanılır.
$arr = 
[
    'CompanyName' => 'Reyting Gayrimenkul',
    'Street' => 'Kartal',
    'webSite' => 
    [
        [
            'url' => 'reyting.com.tr',
            'title' => 'Reyting Gayrimenkul Danışmanlığı'
        ],
        [
            'url' => 'reytinggayrimenkul.com',
            'title' => 'Reyting Gayrimenkul Danışmanlığı'
        ]
    ]
];
//echo json_encode($arr);







// Diziyi jSon formatından çıkartarak dizi formatına çevirmek için json_decode kullanılır.
echo '<br>';
$arr2 = '
    {
    "CompanyName": "Reyting Gayrimenkul",
    "Street": "Kartal",
    "webSite": [
        {
        "url": "reyting.com.tr",
        "title": "Reyting Gayrimenkul Danışmanlığı"
        },
        {
        "url": "reytinggayrimenkul.com",
        "title": "Reyting Gayrimenkul Danışmanlığı"
        }
    ]
    }
';
echo '<br>';
//print_r(json_decode($arr2, true));






// jSon formatını kullanarak dışarıdan bir dosya çağırmak için;

$jSon = file_get_contents('veri.json');

print_r(json_decode($jSon, true)); // true parametresini alması diziye çevir demektir. True almazsa obje olarak tanımlar.