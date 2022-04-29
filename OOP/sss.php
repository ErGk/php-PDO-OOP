<?php 


class baglanti{
    function baglan(){
        try {
            $db = new PDO('mysql:host=loscalhost;dbname=test', 'root', '');
        } catch (\Throwable $th) {
            echo $e -> getMessage();
        }
    }
}


$baglan = new baglanti;

$baglan -> baglan();