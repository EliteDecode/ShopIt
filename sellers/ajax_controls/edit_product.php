<?php

include ('../database/functions.php');

$id = $_POST['product_id'];
$result =selectAll('products', ['id' => $id]);

foreach($result as $key => $product){
    $category = $product['Category'];
    $name = $product['Name'];
    $color = $product['Color'];
    $model = $product['Model'];
    $description = $product['Descrip'];
    $quantity = $product['Quantity'];
    $price = $product['Price'];
    $brand = $product['Brand'];
    $image = $product['Image'];
    $id = $product['id'];

}


echo " 


 <div class='close_product  ' id='' onclick='close_form()'>
                <i class='fa fa-close white py-1 px-2 bg_dark-green' style='float: right; cursor:pointer'></i>
            </div>
<form id='edit_form' enctype='multipart/form-data' onsubmit='return false'>

<input type='text' value='$id' name='id' hidden/>
<!--product information-->

<div class='product_information' id='edit_productInfo'>
    <div class=''>
        <div class='title w-100 '>
            <h6 class='bold font-16 dark-green' style='text-align:left ;'>Category</h6>

            <select name='category' id='edit_category' class='form-control dark-green light'
                value='$category'>
                <option value=''></option>
                <option value='Accessories'>Accessories</option>
                <option value='Clothings'>Clothings</option>
                <option value='Bags'>Bags</option>
                <option value='Shoes'>Shoes</option>
                <option value='Phones'>Phones</option>
                <option value='Jewelries'>Jewelries</option>
            </select>
            <div class='invalid-feedback edit_error-category'>
                Please Select a category
            </div>
        </div>
    </div>
    <div class='product_info_details'>
    </div>
    <div class='product_info_details'>
        <div class='row'>
            <div class='title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                <h5 class='bold'>Name</h5>
            </div>
            <div class='details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12'>
                <input type='text' id='edit_name' name='name' class='form-control' placeholder='Hint text*'
                    value='$name' />
                <div class='invalid-feedback edit_error-name'>
                    Please Input The Name of Product
                </div>
                <p>
                    Name of the product. For a better listing quality, the
                    name should consist the actual product name, if
                    available colour, edition, speciality.
                </p>
                <p>
                    Example: Wide Angle Camera 10mp-Black, Galaxy Tab. A
                    leather flip case-Red. DO NOT ADD BRAND NAME HERE
                </p>
            </div>
        </div>
    </div>

    <div class='product_info_details'>
        <div class='row'>
            <div class='title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                <h5 class='bold'>Main color</h5>
            </div>
            <div class='details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12'>
                <input type='text' id='edit_color' name='color' class='form-control'
                    placeholder='Main color*' value='$color' />
                <div class='invalid-feedback edit_error-color'>
                    Please Input color of product
                </div>
                <p>
                    Main color of a product can also be a certain shade of
                    a color or a brand specific color description.
                </p>
                <p>Example: Royal blue, Red</p>
            </div>
        </div>
    </div>

    <div class='product_info_details'>
        <div class='row'>
            <div class='title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                <h5 class='bold'>Brand</h5>
            </div>
            <div class='details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12'>
                <input type='text' id='edit_brand' name='brand' class='form-control' placeholder='Brand* '
                    value='$brand' />
                <div class='invalid-feedback edit_error-brand'>
                    Please Input Brand of product
                </div>
                <p class='p'>
                    Brand of the product, if brand does not exist, please
                    copy https://cutt.ly/ownhcIV into your browser and
                    fill accordingly.
                </p>
                <p>
                    Example: Apple, Chanel. For unbranded Fashion items,
                    please use 'Fashion'. Other unbranded items please use
                    'Generic'
                </p>
            </div>
        </div>
    </div>

    <div class='product_info_details'>
        <div class='row'>
            <div class='title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                <h5 class='bold'>Model</h5>
            </div>
            <div class='details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12'>
                <input type='text' id='edit_model' name='model' class='form-control' placeholder='Model*'
                    value='$model' />
                <div class='invalid-feedback edit_error-model'>
                    Please Input Model of Product
                </div>
                <p>
                    This field is for for the model description of your
                    product.
                </p>
                <p class='p'>
                    Example: iphone 4s, Samsung galaxy s10 . please copy
                    https://cutt.ly/ownhcIV to your browser for more
                    Information
                </p>
            </div>
        </div>
    </div>

