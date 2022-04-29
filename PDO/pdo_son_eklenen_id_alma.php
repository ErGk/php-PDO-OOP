<?php require_once "header.php";

?>

    <a href="?bul=true">Bul</a>

<?php

if(isset($_GET['bul'])){
    $query = $db -> prepare('INSERT INTO join_daireler SET 
        kat_id = ?,
        baslik = ?,
        icerik = ?,
        onay = ?
    ');

    $query -> execute([
        5,
        'Başlık',
        'İçerik',
        1
    ]);

    $idLast = $db->lastInsertId();

    echo "Son Eklenen Verinin ID'si: ". $idLast; 
}else{
    echo '<h3>Son Eklenen Verinin ID\'sini alma </h3>';
}