<?php

include('../database/functions.php');

$id = $_POST['product_id'];

$res =selectAll('products', ['id' => $id]);

foreach($res as $re)

$auction = $re['Auction'];

if($auction == 'Yes'){
    $result =update('products', $id, ['Auction' => 'No']);
    if($result){
        echo "<div class='alert alert-danger ' style=''>
        Products Privated successfully
          </div>";
    }
}else{
    $result =update('products', $id, ['Auction' => 'Yes']);
    if($result){
        echo "<div class='alert alert-success ' style=''>
        Products Auctioned successfully
          </div>";
    }
}