<?php  session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP IT</title>
    <style>
    .heart {
        color: #c8d2d2d6;
    }


    .history {
        margin-top: 10% !important;
    }

    @media(max-width:523px) and (min-width:0px) {
        .history {
            margin-top: 27% !important;
        }
    }

    @media(max-width:765px) and (min-width:524px) {
        .history {
            margin-top: 12%;
        }
    }

    @media(max-width:990px) and (min-width:765px) {
        .history {
            margin-top: 10%;
        }
    }
    </style>
</head>
<?php 
include('includes/header.php');
  include('css/orders_style.php');
  include('includes/components/navigation.php');
  include('database/functions.php');
?>


<section class="history">
    <div class="container">


        <a href="customerinfo.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">HISTORY</h6>
        </a>

        <div class="history_items">
            <div class="container">


                <?php 

                    //session is email 
                    //getting the id of this user and sending it to cart as buyers_id
                    $ad = $_SESSION['users'];
                    $response = selectOne('users', ['Email' => $ad]);
                    $id= $response['id'];
                    $grandtotal = 0;

                                        
                        $limit = 4;
                        $page =isset( $_GET['page']) ? $_GET['page'] : 1;
                        $start=($page -1) * $limit;
                        $rowcount = selectAll('history',['Buyers_id' => $id] );


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


                        $items = selectPageCondition('history', $id , $start , $limit);
                         ?>

                <h4 class="bold font-16 dark-green mt-2 mb-2"><?php  echo $response['Fullname'] ?> Your History</h4>

                <?php if($items):  ?>

                <div class="items py-4">
                    <?php foreach($items as $item): ?>

                    <div class="item_detail border py-3 mb-4">
                        <div class="container">
                            <div class="row row_resize">

                                <input type="hidden" value="<?php echo $item['Name'] ?>" id="item_name">
                                <input type="hidden" value="<?php echo $item['Model'] ?>" id="item_model">
                                <input type="hidden" value="<?php echo $item['Brand'] ?>" id="item_brand">
                                <input type="hidden" value="<?php echo $item['Category'] ?>" id="item_category">
                                <input type="hidden" value="<?php echo $item['Image'] ?>" id="item_image">
                                <input type="hidden" value="<?php echo $item['Item_price'] ?>" id="item_price">
                                <input type="hidden" value="<?php echo $response['id'] ?>" id="buyers_id">
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

                                    <h6 class="font-12 text-capitalize bold">Orderd Quantity: <span
                                            class="text-Capitalize"><?php echo $item['Item_Qty'] ?></span>

                                    </h6>
                                    <a href="edit_cart.php?id=<?php echo $item['Product_id'] ?>" class="green">
                                        <div class="qty my-4 border py-1 px-1 d-flex flex-row justify-content-between">
                                            <div class="  bg_dark-green plus-sign" disabled><i
                                                    class="fa fa-plus py-1 px-2 white " id="plus-sign"></i>
                                            </div>
                                            <div class="input">
                                                <input type="text" disabled value='<?php echo $item['Item_Qty'] ?>'
                                                    class="w-100 text-center bold font-16" id="cart_count"
                                                    style='border:none'>
                                            </div>
                                            <div class="  bg_dark-green minus-sign" disabled><i
                                                    class="fa fa-minus py-1 px-2 white" id="minus-sign"></i>
                                            </div>
                                        </div>
                                    </a>




                                    <h6 class="font-12 text-capitalize bold">Total Price: <span
                                            class="text-Capitalize">$<?php echo number_format($item['Total_price']) ?></span>
                                    </h6>
                                    <div class="controls">
                                        <?php $save = selectOne('saved', ['Product_id' => $item['Product_id']]);
                                 if($save):
                         ?>
                                        <button class="btn " id="<?php echo $item['Product_id'] ?>"
                                            onclick="save_item(this)"><i class="fa fa-heart green font-22 heart"
                                                id="save_item"></i></button>
                                        <?php else: ?>
                                        <button class="btn " id="<?php echo $item['Product_id'] ?>"
                                            onclick="save_item(this)"><i class="fa fa-heart heart font-22 heart"
                                                id="save_item"></i></button>
                                        <?php endif; ?>
                                        <button class="btn " id="<?php echo $item['Product_id'] ?>"
                                            onclick="delete_item(this)"><i class="fa fa-trash  font-22 heart"
                                                id="save_item" style="color:red;"></i></button>
                                    </div>
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
                        <a href="products.php?tab=Shoes"><button class="btn btn-shop bold">CONTINUE
                                SHOPPING</button></a>
                    </div>

                    <?php endif; ?>

                </div>

            </div>
        </div>
        <?php if($items):?>
        <div class="container" style="overflow-x: scroll">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item <?php echo $disabledFirst?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="history.php?page=<?php echo $first ?>" tabindex="-1">First</a>
                    </li>
                    <li class="page-item  <?php echo $disabledPrev?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link " href="history.php?page=<?php echo $previous ?>" tabindex="-1"><i
                                class="fa fa-caret-left" style='cursor:pointer'></i></a>
                    </li>

                    <!-- Looping through pages to print numbers -->
                    <?php for ($i=1; $i <= $totalPages ; $i++) :?>
                    <li class="page-item"><a class="page-link " id='active' href="history.php?page=<?php echo $i ?>"
                            value='<?php echo $i ?>'><?php echo $i ?></a>
                    </li>
                    <?php endfor; ?>
                    <!-- End Looping through pages to print numbers -->

                    <li class="page-item <?php echo $disabledNext?>" style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="history.php?page=<?php echo $next ?>"><i class="fa fa-caret-right"
                                style='cursor:pointer'></i></a>
                    </li>
                    <li class="page-item <?php echo $disabledLast?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="history.php?page=<?php echo $last ?>" tabindex="-1">Last</a>
                    </li>
                </ul>
            </nav>
        </div>
        <?php else: ?>
        <?php endif; ?>
    </div>
</section>
<!--end-->


<?php include('includes/footer.php')?>


<script>
function save_item(e) {

    var item_id = e.id;
    var buyers_id = $('#buyers_id').val();
    var item_price = $('#item_price').val();
    var item_image = $('#item_image').val();
    var item_name = $('#item_name').val();
    var item_brand = $('#item_brand').val();
    var item_model = $('#item_model').val();
    var item_descrip = $('#item_descrip').val();
    var item_category = $('#item_category').val();

    $.ajax({
        url: "ajax/save_item.php",
        method: "post",
        data: {
            item_id: item_id,
            buyers_id: buyers_id,
            item_price: item_price,
            item_image: item_image,
            item_name: item_name,
            item_descrip: item_descrip,
            item_model: item_model,
            item_brand: item_brand,
            item_category: item_category,

        },
        success: function(data) {
            alert(data);
            console.log(data);
            window.scrollTo(0, 0)
            window.location.href = 'history.php'
            count_cart();
        }
    });
}

function delete_item(e) {
    if (confirm("You Are About To Remove Product From History?")) {
        var item_id = e.id;
        $.ajax({
            url: "ajax/delete_history.php",
            method: "post",
            data: {
                item_id: item_id,
            },
            success: function(data) {
                alert(data);
                console.log(data);
                window.scrollTo(0, 0)
                window.location.href = 'history.php'
                count_cart();
            }
        });
    }
}
</script>