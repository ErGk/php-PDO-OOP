<?php

try {
    $db = new PDO('mysql:localhost;dbname:test', 'root', '');
} catch (PDOException $e) {
    print "Hata!: " . $e->getMessage() . "<br/>";
    die();
}

