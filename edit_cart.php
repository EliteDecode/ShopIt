<!-- Header -->
<?php include('includes/header.php')?>

<?php
// Navigation
include('includes/components/navigation.php');
include('database/functions.php');


global $items;
if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $items =selectOne('cart', ['Product_id' => $id]);
}



//session is email 
//getting the id of this user and sending it to cart as buyers_id
$ad = $_SESSION['users'];
$response =selectOne('users', ['Email' => $ad]);
?>


<style>
.heart {
    color: #c8d2d2d6;
}
</style>


<!--cart detail-->
<div class="cart_product">
    <div class="container">

        <a href="finalcart.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">CART</h6>
        </a>
        <div id="msg" class="mt-2" style="z-index:111"></div>

        <div class="row position-relative">


            <div class="col-6 img">
                <img src="sellers/product_images/<?php echo $items['Image']  ?>" alt="" class="w-100" style=''>
            </div>
            <div class="col-6 mb-5 py-3">
                <h5 class=" font-14 bold dark-green mt-2"><?php echo substr($items['Descrip'], 0, 170) ?>.</h5>

                <div class="infos  py-3">
                    <h4 class="font-12 dark light mb-1">NAME: <span
                            class="dark-green bold"><?php echo $items['Name'] ?></span>
                        <input type="hidden" value="<?php echo $items['Name'] ?>" id="item_name">
                        <input type="hidden" value="<?php echo $items['Image'] ?>" id="item_image">
                        <input type="hidden" value="<?php echo $response['id'] ?>" id="buyers_id">
                        <textarea hidden value="" id="item_descrip"> <?php echo $items['Descrip'] ?> </textarea>

                    </h4>
                    <h4 class="font-12 dark light mb-1">CATEGORY: <span
                            class="dark-green bold"><?php echo $items['Category'] ?></span>
                        <input type="hidden" value="<?php echo $items['Category'] ?>" id="item_category">
                    </h4>
                    <h4 class="font-12 dark light mb-1">BRAND: <span
                            class="dark-green bold"><?php echo $items['Brand'] ?></span>
                        <input type="hidden" value="<?php echo $items['Brand'] ?>" id="item_brand">
                    </h4>
                    <h4 class="font-12 dark light mb-1">MODEL: <span
                            class="dark-green bold"><?php echo $items['Model'] ?></span>
                        <input type="hidden" value="<?php echo $items['Model'] ?>" id="item_model">
                    </h4>
                    <h4 class="font-12 dark light mb-1">AVAILABLE QTY: <span
                            class="dark-green bold"><?php echo $items['Available_Qty'] ?></span>
                        <input type="hidden" value="<?php echo $items['Available_Qty'] ?>" id="qty">
                    </h4>
                    <h4 class="font-12 dark light mb-1">ORDERED QTY: <span
                            class="dark-green bold"><?php echo $items['Item_Qty'] ?></span>
                        <input type="hidden" value="<?php echo $items['Item_Qty'] ?>" id="">
                    </h4>
                    <h4 class="font-12 dark light mb-1">PRICE: <span
                            class="dark-green bold">$<?php echo number_format($items['Item_price']) ?></span>
                        <input type="hidden" value="<?php echo $items['Item_price'] ?>" id="item_price">
                    </h4>
                </div>
            </div>
        </div>



        <div class="add_product text-center">
            <div class="qty mt-2 border py-1 px-1 d-flex flex-row justify-content-between">
                <div class="plus-sign"><i class="fa fa-plus py-1 px-2 white bg_dark-green " id="plus-sign"></i>
                </div>
                <div class="input">
                    <input type="text" disabled value='<?php echo $items['Item_Qty'] ?>'
                        class="w-100 text-center bold font-16" id="cart_count" style='border:none'>
                </div>
                <div class="minus-sign"><i class="fa fa-minus py-1 px-2 white bg_dark-green" id="minus-sign"></i>
                </div>
            </div>




            <button class="btn btn-shop mt-3 font-12 bold w-100 p-2" id="<?php echo $items['id'] ?>"
                onclick="edit_cart(this)">UPDATE
                CART</button>



            <div class="text-left mt-2">

                <?php $save =selectOne('saved', ['Product_id' => $items['id']]);
                        if($save):
                    ?>
                <button class="btn " id="<?php echo $items['id'] ?>" onclick="save_item(this)"><i
                        class="fa fa-heart green font-22 heart" id="save_item"></i></button>
                <?php else: ?>
                <button class="btn " id="<?php echo $items['id'] ?>" onclick="save_item(this)"><i
                        class="fa fa-heart heart font-22 heart" id="save_item"></i></button>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <!--Prouct description/ Reviews / Store information-->

    <div class="description_reviews_storeinfo text-center">
        <div class="row">
            <div class="col-4 ">
                <h4 class="active_tab descriptionTab">Product description</h4>
            </div>
            <div class="col-4 reviewTab">
                <h4>Reviews</h4>
            </div>
            <div class="col-4 storeTab">
                <h4>Store information</h4>
            </div>
        </div>

    </div>


    <div class="product_description container">
        <h5>Experience wireless freedom with Sony Bluetooth Headphones MDRXB950BT/B. These sleek, comfortable
            headphones deliver incredible sound quality. The headphones with extra bass provide Bluetooth audio
            streaming with AAC and APT-X support. Electronic bass boost circularity kicks bass into overdrive,
            rounding out each note with powerful sound. The over the head bluetooth headphones are equipped with
            40mm drivers</h5>

        <h1>KEY FEATURES</h1>
        <h5>Bluetooth audio streaming with AAC and APT-X support. Electronic bass boost circularity kicks bass
            into overdrive, rounding out each note with powerful sound. The over the head bluetooth headphones
            are equipped with 40mm drivers</h5>

        <h1>SPECIFICATIONS</h1>
        <h5>SKU: SO521EL103VECNAFAMZ <br>
            Color: black <b></b>
            Model: MDR-XB950BT <br>
            Product Line: Inspire africa storez

        </h5>
    </div>



    <!--reviews-->
    <div class="reviews container">
        <div class="customerReview">
            <h4>Customer Review</h4>
            <div class="product_ratings">
                <i class="fa fa-star ojahi_red"></i>
                <i class="fa fa-star ojahi_red"></i>
                <i class="fa fa-star ojahi_red"></i>
                <i class="fa fa-star ojahi_dark"></i>
                <i class="fa fa-star ojahi_dark"></i>

                <span>4.7 out of 5</span>
            </div>

            <div class="global_rating">
                <h6> 12,567 Global rating</h6>
            </div>

            <div class="customer_rating">
                <ul>
                    <li> <span style="margin-left: 3%; font-size: 15px; margin-top: 1.4%;">5</span></span> <i
                            class="fa fa-star"></i>
                        <progress value="20" max="50"></progress> <span>20%</span>
                    </li>
                    <li> <span style="margin-left: 3%; font-size: 15px; margin-top: 1.4%;">4</span></span> <i
                            class="fa fa-star"></i>
                        <progress value="43" max="50"></progress> <span>43%</span>
                    </li>
                    <li> <span style="margin-left: 3%; font-size: 15px; margin-top: 1.4%;">3</span></span> <i
                            class="fa fa-star"></i>
                        <progress value="25" max="50"></progress> <span>25%</span>
                    </li>
                    <li> <span style="margin-left: 3%; font-size: 15px; margin-top: 1.4%;">2</span></span> <i
                            class="fa fa-star"></i>
                        <progress value="10" max="50"></progress> <span>10%</span>
                    </li>
                    <li> <span style="margin-left: 3%; font-size: 15px; margin-top: 1.4%;">1</span></span> <i
                            class="fa fa-star"></i>
                        <progress value="2" max="50"></progress> <span>2%</span>
                    </li>


                </ul>
            </div>

        </div>


        <div class="product_review container py-2">
            <h4>PRODUCT REVIEWS(3)</h4>
            <div class="row">
                <div class="col-4">
                    <img src="images/exploreCategories/review1.png" alt="">
                </div>
                <div class="col-8">
                    <h6>I like it <br> its okay</h6>
                    <div class="product_ratings">
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_dark"></i>
                        <i class="fa fa-star ojahi_dark"></i>

                        <span>4.7 out of 5</span>
                    </div>
                    <h6 style="margin-top: -9%;">05-11-2020 by Shayo</h6>
                </div>

            </div>

            <div class="verified text-center">
                <i class="fa fa-check"></i>
                <h6>Verified Purchase</h6>
            </div>

            <div class="row">
                <div class="col-4">
                    <img src="images/exploreCategories/review2.png" alt="">
                </div>
                <div class="col-8">
                    <h6>I like it <br> its okay</h6>
                    <div class="product_ratings">
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_dark"></i>
                        <i class="fa fa-star ojahi_dark"></i>

                        <span>4.7 out of 5</span>
                    </div>
                    <h6 style="margin-top: -9%;">05-11-2020 by Shayo</h6>
                </div>

            </div>

            <div class="verified text-center">
                <i class="fa fa-check"></i>
                <h6>Verified Purchase</h6>
            </div>


            <div class="row">
                <div class="col-4">
                    <img src="images/exploreCategories/review3.png" alt="">
                </div>
                <div class="col-8">
                    <h6>I like it <br> its okay</h6>
                    <div class="product_ratings">
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_red"></i>
                        <i class="fa fa-star ojahi_dark"></i>
                        <i class="fa fa-star ojahi_dark"></i>

                        <span>4.7 out of 5</span>
                    </div>
                    <h6 style="margin-top: -9%;">05-11-2020 by Shayo</h6>
                </div>

            </div>

            <div class="verified text-center">
                <i class="fa fa-check"></i>
                <h6>Verified Purchase</h6>
            </div>


        </div>
    </div>



    <div class="storeInfo container">
        <address>
            125 ekehuan road <br>
            benin city, <br>
            edo state. <br>
            nigeria. <br>
            west africa
            <h4>Email: OjahiFirm@gmail.com <br>
                phone: (+234)-901-2671-22</h4>
        </address>



    </div>

</div>
</div>
<!--End-->



<!-- footer -->
<?php include('includes/footer.php')?>



<script>
function edit_cart(e) {


    var item_id = e.id;
    var sellers_id = 1;
    var item_price = $('#item_price').val();
    var item_qty = $('#cart_count').val();
    var total_price = item_price * item_qty;

    $.ajax({
        url: "ajax/edit_cart.php",
        method: "post",
        data: {
            item_id: item_id,
            sellers_id: sellers_id,
            item_price: item_price,
            item_qty: item_qty,
            total_price: total_price
        },
        success: function(data) {
            $("#msg").html(data);
            console.log(data);
            window.scrollTo(0, 0);
        }
    });
}



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
            window.location.href = 'edit_cart.php?id=<?php echo $id ?>'

        }
    });
}
</script>