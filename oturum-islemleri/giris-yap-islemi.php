Önemli Not: Sınırsız veya zaman ayarlı session örneği yapmak için cookie ve session bir arada kullanılabilir.

öncelikle Cookie var mı yok mu kontrol edilir. Cookie yoksa giriş formuna yönlendirilerek kullanıcı adı şifresi girilmesi talep edilir.

Bilgiler doğruysa giriş yapılır ve gelen değerler cookie olarak tutulur.

Bu sayede Cookiemiz aktif olmuş olur.

Cookie aktif olduğu için sistem if else kısmında elseye bakar ve burada Sessionlara Cookielerin verilerini tanımlarsak sürekli sessionlar güncellenmiş ve oturumda kullanıcı kalmış olur.

<?php

session_start();
ob_start();

$uye = [
    'username' => 'admin',
    'password' => '123'
];

function TruePost($Post){
    if(isset($_POST[$Post])){
        return $_POST[$Post];
    }
}

function Security($Value){
    if(is_array($Value)){
        return array_map('Security', $Value);
    }else{
        return strip_tags(trim(strtolower($Value)));
    }
}

if(isset($_POST)) $_POST = array_map('Security', $_POST);

if(isset($_SESSION['username'])){
    echo $_SESSION['username'];
}else{
    if(TruePost("ck_token")){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username != $uye['username']){
            $error = 'Username Find and my data base is empty.';
        }elseif($password != $uye['password']){
            $error = 'Password Find! My data base is empty';
        }else{
            $_SESSION['username'] = $uye['username'];
        }
    }
}

if(isset($_GET['exits'])){
    session_destroy();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($error)): ?>
        <div style="background:red; color:#FFF; padding:5px; margin-bottom:5px">
            <strong><?php echo $error; ?></strong>
        </div>
    <?php endif; ?>
    <form action="" method="POST">
        <input required type="text" name="username" placeholder="Username"> <br><br>
        <input required type="password" name="password" placeholder="Password"> <br><br>
        <input type="hidden" name="ck_token" value='<?php echo rand(30000000000,50000000000000000); ?>'>
        <button type="submit">Sign In</button>
    </form>

    <?php if(isset($_SESSION['username'])){ ?>
        <a href="?exits=true">Exit</a>
    <?php } ?>
    
</body>
</html>