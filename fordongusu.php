<?php 

  

$arr = 
[
    "Satılık Ev",
    "Kiralık Ev",
    "Satılık Ofis",
    "Kiralık Ofis"
];

for( $i=0; $i <= (count($arr) - 1); $i++){
    echo $arr[$i]."<br>";
    if($i == 2) break;
}

echo "--------------- <br>";

for ($i = (count($arr) - 1); $i >= 0; $i--){
    echo $arr[$i]."<br>";
    if($i == 2) break;
} 