<?php
/*
print_f($_FILES); // Array Olarak Listeleme Yapıyoruz.
*/

if($_FILES['docs']['error'] == 4){
    echo "Dosya Seçmediniz";
}else{
    if(is_uploaded_file($_FILES['docs']['tmp_name'])){

        $_DOCS_NAME = $_FILES['docs']['name']; // Dosya ismini verdik
        $_DOCS_TYPE = $_FILES['docs']['type']; // Dosya ismini verdik
        $extension = explode('.', $_DOCS_NAME); // noktadan parçaladık çünkü uzantısını alacağız.
        $_DOCS_EXTENSION = $extension[1]; // dosya uzantısını name($_FILES['docs']['name'])'i .'dan explode ederek aldık.
        $_DOCS_UNIQID = uniqid(); // Bu fonksiyon rastgele karakterler üreterek değişkene tanımlarlar
        $_DOCS_SIZE = 1024 * 1014 * 2; // En fazla kaç mb yükleme yapılması gerektiğini belirttik
        $_DOCS_TMP_NAME = $_FILES['docs']['tmp_name']; // Dosyanın geçiçi olarak tutulduğu yeri belirledik
        $_DOCS_DIR = 'yuklenenler/'; // Yüklenecek klasörü belirttik. 
        $_DOCS_ENABLE_FORMAT = [
            'image/jpeg',
            'image/png',
            'image/gif'
        ]; // dosya formatlarını belirttik

        if(in_array($_DOCS_TYPE, $_DOCS_ENABLE_FORMAT)){
            if($_FILES['docs']['size'] <= $_DOCS_SIZE){

                $dosya = move_uploaded_file($_DOCS_TMP_NAME, $_DOCS_DIR.$_DOCS_UNIQID.'.'.$_DOCS_EXTENSION);
                if($dosya){
                    echo '<h3> Görsel Yüklendi </h3>';
                    echo '<img src="'. $_DOCS_DIR . $_DOCS_UNIQID.'.'.$_DOCS_EXTENSION .'" /> ';
                }else{
                    echo 'Bir Hata Oluştu';
                }
            }else{
            echo 'Dosya Boyutu en fazla "2 MB" Olabilir.';
            }
        }else{
            echo '"Yalnızca "JPG", "PNG" ve "GİF" uzantılarına izin verilmektedir.';
        }
    }else{
        echo "Dosya Yüklenirken Bir Hata Oluştu";
    }
}