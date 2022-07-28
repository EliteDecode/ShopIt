<?php

include('../database/functions.php');

$item_id = $_POST['item_id'];
$sellers_id = $_POST['sellers_id'];
$item_price= $_POST['item_price'];
$item_qty= $_POST[ 'item_qty'];
$total_price= $_POST[ 'total_price'];


$data = [
    'Item_price' => $item_price,
    'Item_Qty' => $item_qty,
    'Total_price' => $total_price,
    
];
    $add_cart = update('cart', $item_id, $data);

    if ($add_cart) {
        echo  "
        <script>
        function hide(){
            var msg = document.getElementById('mssg').style.display='none';
        }
        setTimeout('hide()', 5000)
        </script>
        <div class='alert alert-success alert-dismissible'>
       
        <strong class='text-center'>Item Updated Successfully</strong> 
      </div>";
    }