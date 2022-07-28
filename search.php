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



$email = 'DestinyApakhade@gmail.com';

$orders =selectAll('orders', ['Email' => $email]);
 ?>



<!--Navigation section-->
<section class="orders">
    <div class="container">

        <a href="index.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">Item Search</h6>
        </a>

        <form action="search.php" method='post' class="mt-2">
            <div class="form-group">
                <input type="search" class="form-control" placeholder="Search for an Item By Name Or Brand..."
                    style='color:var(--green); font-weight:bold; text-transform:capitalize' name='search_term' required>
            </div>
        </form>

        <?php 
            
            $id =1;

            $limit = 25;
            $page =isset( $_GET['page']) ? $_GET['page'] : 1;
            $start=($page -1) * $limit;
            $rowcount =selectAll('saved',['Buyers_id' => $id] );
            

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


            $postTitle = ''; 
            global $items;

            if (isset($_POST['search_term'])){
            $items=search($_POST['search_term'], $start , $limit);
                    if (count($items) != 0) {
                        $postTitle = "You searched for '" . strtoupper($_POST['search_term']) . " ' ";
                    }else{
                        $postTitle = 'No record found on your search term....';
                    }
            }

            if($items):
          ?>


        <div class="items py-4 container ">
            <h5 class="bold font-16 dark-green"><?php echo $postTitle ?></h5>

            <?php   foreach($items as $item): ?>

            <div class="item_detail border py-3 mb-4">
                <div class="container">
                    <div class="row row_resize">


                        <textarea hidden value="" id="item_descrip"> <?php echo $item['Descrip'] ?> </textarea>

                        <div class="col-5">
                            <img src="sellers/product_images/<?php echo $item['Image'] ?>" alt=""
                                class="img-fluid w-100">
                        </div>
                        <div class="col-7 dark ">
                            <h6 class="font-12 text-capitalize bold">Name: <span
                                    class="text-Capitalize"><?php echo $item['Name'] ?></span></h6>
                            <h6 class="font-12 text-capitalize bold">Category: <span
                                    class="text-Capitalize"><?php echo $item['Category'] ?></span>
                            </h6>
                            <h6 class="font-12 text-capitalize bold">Model: <span
                                    class="text-Capitalize"><?php echo $item['Model'] ?></span>
                            </h6>
                            <h6 class="font-12 text-capitalize bold">Brand: <span
                                    class="text-Capitalize"><?php echo $item['Brand'] ?></span>
                            </h6>
                            <h6 class="font-12 text-capitalize bold">Price: <span
                                    class="text-Capitalize">$<?php echo number_format($item['Price']) ?></span>
                            </h6>


                            <a href="cart.php?id=<?php echo $item['id'] ?>" class="green">
                                <div class="qty my-4 border py-1 px-1 d-flex flex-row justify-content-between">
                                    <div class="  bg_dark-green plus-sign" disabled><i
                                            class="fa fa-plus py-1 px-2 white " id="plus-sign"></i>
                                    </div>
                                    <div class="input">
                                        <input type="text" disabled value='1' class="w-100 text-center bold font-16"
                                            id="cart_count" style='border:none'>
                                    </div>
                                    <div class="  bg_dark-green minus-sign" disabled><i
                                            class="fa fa-minus py-1 px-2 white" id="minus-sign"></i>
                                    </div>
                                </div>
                            </a>

                            <button class="btn " id="<?php echo $item['Product_id'] ?>" onclick="remove_save(this)"><i
                                    class="fa fa-trash  font-22 heart" id="save_item" style="color:red;"></i></button>

                        </div>
                    </div>
                </div>

            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>








        <div class="orders_body text-center">
            <div class="container">
                <i class="fa fa-smile-o"></i>

                <h6>Search For Desired Product or <br> please visit shop</h6>
            </div>
            <a href="bestdealphp"><button class="btn btn-shop bold">CONTINUE SHOPPING</button></a>
        </div>

        <?php endif;?>


    </div>
</section>

<!--End-->






<!-- footer -->
<?php include('includes/footer.php')?>