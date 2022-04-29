
<?php
 
 require_once('header.php');

    $delete = $db -> prepare("DELETE FROM test WHERE id = ? ");
    $delete -> execute([
        15
    ]);

    if($delete){
        echo "Success";
    }else{
        echo "Warning";
    }