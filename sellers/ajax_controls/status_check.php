<?php

include('../database/functions.php');

$id = $_POST['id'];

$res = selectAll('orders', ['id' => $id]);

foreach($res as $re)

$status = $re['Status'];

if($status == 'Pending'){
    $result = update('orders', $id, ['Status' => 'Delivered']);
    if($result){
        echo "<div class='alert alert-success ' style=''>
        Products Delivered successfully
          </div>";
    }
}else{
    $result = update('orders', $id, ['Status' => 'Pending']);
    if($result){
        echo "<div class='alert alert-info ' style=''>
        Order Still Pending
          </div>";
    }
}