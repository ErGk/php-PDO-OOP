<?php
    /*

        POST GÜVENLİĞİNİ SAĞLAMAK İÇİN;

        strip_tags;
        htmlspecialchars;
        trim;
    */

    function ClearCode($Post){
        if(is_array($Post)){
            return $Post;
        }else{
            return htmlspecialchars(trim($Post));
        }
    }

    function post($P){
        if(isset($_POST[$P])){
           return $_POST[$P]. "<br>";
        }
    }

    $_POST = array_map("ClearCode", $_POST);

    echo post("name");
    echo post("surname");
?>