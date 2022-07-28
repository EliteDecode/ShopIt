<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP IT</title>
</head>
<?php include('includes/header.php');
  include('css/bestdeal_style.php');
?>

<body>

    <?php 
include('includes/components/navigation.php');
include('database/functions.php');

$limit = 8;
$page =isset( $_GET['page']) ? $_GET['page'] : 1;
$start=($page -1) * $limit;
global $rowcount;
if (isset($_GET['tab'])){
    $tab = $_GET['tab'];
    global $items;

    if ($tab== 'New_Arrivals') {
       $items =newArrival('products', $start, $limit );
       $rowcount =selectAll('products');
    }elseif($tab== 'Best_Deals'){
        $items =bestDeals('products', $start , $limit);
        $rowcount =selectAll('products');
    }elseif($tab== 'Best_Selling'){
        $items =bestselling('products', $start, $limit);
        $rowcount =selectAll('products');
    }elseif($tab== 'Trending'){
        $items =trending('products', $start, $limit);
        $rowcount =selectAll('products');
    }elseif($tab== 'Gifts'){
        $items =selectAll('products', ['Category' => 'Gifts']);
        $rowcount =selectAll('products', ['Category' => 'Gifts']);
    }elseif($tab== 'Accessories'){
        $rowcount =selectAll('products', ['Category' => 'Accessories']);
        $items =selectAll('products', ['Category' => 'Accessories']);
    }elseif($tab== 'Clothings'){
        $rowcount =selectAll('products', ['Category' => 'Clothings']);
        $items =selectAll('products', ['Category' => 'Clothings']);
    }elseif($tab== 'Bags'){
        $rowcount =selectAll('products', ['Category' => 'Bags']);
        $items =selectAll('products', ['Category' => 'Bags']);
    }elseif($tab== 'Jewelries'){
        $rowcount =selectAll('products', ['Category' => 'Jewelries']);
        $items =selectAll('products', ['Category' => 'Jewelries']);
    }elseif($tab== 'Shoes'){
        $rowcount =selectAll('products', ['Category' => 'Shoes']);
        $items =selectAll('products', ['Category' => 'Shoes']);
    }
}




$count = count($rowcount);
$totalPages = ceil($count / $limit);

if ($page == 1) {
    $disabledPrev = 'disabled';
    $bg = 'grey';
}else{
    $disabledPrev = '';
    $bg = '';
}
if($page == $totalPages){
    $disabledNext = 'disabled';
    $bg = 'grey';
}else{
    $disabledNext = '';
    $bg = '';
}
$first = 1;
$last = $totalPages;
$previous = $page -1;
$next = $page +1;






