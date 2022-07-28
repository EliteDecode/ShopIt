<?php  session_start();
if (!isset($_SESSION['users'])) {
    header('location:login.php');
 } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP IT</title>
</head>
<?php include('includes/header.php');
  include('css/orders_style.php');
  include('database/functions.php');
?>


<?php 
include('includes/components/navigation.php');


$ad = $_SESSION['users'];

$orders = selectAll('orders', ['Email' => $ad]);
 ?>



<!--Navigation section-->
<section class="orders">
    <div class="container">

        <a href="customerinfo.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">YOUR ORDERS</h6>
        </a>




        <?php if($orders): ?>
        <div class="row mt-3 dark-green ">
            <div class="col-12" style="overflow-x:scroll;">
                <table class="table table-bordered ">
                    <thead>
                        <tr>
                            <th scope="col" class="font-14">Order No</th>
                            <th scope="col" class="font-14">Items(qty)</th>
                            <th scope="col" class="font-14">Total Price</th>
                            <th scope="col" class="font-14">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($orders as $order):?>
                        <tr>
                            <td class="bold">#<?php echo $order['Order_Number'] ?></td>
                            <td class="bold"><?php echo $order['Items'] ?></td>
                            <td class="bold">$<?php echo Number_format($order['Total_price']) ?></td>
                            <td class="bold"><?php echo $order['Status'] ?></td>
                        </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
        <?php else: ?>


        <div class="orders_body text-center">
            <div class="container">
                <i class="fa fa-smile-o"></i>

                <h6>No Orders Found with Miles. <br> please visit shop</h6>
            </div>
            <a href="bestdealphp"><button class="btn btn-shop bold">CONTINUE SHOPPING</button></a>
        </div>

        <?php endif; ?>
    </div>
</section>

<!--End-->






<!-- footer -->
<?php include('includes/footer.php')?>