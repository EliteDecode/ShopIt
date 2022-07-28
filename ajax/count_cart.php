<?php

session_start();
include('../database/functions.php');



if (isset($_SESSION['users'])) {
    $email = $_SESSION['users'];
    $re = selectOne('users', ['Email' => $email]);
    $id = $re['id'];
    if (isset($_GET['cartItem']) && isset($_GET['cartItem']) == 'cart_item') {
        $result = selectAll('cart', ['Buyers_id' => $id]);
        $count = count($result);
        echo $count;
    }
    
}else{
    $count = 0;

    echo $count;
}