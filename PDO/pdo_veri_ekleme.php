<?php
    ob_start();
    require_once('header.php');
    
    if(PostVarMi("baslik")){
        $baslik = PostVarMi("baslik");
        $icerik = PostVarMi("icerik");
        $onay = PostVarMi("onay");
        $KategoriId = PostVarMi("kategori");

        $query = $db -> prepare('INSERT INTO test SET 
            kategori_id = ?,
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
            header("Location:pdo_veri_listeleme");
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
    <select name="kategori" >
        <option value="">--- Kategori Seçin ---</option>
        <?php foreach( $row_kat as $values): ?>
            <option value="<?php echo $values['id'] ?>"><?php echo $values['ad'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <br>
    <br>

    <button>Gönder</button>
</form>