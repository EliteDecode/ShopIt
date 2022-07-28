<?php

include('../database/functions.php');

$id = $_POST['product_id'];

$result = delete('products', $id);

if($result){
    echo "<div class='alert alert-danger ' style=''>
    Products Deleted successfully
      </div>";
}