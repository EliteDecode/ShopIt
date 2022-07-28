<?php

include('../database/functions.php');

$item_id = $_POST['item_id'];
$buyers_id = $_POST['buyers_id'];
$item_price= $_POST['item_price'];
$item_qty= $_POST[ 'item_qty'];
$item_image= $_POST[ 'item_image'];
$item_name= $_POST['item_name'];
$item_brand= $_POST[ 'item_brand'];
$item_model= $_POST['item_model'];
$item_descrip= $_POST['item_descrip'];
$qty= $_POST['qty'];
$item_category= $_POST[ 'item_category'];
$total_price= $_POST[ 'total_price'];



$data_verify = [
     'Buyers_id' => $buyers_id,
     'Product_id' => $item_id,
    
];

$data = [
    'Buyers_id' => $buyers_id,
    'Product_id' => $item_id,
    'Item_price' => $item_price,
    'Item_Qty' => $item_qty,
    'Total_price' => $total_price,
    'Name' => $item_name,
    'Model' => $item_model,
    'Brand' => $item_brand,
    'Image' => $item_image,
    'Descrip'=> $item_descrip,
    'Available_Qty' => $qty,
    'Category' => $item_category
    
];

$cart_before = selectAll('cart', $data_verify);

if ($cart_before) {
    echo  "
    
    <script>
      function hide(){
          var msg = document.getElementById('mssg').style.display='none';
      }
      setTimeout('hide()', 5000)
      </script>
    
    <div class='alert alert-danger alert-dismissible' id='mssg'>
    <strong class='text-center'>Item Already Existing In cart</strong> 
  </div>";
}else{
    $add_cart = insert_cart('cart',$data);
    $add_history = insert_cart('history',$data);

    if ($add_cart) {
        echo  "
        <script>
        function hide(){
            var msg = document.getElementById('mssg').style.display='none';
        }
        setTimeout('hide()', 5000)
        </script>
        <div class='alert alert-success alert-dismissible'>
       
        <strong class='text-center'>Item Added To Cart</strong> 
      </div>";
    }
}