</div>
<!--end product information tab-->

<!--Produc details tab-->
<div class='product_details' id='edit_edit_productDetails'>

    <!--2-->
    <div class='product_specification'>
        <h1>Product Specification</h1>
        <div class='product_info_details'>
            <div class='row'>
                <div class='title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                    <h5 class='bold'>Product Description</h5>
                </div>
                <div class='details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12'>
                    <textarea name='description' id='edit_description' class='form-control  font-12 bold dark-green mob-text' cols='30'
                        rows='6' placeholder='Text Hint*'>$description</textarea>
                    <div class='invalid-feedback edit_error-description'>
                        Please Add Product Description
                    </div>
                    <p class='p'>
                        The produuct description should give the buyer more
                        information about a product to ensure a purchase.
                        paste https://bit.ly/3aazgoU into your browser for
                        more information.
                    </p>
                    <p>
                        Example: JTC Full HD 24'', LED CD TV combines great
                        features and design. It has a diagonal screen size
                        61cm(24inch), with integratd dvd player and an
                        in-built turner. It also recieves sattalite cable,
                        DVB-T and DVB-T2 signals without the need for a
                        reciever.
                    </p>
                </div>
            </div>
        </div>
        <div class='product_info_details'>
            <div class='row'>
                <div class='title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                    <h5 class='bold'>Product Quantity</h5>
                </div>
                <div class='details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12'>
                    <input type='number' id='edit_quantity' name='quantity' class='form-control'
                        placeholder='30' value='$quantity' />
                    <div class='invalid-feedback edit_error-quantity'>
                        Please Add Product Quantity
                    </div>
                    <p class=''>
                        Example: 20 packs, 20 pieces, 20 cartons, 20bags, 60 shoes, 100 toys,
                        14 glasses, 20 packs, 20 pieces, 20 cartons, 20bags, 60 shoes, 100 toys,
                        14 glasses, 20 packs, 20 pieces, 20 cartons, 20bags, 60 shoes, 100 toys,
                        14 glasses etc.
                    </p>
                </div>
            </div>
        </div>



    </div>
</div>


<!--Product details tab end-->

<!--Product pricing tab-->
<div class='product_pricing' id='edit_edit_productPricing'>
    <div class=''>
        <label for='' style='font-size: 12px; opacity: 0.8'>Product pricing</label>
        <input type='number' id='edit_price' name='price' placeholder='Price of product' class='form-control'
            style='font-size: 13px' value='$price' />
        <div class='invalid-feedback edit_error-price'>
            Please Add Price of Product
        </div>
    </div>

</div>

<!--End Product pricing tab-->

<!--Images-->
<div class='image_tab' id='edit_edit_imageTab'>
    <h6 class='p'>
        Images need to be at least 200 * 200 pixels with a maximum
        of 3000* by 3000 pixels
    </h6>
    <div class='upload' style='margin-top: 9%'>
        <h5 style='font-size: 11px; opacity: 0.8'>
            Upload product images here
        </h5>
        <input type='file' id='edit_image' name='image' class='form-control' value='$image' />
        <div class='invalid-feedback edit_error-image'>
            Please Add product Image
        </div>
    </div>

    


    <div class='select_btn' style='margin-top: 5%'>
        <button class='btn btn-shop-alt bold' type='submit' onclick='edit_post()'>  EDIT </button>
    </div>
</div>
<!--end image tab-->
</form>



";