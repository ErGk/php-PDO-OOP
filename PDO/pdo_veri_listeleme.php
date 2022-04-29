<?php
   require_once('header.php');

$query = $db -> prepare('SELECT * FROM test');
$query -> execute();
$row = $query -> fetchAll(PDO::FETCH_ASSOC);

foreach ($row as $value) {
    echo $value['baslik']. "<br>";
}