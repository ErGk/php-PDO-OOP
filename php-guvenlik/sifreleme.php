<?php

    if(isset($_POST['pass'])):
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    endif;


    // DB
    if(isset($_POST['pass_giris'])):
        $dbPassword = '$2y$10$rlbuUoiOvAOk5NwFfE8Ai.R2PNhsGfvxB39OAd5xMNPNi/00sts3G'; // 123 şifre

        if(password_verify($_POST['pass_giris'], $dbPassword)){
            echo 'GG';
        }else{
            echo 'not GG';
        }

    endif;
    
    
?>

<form action="" method="POST">
    SIGN IN <br>
    <input type="password" name='pass'>
    <button>Send</button>
</form>


<form action="" method="POST">
    LOGIN <br>
    <input type="password" name='pass_giris'>
    <button>Send</button>
</form>