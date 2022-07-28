<?php

include('../database/functions.php');

$item_id = $_POST['item_id'];
$buyers_id = $_POST['buyers_id'];
$item_price= $_POST['item_price'];

$item_image= $_POST[ 'item_image'];
$item_name= $_POST['item_name'];
$item_brand= $_POST[ 'item_brand'];
$item_model= $_POST['item_model'];
$item_descrip= $_POST['item_descrip'];

$item_category= $_POST[ 'item_category'];




$data_verify = [
     'Buyers_id' => $buyers_id,
     'Product_id' => $item_id,
    
];

$data = [
    'Buyers_id' => $buyers_id,
    'Product_id' => $item_id,
    'Item_price' => $item_price,
    
  
    'Name' => $item_name,
    'Model' => $item_model,
    'Brand' => $item_brand,
    'Image' => $item_image,
    'Descrip'=> $item_descrip,
   
    'Category' => $item_category
    
];

$res =selectOne('saved', ['Product_id' => $item_id]);



$saved_before =selectAll('saved', $data_verify);

if ($saved_before) {

    $id = $res['id'];
   delete('saved',$id );
    echo  "
    Item Removed From Saved Tab";
}else{
    $add_cart = insert_cart('saved',$data);

    if ($add_cart) {
        echo "Item Sucessfully Saved For Later";
    }
}