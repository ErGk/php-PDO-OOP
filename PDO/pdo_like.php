<?php

require_once "header.php";


$query = $db -> prepare('SELECT * from join_daireler WHERE baslik LIKE  "_e%" ORDER BY id DESC');
$query -> execute();
$row = $query -> fetchAll(PDO::FETCH_ASSOC);

echo '<b>Sorgu:</b> SELECT * from join_daireler WHERE baslik <b>LIKE  "_e%"</b> ORDER BY id DESC <br> <hr>';
foreach( $row as $value){
    echo $value['baslik']. "<br>";
}
?>

<hr>
<h3>Second Example</h3>

<form action="" method="GET">
    <input type="text" name="arama" placeholder='' value='<?php echo isset($_GET['arama']) ? $_GET['arama'] : null; ?>'>
    <button>Search</button>
</form>


<?php


    $sql = 'SELECT * FROM join_daireler';
    if(isset($_GET['arama'])):
        $sql .= ' WHERE baslik LIKE "%'.$_GET['arama'].'%"';
    endif;

    $query_search = $db -> prepare($sql);
    $query_search -> execute();
    $row_search = $query_search -> fetchAll(PDO::FETCH_ASSOC);
    $i = 0;
    foreach($row_search as $value){
        $i++;
        echo "<b>".$i.". Sonuç : </b>".$value['baslik']. '<br>';
    }
    
    $count = count($row_search);
    $sql. "<br>";
    if($count > 0){
        echo "<br> <b> Oluşan SQL: </b>" . $sql. "<br> <br> Toplamda <b>". $count . "</b> Sonuca Ulaşıldı.";
    }else{
        echo "Arama Sonuçlarına Ulaşılamadı.";
    }

    
