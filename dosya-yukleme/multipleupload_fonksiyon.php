<?php

function MultipleUpload($dosya){
    $countFILES = count($dosya['name']); 
    $Sonuc = [];
    for ($i=0; $i < $countFILES; $i++) { 

        $_FILES_NAME = $dosya['name'][$i];
        $_EXPLODE = explode(".", $_FILES_NAME);
        $_FILE_EXC = $_EXPLODE[1];
        $_FILES_TYPE = $dosya['type'][$i];
        $_FILES_TMP  = $dosya['tmp_name'][$i];
        $_FILES_ERROR = $dosya['error'][$i];
        $_FILES_SIZE = $dosya['size'][$i];
        $_FILE_DIR = "yuklenenler/";
        $_FILE_RAND_NAME = uniqid();
        $_FILES_ALLOW_SIZE = 1024 * 1040 * 25;
        $_FILES_ALLOW_TYPE = [
            'image/jpeg',
            'image/png',
            'image/gif'
        ];
        if($_FILES_ERROR == 4){
            echo "Lütfen Görsel Seçimi Yapın";
        }else{
    
            if(is_uploaded_file($_FILES_TMP)){
                if(in_array($_FILES_TYPE, $_FILES_ALLOW_TYPE)){
                    if($_FILES_SIZE < $_FILES_ALLOW_SIZE){
    
                        $_FILE_UPLOAD = move_uploaded_file($_FILES_TMP, $_FILE_DIR.$_FILE_RAND_NAME.".".$_FILE_EXC);
    
                        if($_FILE_UPLOAD){
                            $Sonuc['dosya'][$i] = $_FILE_DIR.$_FILE_RAND_NAME.".".$_FILE_EXC;
                        }else{
                            $Sonuc['hata'] = "UnError". "<br>";
                        }
                    }else{
                        $Sonuc['hata'] = "Dosyalar 2 MB'dan büyük Olamaz!";
                    }
                }else{
                    $Sonuc['hata'] = "Sistem Sadece JPG | PNG | GIF Formatlarına İzin Vermektedir.";
                }
            }else{
                $Sonuc['hata'] = "DOSYA YÜKLENİRKEN BİR HATA İLE KARŞILAŞILDI <br>";
            }
        }
    
    }
    return $Sonuc;
}



// Fonksiyon Kullanımı
$Sonuc = MultipleUpload($_FILES['docs']);

if(isset($Sonuc['hata'])){
    echo $Sonuc['hata'];
} else{
    //echo '<a href="'. $sonuc['dosya'] .'" /> Dosyayı Görüntüle </a> <br>';
    foreach ($Sonuc['dosya'] as $value) {
        echo "<img src='". $value ."' /> <br>";
    }
}

