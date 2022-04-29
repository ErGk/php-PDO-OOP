<?php 
    require_once "header.php"
?>

<form action="" method="get">
    <input type="text" class="datepicker" name="baslangic" placeholder="Başlangıç Tarihi" value="<?php echo isset($_GET['baslangic']) ? $_GET['baslangic'] : null; ?>">
    <input type="text" class="datepicker" name="bitis" placeholder="Bitiş Tarihi" value="<?php echo isset($_GET['bitis']) ? $_GET['bitis'] : null; ?>">
    <button>Send</button>
</form>


    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  
    <script>
        $( ".datepicker" ).datepicker({
            dateFormat : 'yy-mm-dd'
        });
    </script>

<?php 

if(GetVarMi("baslangic")){
    $sql = 'SELECT * FROM join_daireler WHERE tarih BETWEEN "'.$_GET['baslangic'].' 00:00:00" AND "'.$_GET['bitis'].' 23:59:59"';
    $query = $db -> prepare($sql);
    $query -> execute();
    $row  = $query -> fetchAll(PDO::FETCH_ASSOC);

    foreach($row as $value){
        echo $value['baslik']. "<br>";
    }
}else{
    echo "Between parametresi, 2 tarih arasında olan sonuçları getirir.";
}

?>