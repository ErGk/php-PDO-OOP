<?php require_once('db_baglantisi.php'); 

    
?>

<style>
    .hrefleng a{
        padding: 5px;
        color: #FFF;
        font-size: 17px;
    }
    .input{
        display:block;
    }
</style>

<div style="padding: 1em;background: #1f3997;" class="hrefleng">
    <a href="pdo_veri_listeleme">[ Veri Listeleme ] </a>  
    <a href="pdo_veri_guncelleme"> [ Veri Güncelleme ] </a>  
    <a href="pdo_veri_ekleme"> [ Veri Ekleme ] </a>  
    <a href="pdo_veri_silme"> [ Veri Silme ] </a>  
    <a href="pdo_join"> [ Joinler ] </a> 
    <a href="pdo_like"> [ LIKE ] </a> 
    <a href="pdo_between"> [ BETWEEN ] </a> 
    <a href="pdo_find_in_set"> [ FIND_IN_SET ] </a> 
    <a href="pdo_son_eklenen_id_alma"> [ SON EKLENEN ID ALMA ] </a> 
    <a href="pdo_listeleme_yapmak"> [ LİSTELEME YAPMAK ] </a> 
</div>

<br><br><br>



<!-- Fonksiyonlar -->

<?php



$_POST = array_map('PostSecurity', $_POST);

function PostSecurity($gelenDeger){
    if(is_array($gelenDeger)){
        return array_map('PostSecurity', $gelenDeger);
    }else{
        return htmlspecialchars(trim($gelenDeger));
    }
}

$_GET = array_map('getSecurity', $_GET);

   function getSecurity($gelenDeger){
        if(is_array($gelenDeger)){
            array_map('getSecurity', $gelenDeger);
        }else{
            return htmlspecialchars(trim($gelenDeger));
        }
   }

function GetVarMi($gelenDeger){
    if(isset($_GET[$gelenDeger])){
        return $_GET[$gelenDeger];
    }
}

function PostVarMi($gelenDeger){
    if(isset($_POST[$gelenDeger])){
        return $_POST[$gelenDeger];
    }
}



?>