<?php

    try{
        $db = new PDO('mysql:host=localhost;dbname=test', 'root', '');
    }catch(PDOexception $e){
        echo $e -> getMessage();
    }


    /*
$query = $db -> prepare('INSERT INTO test SET 
    baslik = ?,
    icerik = ?,
    onay = ?
');

$add = $query -> execute([
    'Baslik',
    'İcerik',
    1 
]);

if($add){
    echo 'Mission Complete';
}else{
    $error = $add -> errorInfo();
    echo 'Mysql Erorr:' . $error[2];
}
*/
?>
