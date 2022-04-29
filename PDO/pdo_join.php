<?php 

require_once "header.php";

    if(PostVarMi('cat_name')){
        echo $_POST['cat_name'];

        $query = $db -> prepare('INSERT INTO kategoriler SET
            ad = ?
        ');
        $query -> execute([
            $_POST['cat_name']
        ]);
    }

?>


<form action="" method="POST">
    <input type="text" name="cat_name">
    <button>Gönder</button>
</form>


<?php

    $query = $db -> prepare('SELECT * from kategoriler');
    $query -> execute();
    $row = $query -> fetchAll(PDO::FETCH_ASSOC);

?>
<h3>Kategoriler</h3>
<ul>
    <?php foreach ($row as $value): ?>
        <li><a href="?kat=<?php echo $value['id']?>"><?php echo $value['ad'] ?> (  )</a></li>
    <?php endforeach; ?>
</ul>

<!-- JOIN ANLATIMI -->

<?php 

$join_query = $db -> prepare('SELECT * FROM join_daireler INNER JOIN kategoriler ON kategoriler.id = join_daireler.kat_id');
$join_query -> execute();
$join_row = $join_query -> fetchAll(PDO::FETCH_ASSOC);

?>

<h3>Listeler</h3>

<ul>
    <?php foreach ($join_row as $value): ?>
        <li><a href="?kat_id=<?php echo $value['id']; ?>"><?php echo $value['baslik']; ?> <b>{ <?php echo $value['ad']; ?> }</b> </a></li>
    <?php endforeach; ?>
</ul>

<?php 

if(isset($_GET['kat_id'])){
    $kat_id = $_GET['kat_id'];

    $query = $db -> prepare('SELECT join_daireler.* , COUNT(kategoriler.id) as KatSayisi FROM join_daireler INNER JOIN kategoriler ON kategoriler.id = join_daireler.kat_id WHERE kat_id=? ');
    $query -> execute([
        $kat_id
    ]);
    $row = $query -> fetchAll(PDO::FETCH_ASSOC);
?>

    <ul>
        <?php foreach ($row as $value): ?>
            <li><a href="?katIds=<?php echo $value['id']; ?>"><?php echo $value['baslik']. "(".$value['KatSayisi'].")"; ?> </a></li>
        <?php endforeach; ?>
    </ul>

<?php
}
?>

