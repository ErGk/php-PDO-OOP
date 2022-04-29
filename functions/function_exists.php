<?php
// Sunucu içerisinde mb_substr fonksiyonu tanımlı olduğu zaman mb_substr fonksiyonunu çağırır, tanımlı değilse substr fonksiyonunu çağırır
$write_ex = 'Reyting Gayrimenkul';

function short_write($write, $limit= 20){
     if(function_exists('mb_substr')){
         $leng = strlen($write);
         
         if($leng > $limit){
            echo mb_substr($write, 0, $limit)."..";
         }else{
            echo mb_substr($write, 0, $limit);
         }
     }else{
         if($leng > $limit){
            echo substr($write, 0, $limit)."..";
         }else{
            echo substr($write, 0, $limit);
         }
     }
}

short_write($write_ex,18);
?>