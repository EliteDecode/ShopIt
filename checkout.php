<?php  session_start(); 
if (!isset($_SESSION['users'])) {
    header('location:login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Ojahi</title>

    <!--Bootstrap Link-->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!--index styling link-->


    <!--Fonts Linking-->
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
</head>

<?php include('css/checkout_style.php');
include('database/functions.php'); ?>

<body>
    <!--Navigation section-->
    <section class=" border bg_dark-green text-center py-4">
        <a href="index.php">
            <h6 class="white bold font-16">CHECKOUT SHOPIT</h6>
        </a>
    </section>

    <!--End-->

    <div class="container mt-3">
        <?php
   $email = $_SESSION['users'];
    $result = selectOne('users', ['Email'=> $email]);

    $order_number = rand(1000000000,9999999999);
  
    ?>


        <input type="hidden" value='<?php echo $result['Fullname']  ?>' id="fullname">
        <input type="hidden" value='<?php echo $result['Phone']  ?>' id="phone">
        <input type="hidden" value='<?php echo $result['Email']  ?>' id="email">
        <input type="hidden" value='<?php echo $result['id']  ?>' id="id">
        <input type="hidden" value="<?php echo $order_number?>" id="order_number">
    </div>


    <!--Checkout session-->
    <div class="checkout">
        <div class="container">

            <div class="checkout_header">
                <a href="finalCart.php"
                    style="color:var(--green); margin-right: 3%; font-size: 20px; margin-top: -1.3%;">
                    <i class="fa fa-arrow-left"></i></a>
                <h4>CHECKOUT</h4> <i class="fa fa-shield"></i>
            </div>
            <div class="delivery_detail my-5">
                <h4 class="bold dark-green text-uppercase font-20">Delivery details</h4>
                <h5>Swift logistic company</h5>
                <p>4, Uwaifo Street off Nova Road, Ugbowo, Benin city </br> 07030548630</p>
            </div>
            <!-- <div class="row">
                <div class="col-6"></div>
                <div class="col-6">
                    <a href="" class="text-center ojahi_button_link">
                        <div class="ojahi_btn" id="change_company">change company</div>
                    </a>
                </div>
            </div> -->
            <div class="product_detail my-5">
                <h4 class="bold dark-green text-uppercase font-20">product details</h4>
                <p class="bold"> <?php
                
                $items = concat($result['id'] );
                     echo $items;
                     ?></p>
                <input type="hidden" value="<?php echo $items ?>" id="items">
            </div>

            <?php 
                $ad = $_SESSION['users'];
                $response = selectOne('users', ['Email' => $ad]);
              $id = $response['id'];
              $grandtotal = 0;
                    $res= selectAll('cart', ['Buyers_id' => $id]);
                    foreach($res as $re){
                        $grandtotal += $re['Total_price']; 
                    }
                 
             ?>
            <input type="hidden" value='<?php echo $grandtotal ; ?>' id="total_price">
            <div class="row">

                <div class="col-6">

                    <button class="btn btn-shop-alt bold" id='modify'>Modify Cart</button>

                </div>
            </div>

            <div class="paymen_method my-5">
                <h5 class="bold dark-green text-uppercase">payment method</h5>
                <form action="">
                    <select name="" id="payment" class="form-control bold">
                        <option value="Master Card Payment" disabled>Master Card Payment</option>
                        <option value="Cash On Delivery">Cash On Delivery</option>
                    </select>

                </form>

                <button class="btn btn-shop bold w-100 mt-4" onclick='confirmOrder()' id="">CONFIRM ORDER</button>


            </div>
        </div>
        <!--end-->


        <!--jquery linking-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <!--Bootsrtap js link-->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/index.js"></script>
        <script>
        //Checkout session.



        let modifyCart = document.getElementById('modify');

        modifyCart.addEventListener('click', e => {
            if (confirm("You Are About To Modify Your Orders")) {
                window.location.href = 'finalCart.php'
            } else {
                window.location.href = 'checkout.php'
            }
        });


        function confirmOrder() {

            if (confirm("You Are About To Confirm Your Orders")) {



                var fullname = $('#fullname').val();
                var phone = $('#phone').val();
                var email = $('#email').val();
                var items = $('#items').val();
                var payment = $('#payment').val();
                var order_number = $('#order_number').val();
                var id = $('#id').val();
                var total_price = $('#total_price').val();


                $.ajax({
                    url: "ajax/confirm_order.php",
                    method: "post",
                    data: {
                        fullname: fullname,
                        email: email,
                        phone: phone,
                        payment: payment,
                        order_number: order_number,
                        id: id,
                        items: items,
                        total_price: total_price
                    },
                    success: function(data) {
                        console.log(data)
                        window.location.href = 'finalCheckout.php?order=<?php echo $order_number?>'
                        count_cart();
                    }
                });
            } else {
                window.location.href = 'checkout.php'
            }


        }
        </script>

</body>