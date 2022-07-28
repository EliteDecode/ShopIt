<?php

include('../database/functions.php');
$p_id = $_POST['item_id'];

$item = selectOne('cart', ['Product_id' => $p_id]);
$id = $item['id'];



$res = delete('cart', $id);



if($res){
    echo "Product Removed From Cart Successfully";
}