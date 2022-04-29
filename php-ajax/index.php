<?php
    require 'db.php';
    $query = $db -> prepare('SELECT  * FROM iller ORDER BY id DESC');
    $query -> execute();
    $row = $query -> fetchAll(PDO::FETCH_ASSOC);

    // https://www.youtube.com/watch?v=eexCRyzUDho yapılış videosu
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="popup"></div>
    
    <br>
    <hr>
    <br>
    <button class='addnew'>Yeni Ekle</button>
    <hr>
    <table border="1">

        <thead>
            <tr>
                <td>İL ADI</td>
                <td>İLÇELERİ</td>
                <td>Düzenle</td>
                <td>SİL</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <?php foreach($row as $value): ?>
                <td><?=$value['il_adi'];?></td>
                <?php endforeach; ?>
                <td>Düzenle</td>
                <td>SİL</td>
            </tr>   
        </tbody>
        
        <tfooter>
            <tr>
                <td>İL ADI</td>
                <td>İLÇELERİ</td>
                <td>Düzenle</td>
                <td>SİL</td>
            </tr>
        </tfooter>
    </table>


    <script src="jquery-3.6.0.min.js"></script>
    <script>
        $('.addnew').on('click', function(e){
            const data = {
                type : 'add-new-pop-up'
            }
            $.post('api', data, function(response){
                $('.popup').html(response.html)
            }, 'json')
        });
    </script>
    
</body>
</html>