<!--Navigation section-->
<section class="navigation py-4 position-fixed bg-white" style='z-index:111; width:100%;top:0%'>
    <div class="container d-flex flex-row pt-1" style='justify-content:space-between'>
        <a href="index.php">

            <div class="brand d-flex">
                <h5 class='dark font-22 bold'>Shop<span class='green'>IT</span></h5>
            </div>
        </a>

        <div class="nav_icons_element d-flex flex-row">
            <div class="nav-icons d-flex flex-row px-3 font-22 dark-green">
                <a href="savedItems.php" class="font-20 green bold"> <i class="fa fa-heart px-2 pt-2  "></i></a>
                <a href="search.php" class="font-20 green bold"><i class="fa fa-search px-2 pt-2"></i></a>
                <a href="finalCart.php?id=1" class="font-20 green bold">
                    <div class="cart_icon px-2 position-relative" style='padding-top:3px'>
                        <i class="fa fa-shopping-cart"></i>

                        <?php if(isset($_SESSION['users'])): ?>
                        <span class='position-absolute ' style="font-size:11px"><sup class=" bold "
                                id="cart_item">0</sup></span>
                        <?php else: ?>
                        <?php endif;?>


                    </div>
                </a>

            </div>
            <div class="bars pl-5 d-flex">
                <a href="finalCart.php?id=1" class="font-20 green bold">
                    <div class="cart_icon px-2 position-relative" style='padding-top:3px;display:none' id="cart-mob">
                        <i class="fa fa-shopping-cart"></i>
                        <span class='position-absolute ' style="font-size:11px"><sup class=" bold "
                                id="cart_item_mob">0</sup></span>
                    </div>
                </a>
                <div class="login px-2">
                    <a href="search.php"><button class='btn btn-shop light'><i class="fa fa-search"></i></button></a>
                </div>
                <div class="login pr-2 collapse_bar">
                    <a><button class='btn btn-shop '><i class="fa fa-bars"></i></button></a>
                </div>
            </div>

        </div>
    </div>
    <!--  -->
</section>


<!--Navigation bar-->
<section class="nav_content " style="z-index:1000;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2  py-2 text-center close_btn border-green">
                <i class="fa fa-close"></i>
            </div>
            <div class="col-10 content py-5 bg_white border-green">
                <div class="signin d-flex pt-4">
                    <button class="btn btn-shop rounded-circle bg-white "><i class="fa fa-user  green"></i></button>
                    <h5 class="font-16 mt-2 pl-2 ">Hello, <a href="signUp.php" class='white bold'>Sign
                            in</a>
                    </h5>
                </div>

                <div class="accounts">
                    <div class="container">
                        <div class="account_title d-flex justify-content-between py-2">
                            <h5 class='font-14 bold white'>MY ACCOUNT</h5>
                            <a href="customerInfo.php" class="bold white font-12"
                                style='text-decoration:underline'>view</a>
                        </div>
                        <ul>
                            <li><i class="fa fa-users font-22 dark"></i> <a href="customerInfo.php">My Profile</a></li>

                            <li><img src="images/sidebar/orders.png" alt=""> <a href="orders.php"
                                    class="white">Orders</a></li>

                            <li><img src="images/sidebar/saved items.png" alt=""> <a href="savedItems.php">Saved
                                    items</a></li>

                        </ul>
                    </div>
                </div>


                <div class="explores">
                    <div class="container">
                        <div class="account_title d-flex justify-content-between py-2">
                            <h5 class='font-14 bold white'>EXPLORE</h5>
                            <a href="customerInfo.php" class="bold white font-12"
                                style='text-decoration:underline'>view</a>
                        </div>

                        <ul>
                            <li><img src="images/sidebar/clothings.png" alt=""> <a
                                    href="./products.php?tab=Clothings">Clothings</a></li>

                            <li><img src="images/sidebar/orders.png" alt=""> <a
                                    href="./products.php?tab=Accessories">Phones &
                                    Tablets</a></li>

                            <li><img src="images/sidebar/computers.png" alt=""> <a
                                    href="./products.php?tab=Accessories">Computers</a></li>

                            <li><img src="images/sidebar/clothings.png" alt=""> <a
                                    href="./products.php?tab=Jewelries">Jewelries</a></li>

                            <li><img src="images/sidebar/clothings.png" alt=""> <a
                                    href="./products.php?tab=Bags">Bags</a>
                            </li>




                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </div>
</section>
<!--end-->