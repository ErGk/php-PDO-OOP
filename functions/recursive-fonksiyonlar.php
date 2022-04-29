<?php
$arry = [
    [
        'id' => 1,
        'parent' => 0,
        'name' => 'Home'
    ],
    [
        'id' => 2,
        'parent' => 0,
        'name' => 'Sale'
    ],
    [
        'id' => 3,
        'parent' => 0,
        'name' => 'Rent'
    ],
    [
        'id' => 4,
        'parent' => 2,
        'name' => 'Office'
    ],
    [
        'id' => 5,
        'parent' => 2,
        'name' => 'Residence'
    ],
    [
        'id' => 6,
        'parent' => 3,
        'name' => 'Office'
    ],
    [
        'id' => 7,
        'parent' => 3,
        'name' => 'Residence'
    ]
];

function arry($array, $parent = 0){
    echo "<ul>";
    foreach ($array as $value) {
        if($value['parent'] == $parent){
            echo "<li>".$value['name']."</li>";
            arry($array,$value['id']);
        }
    }
    echo "</ul>";
}

arry($arry);

?>














































<?php 
/*

$arr = [
    [
        'id' => "1",
        'parent' => "0",
        'ad' => "Home"
    ],
    [
        'id' => "2",
        'parent' => "0",
        'ad' => "Güncel"
    ],
    [
        'id' => "3",
        'parent' => "0",
        'ad' => "Blog"
    ],
    [
        'id' => "4",
        'parent' => "0",
        'ad' => "Satılık"
    ],
    [
        'id' => "5",
        'parent' => "4",
        'ad' => "Daire"
    ],
    [
        'id' => "6",
        'parent' => "4",
        'ad' => "Residence"
    ]
];

function recursive($arry, $parent = 0){
    echo '<ul>';
    foreach ($arry as $value) {

        $parent_arr = $value['parent'];

        if($parent_arr == $parent){
            echo '<li>'.$value['ad'].'</li>';
            echo recursive($arry, $value['id']);
        }
    }
    echo '</ul>';
}

recursive($arr,0);






















*/
?>