<style>
    ul.pagenavigation{
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
    }
    .pagenavigation li {
        list-style: none;
    }
    .pagenavigation li > a{
        list-style: none;
        background: #182e50;
        margin: 10px;
        color: #FFF;
        text-decoration: none;
        padding: 10px 15px;
        font-size:18px;
    }
    .pagenavigation li.active{
        background: #CDD;
    }
    .pagenavigation li.active > a{

    }
</style>

<?php
    require_once "db_baglantisi.php";

    // Sayfa içerisinde kaç veri gözükecek
    $limit =3;

    // hangi sayfada sayfa sayısı (kaçıncı sayfa)
    $sayfa = isset($_GET['sayfa']) && is_numeric($_GET['sayfa']) ? $_GET['sayfa'] : 1;

    //toplam içerik sayısı
    $querySay = $db -> prepare('SELECT count(*) as toplam FROM join_daireler');
    $querySay -> execute();
    $toplamVeri = $querySay -> fetchAll(PDO::FETCH_ASSOC);
    $toplamVeri = $toplamVeri[0]['toplam'];
   
    //oluşacak toplam sayfa sayısı
    $toplamSayfaSayisi = ceil($toplamVeri / $limit);

    //veriler kaçıncı sayfadan başlayacak
    $baslangic = ($sayfa * $limit) - $limit;

    //Verileri Listeleme
    $sql = 'SELECT * FROM join_daireler ORDER BY id DESC LIMIT '.$baslangic.','. $limit;
    $query = $db -> prepare($sql);
    $query -> execute();
    $row = $query -> fetchAll(PDO::FETCH_ASSOC);

    //listeleme
    foreach($row as $value){
        echo $value['baslik']. '<br>';
    }

    //sayfalama 
    $geriSayfa = isset($_GET['sayfa']) && is_numeric($_GET['sayfa']) && $_GET['sayfa'] > 1 ? $_GET['sayfa']-1 : isset($_GET['sayfa']);
    $ileriSayfa = isset($_GET['sayfa']) && is_numeric($_GET['sayfa']) && $_GET['sayfa'] < $toplamSayfaSayisi ? $_GET['sayfa'] + 1 : isset($_GET['sayfa']);
    $sagDeger = $sayfa - 3;
    $solDeger = $sayfa + 3;

    echo '<ul class="pagenavigation">';
    echo !empty($_GET['sayfa']) && $_GET['sayfa'] > 1 ? '<li> <a href="?sayfa='.$geriSayfa.'"> « geri </a> </li>' : null;
    for ($i= $sagDeger; $i <= $solDeger ; $i++) { 
        if($i > 0 && $i <= $toplamSayfaSayisi){
          echo '<li> <a '.($i == $sayfa ? ' class="active"' : null).' href="?sayfa='. $i .'">'. $i . '</a> </li>';
        }
    }
    echo !empty($_GET['sayfa']) && $_GET['sayfa'] < $toplamSayfaSayisi ? '<li> <a href="?sayfa='.$ileriSayfa.'"> ileri » </a> </li>' : null;
    echo '</ul>';