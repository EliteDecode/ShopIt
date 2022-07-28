<?php

include('../database/functions.php');
$p_id = $_POST['item_id'];

$item = selectOne('history', ['Product_id' => $p_id]);
$id = $item['id'];



$res = delete('history', $id);



if($res){
    echo "Product Removed From History Successfully";
}