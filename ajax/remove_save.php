<?php

include('../database/functions.php');
$p_id = $_POST['item_id'];

$item = selectOne('saved', ['Product_id' => $p_id]);
$id = $item['id'];



$res = delete('saved', $id);

if($res){
    echo "Product Removed From Saved Tab Successfully";
}

   