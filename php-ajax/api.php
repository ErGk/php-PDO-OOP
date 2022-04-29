<?php
    require 'db.php';

    $type = $_POST['type'];

    $response = [];

    switch ($type) {
        case 'add-new-pop-up':
            
            ob_start();
            require 'popup.php';
            $response['html'] = ob_get_clean();

            break;
    }

    echo json_encode($response);
