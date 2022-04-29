<?php

function ImageUpload($dosya, $boyutLimit = 1, $YuklenecekYer = 'uploads/'){
    $sonuc = [];
    if($dosya['error'] == 4){
        $sonuc['hata'] =  "Dosya Seçmediniz";
    }else{
        if(is_uploaded_file($dosya['tmp_name'])){
    
            $_DOCS_NAME = $dosya['name']; // Dosya ismini verdik
            $_DOCS_TYPE = $dosya['type']; // Dosya ismini verdik
            $extension = explode('.', $_DOCS_NAME); // noktadan parçaladık çünkü uzantısını alacağız.
            $_DOCS_EXTENSION = $extension[1]; // dosya uzantısını name($_FILES['docs']['name'])'i .'dan explode ederek aldık.
            $_DOCS_UNIQID = uniqid(); // Bu fonksiyon rastgele karakterler üreterek değişkene tanımlarlar
            $_DOCS_SIZE = 1024 * 1014 * $boyutLimit; // En fazla kaç mb yükleme yapılması gerektiğini belirttik
            $_DOCS_TMP_NAME = $dosya['tmp_name']; // Dosyanın geçiçi olarak tutulduğu yeri belirledik
            $_DOCS_DIR = $YuklenecekYer; // Yüklenecek klasörü belirttik. 
            $_DOCS_ENABLE_FORMAT = [
                'image/jpeg',
                'image/png',
                'image/gif'
            ]; // dosya formatlarını belirttik
    
            if(in_array($_DOCS_TYPE, $_DOCS_ENABLE_FORMAT)){
                if($dosya['size'] <= $_DOCS_SIZE){
    
                    $dosya = move_uploaded_file($_DOCS_TMP_NAME, $_DOCS_DIR.$_DOCS_UNIQID.'.'.$_DOCS_EXTENSION);
                    if($dosya){
                        $sonuc['dosya'] = $_DOCS_DIR . $_DOCS_UNIQID . '.' . $_DOCS_EXTENSION;
                    }else{
                        $sonuc['hata'] =  'Bir Hata Oluştu';
                    }
                }else{
                    $sonuc['hata'] =  'Dosya Boyutu en fazla "2 MB" Olabilir.';
                }
            }else{
                $sonuc['hata'] =  '"Yalnızca "JPG", "PNG" ve "GİF" uzantılarına izin verilmektedir.';
            }
        }else{
            $sonuc['hata'] =  "Dosya Yüklenirken Bir Hata Oluştu";
        }
    }
    return $sonuc;
}



// Fonksiyon Kullanımı
$sonuc = ImageUpload($_FILES['docs'], 2, 'yuklenenler/');

if(isset($sonuc['hata'])){
    echo $sonuc['hata'];
} else{
    echo '<a href="'. $sonuc['dosya'] .'" /> Dosyayı Görüntüle </a>';
}
