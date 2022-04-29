
<?php 

function sefLink($sef){
    $str = ltrim(rtrim(mb_strtolower($sef, 'utf8')));
    $str = str_replace(
        ['ı','ğ','ü','ç', 'ö', 'ş'],
        ['i','g','u','c','o','s'],
        $str
    );
    // normal karakterler ve sayilar hariç her şeyi tire işaretine çevirir
    $str = preg_replace('/[^a-z0-9]/', '-', $str);

    // birden fazla tire işaretini tek bir tireye çevirir
    $str = preg_replace('/-+/', '-', $str);

    // sağ ve solunda bulunan tire işaretlerini kaldırır
    return trim($str, '-');
}

$link = " KartAl'da 3+1 Lüks Daire Fırsatı Yakalayın ? ";
echo $link. '<br>';
echo sefLink($link);
