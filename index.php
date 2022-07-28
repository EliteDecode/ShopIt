<!-- Header -->
<?php 
session_start();
include('includes/header.php');
include('database/functions.php');


?>

<?php
if(isset($_SESSION['users'])){

    $email = $_SESSION['users'];
    $res =selectOne('users', ['Email' => $email]);
    $id = $res['id'];
}

// Navigation

include('includes/components/navigation.php');

// Carousel
 include('includes/components/carousel.php');

//section 3 product tabs
 include('includes/components/product_tabs.php');

//  explore categories
include('includes/components/explore_category.php');

//  new arrivals
include('includes/components/new_arrivals.php');

//  Adverts
include('includes/components/adverts.php');

//  Trending
include('includes/components/trending.php');

//  Best seling
include('includes/components/best_selling.php');

//  Sell on shopit
include('includes/components/sell_on_shopit.php');

//  Best Selling Products
include('includes/components/best_selling_products.php');


//  Adverts
include('includes/components/advert2.php');



 ?>


<!-- footer -->
<?php include('includes/footer.php')?>