<h3>Ekle</h3>
<form action="" method='get' id='popup-form'>
    <input type="text" name='plaka_no' placeholder='Plaka No'>
    <input type="text" name='il_adi' placeholder='İl Adı'>
    <select name="il_ilce" id="">
        <option value="">-- Seçin --</option>
        <option value="il">İl</option>
        <option value="ilce">İlçe</option>
    </select>
    <button>Ekle</button>
</form>

<?php

if(isset($_POST['Plaka No'])){
    echo 'dd';
    $plakaNo = htmlspecialchars(trim($_POST['plaka_no']));
    $ilAdi = htmlspecialchars(trim($_POST['ilAdi']));
    $il_ilce = htmlspecialchars(trim($_POST['il_ilce']));

    if($il_ilce == 'il'){
        $query = $db -> prepare('INSERT INTO iller SET plaka_no = ?, il_adi = ?');
        $query -> execute([
            $plakaNo,
            $ilAdi
        ]);   
    }
}
