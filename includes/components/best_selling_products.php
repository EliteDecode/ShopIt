<?php


  $items = randselect('products');

  foreach ($items as $item);
  $cat = $item['Category'];

  $carts = selectAll('products', ['Category' => $cat ]);

?>
<!--sectionBEST SELLING GAMES-->
<section class="product pt-5 arrivals-desk">
    <div class="category_head bg_dark-green white">
        <div class="container pt-2 pb-1">

            <h6 class="font-16 bold text-uppercase">BEST SELLING <?php echo $item['Category'] ?></h6>

        </div>
    </div>
    <div class="container p-3 text-center">
        <div class="row">
            <div class="owl-carousel owl-theme new_arrivals ">

                <?php  foreach($carts as $cart): ?>
                <div class=" item border p-2 ">
                    <a href="cart.php?id=<?php echo $cart['id'] ?>"><img
                            src="././sellers/product_images/<?php echo $cart['Image']  ?>" alt="" class=""
                            style='height:210px; width:100%'></a>
                    <div class="product_ratings">
                        <i class="fa fa-star green"></i>
                        <i class="fa fa-star green"></i>
                        <i class="fa fa-star green"></i>
                        <i class="fa fa-star dark"></i>
                        <i class="fa fa-star dark"></i>
                    </div>
                    <h5 class="dark bold font-12"><?php echo $cart['Name'] ?></h5>
                    <span class="dark font-14 bold"> <i
                            class="fa fa-dollar"></i><?php echo number_format($cart['Price']); ?> <strike
                            class="slash font-12 grey_white line-through">/39,000</strike></span>
                    <button class="btn btn-danger p-1 bold font-10" style="position:absolute; top:7%; right:15%"><i
                            class="fa fa-minus"></i> 24%</button>

                </div>
                <?php endforeach; ?>

            </div>



        </div>
    </div>
</section>
<!--end-->

































<!--sectionBEST SELLING GAMES-->
<section class="product pt-5 arrivals-mob " style="display:none">
    <div class="category_head bg_dark-green white">
        <div class="container pt-2 pb-1">
            <h6 class="font-16 bold text-uppercase">BEST SELLING <?php echo $item['Category'] ?></h6>
        </div>
    </div>
    <div class="container p-3 text-center">
        <div class="row">
            <div class="owl-carousel owl-theme new_arrivals">
                <?php  foreach($carts as $cart): ?>
                <div class=" item border p-2 ">
                    <a href="cart.php?id=<?php echo $cart['id'] ?>"><img
                            src="././sellers/product_images/<?php echo $cart['Image']  ?>" alt="" class=""
                            style='height:110px; width:100%'></a>
                    <div class="product_ratings">
                        <i class="fa fa-star green"></i>
                        <i class="fa fa-star green"></i>
                        <i class="fa fa-star green"></i>
                        <i class="fa fa-star dark"></i>
                        <i class="fa fa-star dark"></i>
                    </div>
                    <h5 class="dark bold font-12"><?php echo substr($item['Name'], 0, 10) ?>...</h5></span>
                    <span class="dark font-14 bold"> <i
                            class="fa fa-dollar"></i><?php echo number_format($item['Price']); ?></span>
                    <button class="btn btn-danger p-1 bold font-10" style="position:absolute; top:7%; right:15%"><i
                            class="fa fa-minus"></i> 24%</button>

                </div>
                <?php endforeach; ?>

            </div>



        </div>
    </div>
</section>
<!--end-->