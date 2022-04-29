<?php

session_start();

    $_SESSION['username'] = 'EGK';
    $_SESSION['pass'] = 'E123G2sd2K3klsd';
    echo print_r($_SESSION);


unset($_SESSION['pass']); // Sadece pass Sessionunu siler. Tekil
session_destroy(); // Sessionları sonlandırır. Yok Eder. Çıkış yap için
?>