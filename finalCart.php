<!-- Header -->
<?php
session_start();
if (!isset($_SESSION['users'])) {
    header('location:login.php');
 }
include('includes/header.php')?>

<?php

include('database/functions.php');
// Navigation
include('includes/components/navigation.php');

?>
<style>
.heart {
    color: #c8d2d2d6;
}
</style>



<!--Cart selected information-->
<section class="item_selected py-3 ">
    <div class="container">
        <a href="products.php?tab=New_Arrivals" class="d-flex border-bottom"><i
                class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">CART</h6>
        </a>
        <?php 

//session is email 
//getting the id of this user and sending it to cart as buyers_id
$ad = $_SESSION['users'];
$response = selectOne('users', ['Email' => $ad]);
$id= $response['id'];
$grandtotal = 0;

$items = selectAll('cart', ['Buyers_id' => $id]);

?>

        <?php if($items): ?>

        <div class="items py-4">
            <?php foreach($items as $item): ?>

            <div class="item_detail border py-3 mb-4">
                <div class="container">
                    <div class="row row_resize">

                        <input type="hidden" value="<?php echo $item['Name'] ?>" id="item_name">
                        <input type="hidden" value="<?php echo $item['Model'] ?>" id="item_model">
                        <input type="hidden" value="<?php echo $item['Brand'] ?>" id="item_brand">
                        <input type="hidden" value="<?php echo $item['Category'] ?>" id="item_category">
                        <input type="hidden" value="<?php echo $item['Image'] ?>" id="item_image">
                        <input type="hidden" value="<?php echo $item['Item_price'] ?>" id="item_price">
                        <input type="hidden" value="<?php echo $response['id'] ?>" id="buyers_id">
                        <textarea hidden value="" id="item_descrip"> <?php echo $item['Descrip'] ?> </textarea>

                        <div class="col-5">
                            <img src="sellers/product_images/<?php echo $item['Image'] ?>" alt=""
                                class="img-fluid w-100">
                        </div>
                        <div class="col-7 dark ">
                            <h6 class="font-12 text-capitalize bold">Name: <span
                                    class="text-Capitalize"><?php echo $item['Name'] ?></span></h6>
                            <h6 class="font-12 text-capitalize bold">Category: <span
                                    class="text-Capitalize"><?php echo $item['Category'] ?></span>
                            </h6>
                            <h6 class="font-12 text-capitalize bold">Model: <span
                                    class="text-Capitalize"><?php echo $item['Model'] ?></span>
                            </h6>
                            <h6 class="font-12 text-capitalize bold">Brand: <span
                                    class="text-Capitalize"><?php echo $item['Brand'] ?></span>
                            </h6>
                            <h6 class="font-12 text-capitalize bold">Price: <span
                                    class="text-Capitalize">$<?php echo number_format($item['Item_price']) ?></span>
                            </h6>

                            <h6 class="font-12 text-capitalize bold">Orderd Quantity: <span
                                    class="text-Capitalize"><?php echo $item['Item_Qty'] ?></span>

                            </h6>
                            <a href="edit_cart.php?id=<?php echo $item['Product_id'] ?>" class="green">
                                <div class="qty my-4 border py-1 px-1 d-flex flex-row justify-content-between">
                                    <div class="  bg_dark-green plus-sign" disabled><i
                                            class="fa fa-plus py-1 px-2 white " id="plus-sign"></i>
                                    </div>
                                    <div class="input">
                                        <input type="text" disabled value='<?php echo $item['Item_Qty'] ?>'
                                            class="w-100 text-center bold font-16" id="cart_count" style='border:none'>
                                    </div>
                                    <div class="  bg_dark-green minus-sign" disabled><i
                                            class="fa fa-minus py-1 px-2 white" id="minus-sign"></i>
                                    </div>
                                </div>
                            </a>




                            <h6 class="font-12 text-capitalize bold">Total Price: <span
                                    class="text-Capitalize">$<?php echo number_format($item['Total_price']) ?></span>
                            </h6>
                            <div class="controls">
                                <?php $save = selectOne('saved', ['Product_id' => $item['Product_id']]);
                        if($save):
                         ?>
                                <button class="btn " id="<?php echo $item['Product_id'] ?>" onclick="save_item(this)"><i
                                        class="fa fa-heart green font-22 heart" id="save_item"></i></button>
                                <?php else: ?>
                                <button class="btn " id="<?php echo $item['Product_id'] ?>" onclick="save_item(this)"><i
                                        class="fa fa-heart heart font-22 heart" id="save_item"></i></button>
                                <?php endif; ?>
                                <button class="btn " id="<?php echo $item['Product_id'] ?>"
                                    onclick="delete_item(this)"><i class="fa fa-trash  font-22 heart" id="save_item"
                                        style="color:red;"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php endforeach; ?>

        </div>


    </div>
    <div class="item_details_footr">
        <div class="container">
            <h4 class='bold font-20 dark-green'>TOTAL PURCHASE &nbsp: <span>$<?php 
                    $res= selectAll('cart', ['Buyers_id' => $id]);
                    foreach($res as $re){
                        $grandtotal += $re['Total_price']; 
                    }
                    echo number_format($grandtotal) ;
                    
                    ?></span></h4>
        </div>
    </div>
    </div>
