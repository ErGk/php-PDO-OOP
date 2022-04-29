<?php 

    // UPDATE TABLO_ADI SET stun_adi = '$degisken'

    require_once('header.php');

    $baslik = "eren";
    $icerik = "as";
    $onay = 1;
    $id = 4;

    $query = $db -> prepare('UPDATE test SET baslik = ?, icerik = ?, onay = ? WHERE id = ?');
    $update = $query -> execute([$baslik, $icerik, $onay, $id]);

    if($update){
        echo 'UPDATE SUCCESS!!!';
    }else{
        echo 'WARNING!! UPDATE FIALED..!';
    }