<?php

$countFILES = count($_FILES['docs']['name']);

for ($i=0; $i < $countFILES; $i++) { 

    $_FILES_NAME = $_FILES['docs']['name'][$i];
    $_EXPLODE = explode(".", $_FILES_NAME);
    $_FILE_EXC = $_EXPLODE[1];
    $_FILES_TYPE = $_FILES['docs']['type'][$i];
    $_FILES_TMP  = $_FILES['docs']['tmp_name'][$i];
    $_FILES_ERROR = $_FILES['docs']['error'][$i];
    $_FILES_SIZE = $_FILES['docs']['size'][$i];
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
                        echo "Success <br>";
                    }else{
                        echo "UnError". "<br>";
                    }
                }else{
                    echo "Dosyalar 2 MB'dan büyük Olamaz!";
                }
            }else{
                echo "Sistem Sadece JPG | PNG | GIF Formatlarına İzin Vermektedir.";
            }
        }else{
            echo "DOSYA YÜKLENİRKEN BİR HATA İLE KARŞILAŞILDI <br>";
        }
    }

}

