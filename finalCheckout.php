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

    <?php 
    if (isset($_GET['order'])) {
       $num = $_GET['order'];
    }
    
    $order =selectOne('orders', ['Order_Number' => $num]);
    
   ?>

    <div class="container mt-0">
        <div class="row">
            <div class="col-12 border mt-0 p-0">
                <div class="text-center alert alert-success">
                    <h1 class="font-20 bold ">ORDER PLACED SUCCESSFULLY</h1>
                    <h6> <span class="bold"><?php echo $order['Fullname']?></span> Your Order
                        is on its way with order
                        number <span class="bold">#<?php echo $order['Order_Number'] ?></span> </h6>

                </div>
                <table class="table  table-bordered table-hover">
                    <thead>
                        <tr>
                            <td scope="col">Items(Quantity)</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td colspan="3" class="bold"> <?php echo $order['Items'] ?></td>

                        </tr>

                        <tr>
                            <td colspan='3'>Total Price: <span
                                    class="bold">$<?php echo number_format($order['Total_price']) ?></span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Payment Method: <span class="bold">Cash On Delivery</span> </td>
                        </tr>
                        <tr>
                            <td colspan="3">Pick Up Location: <span class="bold">Swift Logistic Company (4, Uwaifo
                                    Street off Nova Road,
                                    Ugbowo, Benin
                                    City)</span>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">Contact Info: <span class="bold">07030548630</span> </td>
                        </tr>
                        <tr>
                            <td colspan="3">Operating Hours: <span class="bold"> Mon-Sat, 9am-6pm</span> </td>
                        </tr>
                    </tbody>
                </table>


                <div class="btns text-center mb-2">
                    <a href=""><button class="btn btn-shop-alt text-uppercase bold font-16">Download Checkout
                            Slip</button></a>
                </div>
            </div>

        </div>
    </div>






    <!--jquery linking-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!--Bootsrtap js link-->
    <script src="js/bootstrap.min.js"></script>

    <script src="js/index.js"></script>


</body>