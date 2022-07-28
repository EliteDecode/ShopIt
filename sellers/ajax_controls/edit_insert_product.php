<?php


include('../database/functions.php');

$id = $_POST['id'];
$category = $_POST['category'];
$name = $_POST['name'];
$color = $_POST['color'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$brand = $_POST['brand'];
$model = $_POST['model'];
$description = $_POST['description'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

$folder = '../product_images/'  ;

$valid_extensions = array('jpeg', 'jpg', 'png'); // valid extensions

// get uploaded file's extension
$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
// can upload same image using rand function
$final_image = rand(1000,1000000).$image;
// check's valid format
if(!in_array($ext, $valid_extensions)){ 
    echo "<script> $('#hide-fa').hide();</script>";
    echo" <div class='alert alert-danger ' style=''>
   Invalid Image Format
    </div>";
}else{
     echo "<script> $('#hide-fa').hide();</script>";

   
    $_SESSION['success'] = 'Product Updated successfully';
    $path = strtolower($final_image); 
    $folder = $folder . $path;


   
$data = [
    'Name' => $name,
    'Color' => $color,
    'Brand' => $brand,
    'Category' => $category,
    'Descrip' => $description,
    'Model' => $model,
    'Quantity' => $quantity,
    'Price' => $price,
    'Image' => $path
   ];
    
    $results =update('products',$id, $data);

    if ($results) {
        echo" <div class='alert alert-success ' style=''>
   Products Added successfully
     </div>
     
     <script>
     var close_p = document
    .getElementById('close_p')
    .addEventListener('click', function() {
        productNav.classList.remove('blur')
        productTab.style.display = 'none'
        productTable.style.display = 'block'
    })
     </script>";
    
    }
    move_uploaded_file($image_tmp, $folder); 
    
}