?>





    <!--Best deal section MOBILE-->

    <section class=" best_dea py-3" style="margin-top:23% ;">
        <div class="container">
            <div class="best_deal_header">
                <div class="row">
                    <div class="col-10">
                        <a href="index.php" class="d-flex border-bottom"><i
                                class="fa fa-arrow-left font-16 dark-green mr-2"></i>
                            <?php  if (isset($_GET['tab'])){
                               $tab = $_GET['tab'];
                               if ($tab== 'New_Arrivals') {
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>NEW ARRIVALS</h6>";
                            }elseif($tab== 'Best_Deals'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>BEST DEALS</h6>";
                            }elseif($tab== 'Best_Selling'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>BEST SELLING</h6>";
                            }elseif($tab== 'Trending'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>TRENDING</h6>";
                            }elseif($tab== 'Gifts'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>GIFTS PACKING</h6>";
                            }elseif($tab== 'Accessories'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>ACCESSORIES</h6>";
                            }elseif($tab== 'Clothings'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>CLOTHINGS</h6>";
                            }elseif($tab== 'Bags'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>BAGS</h6>";
                            }elseif($tab== 'Jewelries'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>JEWELRIES</h6>";
                            }elseif($tab== 'Shoes'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>SHOES</h6>";
                            }
                            }
                            ?>

                        </a>
                    </div>
                    <div class="col-2">
                        <i class="fa fa-angle-right"></i>
                    </div>
                </div>
            </div>

            <div class="best_deal_items py-3 text-center">
                <div class="row">

                    <?php foreach($items as $item): ?>
                    <div class="col-6 mb-1">
                        <div class="best_deal_item py-3 ">
                            <div class="">
                                <a href="cart.php?id=<?php echo $item['id'] ?>">
                                    <img src="sellers/product_images/<?php echo $item['Image'] ?>" alt=""
                                        class="img-fluid w-100" style='height:130px;'>
                                </a>
                            </div>
                            <div class="item_ratings">
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_dark"></i>
                            </div>
                            <div class="best_deal_description">
                                <h6> <?php echo $item['Name'] ?></h6>
                            </div>
                            <div class="best_deal_price">
                                <h2>$<?php echo number_format($item['Price']) ?></h2>
                            </div>

                        </div>
                    </div>

                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </section>

    <!--end-->


    <!--Best deal section DESKTOP-->

    <section class="best_deal_desk " style="margin-top:13% ;">
        <div class="container">
            <div class="best_deal_header" style="margin-top:-9%">
                <div class="row">
                    <div class="col-10">
                        <a href="index.php" class="d-flex border-bottom"><i
                                class="fa fa-arrow-left font-16 dark-green mr-2"></i>
                            <?php  if (isset($_GET['tab'])){
                               $tab = $_GET['tab'];
                               if ($tab== 'New_Arrivals') {
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>NEW ARRIVALS</h6>";
                            }elseif($tab== 'Best_Deals'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>BEST DEALS</h6>";
                            }elseif($tab== 'Best_Selling'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>BEST SELLING</h6>";
                            }elseif($tab== 'Trending'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>TRENDING</h6>";
                            }elseif($tab== 'Gifts'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>GIFTS PACKING</h6>";
                            }elseif($tab== 'Accessories'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>ACCESSORIES</h6>";
                            }elseif($tab== 'Clothings'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>CLOTHINGS</h6>";
                            }elseif($tab== 'Bags'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>BAGS</h6>";
                            }elseif($tab== 'Jewelries'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>JEWELRIES</h6>";
                            }elseif($tab== 'Shoes'){
                                echo "<h6 class='bold dark-green font-16 ' style='padding-top:0%;'>SHOES</h6>";
                            }
                            }
                            ?>
                        </a>
                    </div>

                </div>
            </div>

            <div class="best_deal_items text-center">
                <div class="row">
                    <?php foreach($items as $item): ?>
                    <div class="col-3 ">
                        <div class="best_deal_item py-3">
                            <div class="">
                                <a href="cart.php?id=<?php echo $item['id']  ?>">
                                    <img src="sellers/product_images/<?php echo $item['Image'] ?>" alt=""
                                        class="img-fluid w-100" style='height:130px;'>
                                </a>
                            </div>
                            <div class="item_ratings">
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_red"></i>
                                <i class="fa fa-star ojahi_dark"></i>
                            </div>
                            <div class="best_deal_description">
                                <h6> <?php echo $item['Name'] ?></h6>
                            </div>
                            <div class="best_deal_price">
                                <h2>$<?php echo number_format($item['Price']) ?></h2>
                            </div>

                        </div>
                    </div>

                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </section>

    <!--end-->





    <div class="container" style="overflow-x: scroll">
        <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item <?php echo $disabledFirst?> " style='background-color:<?php echo $bg ?>'>
                    <a class="page-link" href="products.php?tab=<?php echo $tab ?>&page=<?php echo $first ?>"
                        tabindex="-1">First</a>
                </li>
                <li class="page-item  <?php echo $disabledPrev?> " style='background-color:<?php echo $bg ?>'>
                    <a class="page-link " href="products.php?tab=<?php echo $tab ?>&page=<?php echo $previous ?>"
                        tabindex="-1"><i class="fa fa-caret-left" style='cursor:pointer'></i></a>
                </li>

                <!-- Looping through pages to print numbers -->
                <?php for ($i=1; $i <= $totalPages ; $i++) :?>
                <li class="page-item"><a class="page-link " id='active'
                        href="products.php?tab=<?php echo $tab ?>&page=<?php echo $i ?>"
                        value='<?php echo $i ?>'><?php echo $i ?></a>
                </li>
                <?php endfor; ?>
                <!-- End Looping through pages to print numbers -->

                <li class="page-item <?php echo $disabledNext?>" style='background-color:<?php echo $bg ?>'>
                    <a class="page-link" href="products.php?tab=<?php echo $tab ?>&page=<?php echo $next ?>"><i
                            class="fa fa-caret-right" style='cursor:pointer'></i></a>
                </li>
                <li class="page-item <?php echo $disabledLast?> " style='background-color:<?php echo $bg ?>'>
                    <a class="page-link" href="products.php?tab=<?php echo $tab ?>&page=<?php echo $last ?>"
                        tabindex="-1">Last</a>
                </li>
            </ul>
        </nav>
    </div>


    <!-- footer -->
    <?php include('includes/footer.php')?>