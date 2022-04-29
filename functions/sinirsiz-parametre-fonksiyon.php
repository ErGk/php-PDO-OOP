<?php

#############################################################################
//Fonksiyonda Sınırsız Parametre Göndermek
/*
    func_num_args()
    func_get_args()
    func_get_arg()
*/

function sinirsiz(){
    echo func_num_args(). '<br>'; // Fonksiyondaki parametreleri sayısını verir
    print_r(func_get_args()). '<br>'; // Fonksiyonu dizi haline getirir
    echo func_get_arg(rand(0,4)); // Dizi haline gelen fonksiyondan eleman çeker
    return;
}
sinirsiz(2,5,3,7,6);

#############################################################################

?>