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
    <style>
    .customer_info {
        margin-top: 10% !important;
    }

    @media(max-width:523px) and (min-width:0px) {
        .customer_info {
            margin-top: 27% !important;
        }
    }

    @media(max-width:765px) and (min-width:524px) {
        .customer_info {
            margin-top: 12%;
        }
    }

    @media(max-width:990px) and (min-width:765px) {
        .customer_info {
            margin-top: 10%;
        }
    }
    </style>
</head>
<?php 
  include('includes/header.php');
  include('css/customerInfo_style.php');
  include('includes/components/navigation.php');
  include('database/functions.php');
?>


<section class="customer_info">
    <div class="container border-bottom pb-2">
        <?php  
            $email = $_SESSION['users'];
              $result = selectOne('users', ['Email' => $email])
            ?>
        <h5 class="dark-green bold font-16"><?php echo $result['Fullname'] ?></h5>
        <a href="mailto:milefemi@gmmail.com" class="dark-green font-14 light"><?php echo $result['Email'] ?></a>
    </div>

    <div class="customer_accoun">
        <div class="container">

            <div class="container">
                <h5 class="dark-green bold font-16 mt-3 mb-3">MY ACCOUNT</h5>

                <ul>
                    <li class="mb-4"><a href="orders.php" class="d-flex justify-content-between">
                            <div> <i class="fa fa-clipboard bold dark-green mr-2"></i><span
                                    class="green bold font-16">My Orders</span> </div> <i
                                class="fa fa-angle-right bold dark-green font-20"></i>
                        </a>
                    </li>


                    <li class="mb-4"><a class="d-flex justify-content-between" href="savedItems.php">
                            <div><i class="fa fa-heart-o bold dark-green mr-2"></i><span
                                    class="green bold font-16">Saved Items</span></div><i
                                class="fa fa-angle-right bold dark-green font-20"></i>
                        </a>
                    </li>

                    <!-- <li class="mb-4"><a class="d-flex justify-content-between" href="savedItems.php">
                            <div><i class="fa fa-save bold dark-green mr-2"></i><span class="green bold font-16">Saved
                                    Items</span></div><i class="fa fa-angle-right bold dark-green font-20"></i>
                        </a>
                    </li> -->

                    <!-- <li class="mb-4"><a class="d-flex justify-content-between" href="reviews.php">
                            <div><i class="fa fa-comments-o bold dark-green mr-2"></i><span
                                    class="green bold font-16">Reviews</span></div><i
                                class="fa fa-angle-right bold dark-green font-20"></i>
                        </a>
                    </li> -->

                    <li class="mb-4"><a class="d-flex justify-content-between" href="history.php">
                            <div><i class="fa fa-history bold dark-green mr-2"></i><span
                                    class="green bold font-16">History</span></div><i
                                class="fa fa-angle-right bold dark-green font-20"></i>
                        </a></li>

                </ul>

                <h5 class="dark-green bold font-16 mt-3 mb-3">MY ACCOUNT SETTINGS</h5>

                <ul>
                    <li class="mb-4"><a class="d-flex justify-content-between" href="MyDetails.php">
                            <div><i class="fa fa-info-circle bold dark-green mr-2"></i><span
                                    class="green bold font-16">My Details</span></div> <i
                                class="fa fa-angle-right bold dark-green font-20"></i>
                        </a></li>


                    <li class="mb-4"><a class="d-flex justify-content-between" href="password.php">
                            <div><i class="fa fa-lock bold dark-green mr-2"></i><span
                                    class="green bold font-16">Password &
                                    Login</span></div><i class="fa fa-angle-right bold dark-green font-20"></i>
                        </a></li>

                    <!-- <li class="mb-4"><a class="d-flex justify-content-between" href="logistics.php">
                            <div><i class="fa fa-truck bold dark-green mr-2"></i><span
                                    class="green bold font-16">Logistic
                                    Station</span></div><i class="fa fa-angle-right bold dark-green font-20"></i>
                        </a></li> -->

                </ul>
            </div>




            <!-- 
            <div class="border-bottom pb-2">
                <div class="container">
                    <a href="topstores.php" class="d-flex justify-content-between">
                        <h5 class="dark-green bold font-16">MY STORE</h5>
                        <i class="fa fa-angle-right bold dark-green font-20"></i>
                    </a>
                </div>
            </div> -->


            <div class="text-center">
                <div class="mt-3 mb-3">
                    <a href="logout.php"><button class="btn btn-shop-alt bold">LOG OUT</button></a>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- footer -->
<?php include('includes/footer.php')?>