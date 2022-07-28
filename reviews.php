<?php 
session_start();
if (!isset($_SESSION['users'])) {
    header('location:login.php');
 }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP IT</title>
</head>
<?php include('includes/header.php');
  include('css/orders_style.php');
?>


<?php 
include('includes/components/navigation.php');
 ?>


<!--Navigation section-->
<section class="orders">
    <div class="container">

        <a href="customerinfo.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">YOUR REVIEWS</h6>
        </a>
    </div>




    <div class="orders_body text-center">
        <div class="container">
            <i class="fa fa-comments-o"></i>

            <h6>After getting your product delivered, you will be able to rate and review them
                <br>
                <br>
                Your feedback is highly valuable
            </h6>
            <a href="bestdeal.php" class="w-100"><button class="btn btn-shop-alt bold">CONTINUE SHOPPING</button></a>
        </div>
    </div>

    <div class="mt-3">
        <div class="container">
            <div class="border p-3 mt-1 mb-1">
                <div class=""><i class="fa fa-user p-3 bg_dark-green rounded-circle white"></i></div>
                <div class="comment">
                    <h4 class="bold font-16 dark-green">Great Delivery</h4>
                    <p class="font-14 light dark">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                </div>
            </div>
            <div class="border p-3 mt-1 mb-1">
                <div class=""><i class="fa fa-user p-3 bg_dark-green rounded-circle white"></i></div>
                <div class="comment">
                    <h4 class="bold font-16 dark-green">Great Delivery</h4>
                    <p class="font-14 light dark">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>

                </div>
            </div>
        </div>
    </div>

</section>

<!--End-->



<!-- footer -->
<?php include('includes/footer.php')?>