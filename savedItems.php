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
    <title>SHOP IT</title>
</head>
<?php include('includes/header.php');
  include('css/saveditems_style.php');
  include('database/functions.php');
?>

<body>

    <?php 
include('includes/components/navigation.php');
$ad = $_SESSION['users'];
$response = selectOne('users', ['Email' => $ad]);
$id= $response['id'];


$limit = 4;
$page =isset( $_GET['page']) ? $_GET['page'] : 1;
$start=($page -1) * $limit;
$rowcount = selectAll('saved',['Buyers_id' => $id] );


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


$items = selectPageCondition('saved', $id , $start , $limit);

 ?>




    <!--Navigation section-->
    <section class="saved">
        <div class="container">

            <a href="customerInfo.php" class="d-flex border-bottom"><i
                    class="fa fa-arrow-left font-20 dark-green mr-2"></i>
                <h6 class="bold dark-green font-16 " style="padding-top:.3%;">Saved Items</h6>
            </a>
        </div>

        <div class="items py-4 container ">
            <?php if($items):?>
            <?php foreach($items as $item): ?>

            <div class="item_detail border py-3 mb-4">
                <div class="container">
                    <div class="row row_resize">

                        <input type="hidden" value="<?php echo $item['Name'] ?>" id="item_name">
                        <input type="hidden" value="<?php echo $item['Model'] ?>" id="item_model">
                        <input type="hidden" value="<?php echo $item['Brand'] ?>" id="item_brand">
                        <input type="hidden" value="<?php echo $item['Category'] ?>" id="item_category">
                        <input type="hidden" value="<?php echo $item['Image'] ?>" id="item_image">
                        <input type="hidden" value="<?php echo $response['id'] ?>" id="item_price">
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
                                    class="text-Capitalize">$<?php echo number_format($item['Item_price']) ?></span>
                            </h6>


                            <a href="cart.php?id=<?php echo $item['Product_id'] ?>" class="green">
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
            <?php else: ?>
            <div class="orders_body text-center">
                <div class="container">
                    <i class="fa fa-smile-o my-2 dark-green " style="font-size:100px;"></i>

                    <h6 class="bold dark-green my-4">No Item Currently Saved. <br> please visit shop</h6>
                </div>
                <a href="products.php?tab=Shoes"><button class="btn btn-shop bold">CONTINUE SHOPPING</button></a>
            </div>

            <?php endif; ?>
        </div>


        <?php if($items):?>
        <div class="container" style="overflow-x: scroll">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item <?php echo $disabledFirst?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="savedItems.php?page=<?php echo $first ?>" tabindex="-1">First</a>
                    </li>
                    <li class="page-item  <?php echo $disabledPrev?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link " href="savedItems.php?page=<?php echo $previous ?>" tabindex="-1"><i
                                class="fa fa-caret-left" style='cursor:pointer'></i></a>
                    </li>

                    <!-- Looping through pages to print numbers -->
                    <?php for ($i=1; $i <= $totalPages ; $i++) :?>
                    <li class="page-item"><a class="page-link " id='active' href="savedItems.php?page=<?php echo $i ?>"
                            value='<?php echo $i ?>'><?php echo $i ?></a>
                    </li>
                    <?php endfor; ?>
                    <!-- End Looping through pages to print numbers -->

                    <li class="page-item <?php echo $disabledNext?>" style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="savedItems.php?page=<?php echo $next ?>"><i class="fa fa-caret-right"
                                style='cursor:pointer'></i></a>
                    </li>
                    <li class="page-item <?php echo $disabledLast?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="savedItems.php?page=<?php echo $last ?>" tabindex="-1">Last</a>
                    </li>
                </ul>
            </nav>
        </div>
        <?php else: ?>
        <?php endif; ?>
    </section>










    <!-- footer -->
    <?php  include('includes/footer.php') ?>



    <script>
    function remove_save(e) {

        if (confirm("You Are About To Remove Product From Saved Tab")) {
            var item_id = e.id;
            $.ajax({
                url: "ajax/remove_save.php",
                method: "post",
                data: {
                    item_id: item_id,

                },
                success: function(data) {
                    alert(data);
                    console.log(data);
                    window.location.href = 'savedItems.php'

                }
            });
        }

    }
    </script>