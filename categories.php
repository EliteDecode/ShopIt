<!-- Header -->
<?php include('includes/header.php');
    include('database/functions.php');
    
// Navigation
include('css/exploreCategorySyntax.php');
include('includes/components/navigation.php');


if (isset($_GET['category'])) {
   $category = $_GET['category'];

   global $items;

   $items = selectAll('products', ['Category' => $category]);
}

?>







<!--Best deal section-->

<section class="best_dea">
    <div class="container">
        <div class="">
            <div class="row">
                <div class="col-10">
                    <a href="cart.php" class="d-flex border-bottom"><i
                            class="fa fa-arrow-left font-20 dark-green mr-2"></i>
                        <h6 class="bold dark-green font-16 " style="padding-top:.3%;">PHONES</h6>
                    </a>
                </div>
                <div class="col-2">
                    <!--<i class="fa fa-arrow-right"></i>-->
                </div>
            </div>
        </div>

        <div class="best_deal_category mt-5">
            <div class="row text-center">


                <?php foreach($items as $item): ?>
                <div class="col-6 mb-4">
                    <h6 class="bold font-14 dark-green"><?php echo $item['Brand']?></h6>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<?php
//  Best Selling Products
include('includes/components/best_selling_products.php');
//  Best Selling Products
include('includes/components/best_selling_products.php');
?>

<!--end-->

<!-- footer -->
<?php include('includes/footer.php')?>