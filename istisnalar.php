<?php

// try - catch
// throw new exception
// exception extend

if(!isset($_GET['id'])){
    echo 'iD not working';
}elseif(empty($_GET['id'])){
    echo 'iD empty';
}elseif(!is_numeric($_GET['id'])){
    echo 'iD not numeric';
}elseif($_GET['id'] != 10){
    echo 'iD not 10';
}else{
    echo $_GET['id'];
}

