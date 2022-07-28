<?php

include('../database/functions.php');
$id = $_POST['id'];
$phone = $_POST['phone'];
$fullname = $_POST['fullname'];
$email= $_POST['email'];
$items= $_POST[ 'items'];
$payment= $_POST[ 'payment'];
$order_number= $_POST[ 'order_number'];
$total_price= $_POST[ 'total_price'];
$status = 'Pending';



$data = [
    
    
    'Fullname' => $fullname,
    'Email' => $email,
     'Phone' => $phone,
    'Items' => $items,
    'Payment'=>$payment,
    'Status'=>$status,
    'Order_Number'=>$order_number,
    'Total_price' => $total_price
];
    $confirm_order = insert_cart('orders',$data);

$res =selectAll('cart', ['Buyers_id' => $id]);

foreach($res as $re){
    //delete from cart;
   delete('cart', $re['id']);

    //update quantity left;

    $qty_left = $re['Available_Qty'] - $re['Item_Qty'];
    $idd = $re['Product_id'];

   update('products',$idd, ['Quantity' => $qty_left]);
}

   