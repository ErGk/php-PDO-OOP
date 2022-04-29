<?php
    $_POST = array_map("PostController", $_POST);

    function PostController($Post){
        if(is_array($Post)){
            return array_map("PostController", $Post);
        }else{
            return htmlspecialchars(trim($Post));
        }
    }

    function PostVarMi($post){

        if(isset($_POST[$post])){
            return $_POST[$post];
        }

    }

    echo PostVarMi(PostController("kadi"));
?>
<form action="" method="POST">
    <h3>Giriş</h3>
    <input type="text" name="kadi" placeholder="K.ad">
    <input type="password" name="sifre" placeholder="Şifre">
    <button>Gir</button>
</form>

<hr>
<form action="" method="POST">
    <h3>Kaıyt</h3>
    <input type="text" name="eposta" placeholder="e posta">
    <input type="text" name="kadi" placeholder="K.ad">
    <input type="password" name="sifre" placeholder="Şifre">
    <button>Kyıt</button>
</form>