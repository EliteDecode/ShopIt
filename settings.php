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

<body>

    <?php 
include('includes/components/navigation.php');
 ?>




    <section class="orders">
        <div class="container">

            <a href="customerinfo.php" class="d-flex border-bottom"><i
                    class="fa fa-arrow-left font-20 dark-green mr-2"></i>
                <h6 class="bold dark-green font-16 " style="padding-top:.3%;">SETTINGS</h6>
            </a>
        </div>

        <div class="setting_form">
            <div class="container">
                <form action="">
                    <div class="radio">
                        <input type="radio"><span>English</span>
                    </div>
                    <div class="radio">
                        <input type="radio"><span>Hausa</span>
                    </div>
                    <div class="radio">
                        <input type="radio"><span>Igbo</span>
                    </div>
                    <div class="radio">
                        <input type="radio"><span>Yoruba</span>
                    </div>
                </form>
                <button class="btn btn-shop-alt bold mt-3 w-100">UPDATE</button>
            </div>

        </div>






        <!-- footer -->
        <?php include('includes/footer.php')?>