</section>
<!--end-->





<!--Coupon section-->
<section class="">
    <div class="container">
        <form action="">
            <h5 class="font-16 bold green">SHIPPING</h5>
            <p class="font-14 bold green d-none">Select a Logistic Station</p>

            <div class=" mb-3 " style="display:none;">

                <div class="input-group pr-2">
                    <select name="" id="" class='p-2 light dark-green w-100'
                        style='border:3px solid var(--green);border-radius:10px'>
                        <option value="" selected disabled>Edo</option>
                        <option value="">YU</option>
                        <option value="">Delta</option>
                    </select>
                </div>

                <div class="input-group pl-2">
                    <select name="" id="" class='p-2 light dark-green w-100'
                        style='border:3px solid var(--green);border-radius:10px'>
                        <option value="" selected disabled>City</option>
                        <option value="">YU</option>
                        <option value="">Delta</option>
                    </select>
                </div>
            </div>
        </form>

        <h5 class="bold font-16 d-none">Stations near you</h5>

        <div class="">
            <p class="bold">Swift Logistic Company</p>
            <p class="address_info">4, Uwaifo Street off Nova Road, Ugbowo, Benin City</p>

            <h6 class='bold dark-green' style="display: flex;">Contact Info:<p class="contact_info">07030548630</p>
            </h6>

            <h6 class='bold dark-green' style="display: flex;">Operating Hours:<p class="contact_info">Mon-Sat, 9am-6pm
                </p>
            </h6>



            <h6 class='bold dark-green' style="display: flex;">Delivery Fee:<p class="contact_info"
                    style="margin-top:0%;"><button class="btn bold" id="fee" value="$5.000">$5,000</button>
                </p>
            </h6>
        </div>

        <!--Buttons-->
        <div class="row">
            <div class="col-6">
                <a href="bestdeal.php" class=" w-100">
                    <div class="border pt-2 pb-1 bg_green white " id='add_to_cart'>
                        <h6 class="bold font-10 text-center">CONTINUE SHOPPING</h6>
                    </div>
                </a>
            </div>
            <div class="col-6">
                <a href="checkout.php" class=" w-100">
                    <div class="border pt-2 pb-1 bg_green white " id='add_to_cart'>
                        <h6 class="bold font-10 text-center">PROCEED TO CHECKOUT</h6>
                    </div>
                </a>
            </div>

            <div class="col-12  p-0 mt-3">
                <h5 class="total bold font-20 dark-green">TOTAL FEE: $<?php 

                   $total = $grandtotal + 5000;
                   echo number_format($total);
                
                ?></h5>
            </div>
        </div>

        <?php else :?>

        <div class="orders_body text-center">
            <div class="container">
                <i class="fa fa-smile-o my-2 dark-green " style="font-size:100px;"></i>

                <h6 class="bold dark-green my-4">No Item Currently In Cart. <br> please visit shop</h6>
            </div>
            <a href="products.php?tab=Shoes"><button class="btn btn-shop bold">CONTINUE SHOPPING</button></a>
        </div>

        <?php endif; ?>

        <!--end-->
    </div>
</section>
<!--end-->
<?php //  Best Selling Products
include('includes/components/best_selling_products.php'); ?>
<!--section Best selling in games-->



<?php  include('includes/footer.php') ?>



<script>
function save_item(e) {

    var item_id = e.id;
    var buyers_id = $('#buyers_id').val();
    var item_price = $('#item_price').val();
    var item_image = $('#item_image').val();
    var item_name = $('#item_name').val();
    var item_brand = $('#item_brand').val();
    var item_model = $('#item_model').val();
    var item_descrip = $('#item_descrip').val();
    var item_category = $('#item_category').val();

    $.ajax({
        url: "ajax/save_item.php",
        method: "post",
        data: {
            item_id: item_id,
            buyers_id: buyers_id,
            item_price: item_price,
            item_image: item_image,
            item_name: item_name,
            item_descrip: item_descrip,
            item_model: item_model,
            item_brand: item_brand,
            item_category: item_category,

        },
        success: function(data) {
            alert(data);
            console.log(data);
            window.scrollTo(0, 0)
            window.location.href = 'finalCart.php'
            count_cart();
        }
    });
}

function delete_item(e) {
    if (confirm("You Are About To Remove Product From Cart")) {
        var item_id = e.id;
        $.ajax({
            url: "ajax/delete_item.php",
            method: "post",
            data: {
                item_id: item_id,
            },
            success: function(data) {
                alert(data);
                console.log(data);
                window.scrollTo(0, 0)
                window.location.href = 'finalCart.php'
                count_cart();
            }
        });
    }
}
</script>