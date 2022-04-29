<?php
    session_start();
    $_SESSION['user'] = [
        'username' => 'username',
        'password' => '123'
    ];

    setcookie('UserInfo["name"]', "Jhon Doe", time() + 86400 * 30);
    setcookie('UserInfo["age"]', 36, time() + 86400 * 30);

    echo $_SESSION['user']['username']. "<br>";
    echo $_SESSION['user']['password']. "<br>";

    // Cookie olarak gösterimini anlatmamış foreach olabilir


    print_r($_SESSION);
    echo "<hr>";
    print_r($_COOKIE);
?>