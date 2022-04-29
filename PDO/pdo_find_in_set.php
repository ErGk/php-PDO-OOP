<?php
/* Çalışmıyoreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee
*
*
*/
    ob_start();
    require_once('header.php');
    
    if(PostVarMi("baslik")){
        $baslik = PostVarMi("baslik");
        $icerik = PostVarMi("icerik");
        $onay = PostVarMi("onay");
        $KategoriId = is_array($_POST['kategori']) ?  implode(',', $_POST['kategori']) : $_POST['kategori'];

        $query = $db -> prepare('INSERT INTO join_daireler SET 
            kat_id = ?,
            baslik = ?,
            icerik = ?,
            onay = ?
        ');
        $add = $query -> execute([
            $KategoriId,
            $baslik,
            $icerik,
            $onay
        ]);

        if($add){
            //header("Location:pdo_veri_listeleme");
        }else{
            $Erorr = $add -> errorInfo();

            echo 'Mysql Error:' . $Error[2];
        }
    }

    $query_kat = $db -> prepare('SELECT * FROM kategoriler ORDER BY ad DESC');
    $query_kat -> execute();
    $row_kat = $query_kat -> fetchAll(PDO::FETCH_ASSOC);
?>

<form action="" method="POST">

    <input type="text" name="baslik" placeholder = 'baslik' /> <br> <br>
    <textarea name="icerik" id="" cols="30" rows="10" placeholder="icerik"></textarea> <br> <br>
    <select name="onay">
        <option value="0">Onaysız</option>
        <option value="1">Onaylı</option>
    </select>    <br> <br>
    <select name="kategori[]" multiple size="10">
        <?php foreach( $row_kat as $values): ?>
            <option value="<?php echo $values['id'] ?>"><?php echo $values['ad'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <br>
    <br>

    <button>Gönder</button>
</form>

<?php
    $implode = '9,11,12';
    $exp = explode(',', $implode);
    $query = $db -> prepare('SELECT * FROM join_daireler WHERE FIND_IN_SET( ? , kat_id)');
    $query -> execute([
        $exp
    ]);
    $row  = $query -> fetchAll(PDO::FETCH_ASSOC);

    foreach($row as $value){
        echo $value['baslik']. "<br>";
    }