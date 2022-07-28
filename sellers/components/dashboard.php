<?php 


$limit = 13;
$page =isset( $_GET['page']) ? $_GET['page'] : 1;
$start=($page -1) * $limit;
$rowcount =selectAll('products' );


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


$text = 'Filter By';
global $result;

if (isset($_POST['search_term'])){
    $result=search($_POST['search_term'], $start , 100);
            if (count($result) != 0) {
                $postTitle = "You searched for '" . strtoupper($_POST['search_term']) . " ' ";
            }else{
                $postTitle = 'No record found on your search term....';
            }
}elseif(isset($_POST['select'])){
    $filter = $_POST['select'];
    if ($filter == 'name'){
       $result =selectPageConds('products', 'Name', $start , 100);
       $text = 'You Filtered By Product Name';
    }elseif ($filter == 'model'){
        $result =selectPageConds('products', 'Model', $start , 100);
        $text = 'You Filtered By Product Model';
    }elseif ($filter == 'brand'){
        $result =selectPageConds('products', 'Brand', $start , 100);
        $text = 'You Filtered By Product Brand';
    }elseif ($filter == 'category'){
        $result =selectPageConds('products', 'Category', $start , 100);
        $text = 'You Filtered By Product Category';
    }elseif ($filter == 'price'){
        $result =selectPageConds('products', 'Price', $start , 100);
        $text = 'You Filtered By Product Price';
    }
}
else{
        $result =selectPage('products',  $start , $limit);
    }
        





?>

<!-------==========================PRODUCT SESSION===================------------------>
<section class="product" id="product">
    <div class="order_container">
        <div class="product_table_wrap">
            <!--Dashboard Nav-->
            <div class="dashboard_nav" id="product_nav">
                <div class="">
                    <div class="">
                        <h2 style="
                        font-size: 17px;
                        margin-right: 10px;
                        margin-top: 3%;
                        font-weight:bold;
                      ">
                            <?php echo $text ?>
                        </h2>
                        <form action="index.php" method='post'>
                            <select name="select" id="" class="form-control my-1" style="font-weight: bold;"
                                onchange="this.form.submit()" required>
                                <option value="" selected disabled>select</option>
                                <option value="name">Product Name</option>
                                <option value="brand">Brand</option>
                                <option value="model">Model</option>
                                <option value="category">Category</option>
                                <option value="price">Price</option>
                            </select>
                        </form>
                    </div>

                    <div class="">
                        <form action="index.php" method='post'>
                            <div class="form-group">
                                <label for="exampleInputEmail1" style="font-weight: bold; font-size:17px"
                                    class="my-1">Search</label>
                                <input type="search" class="form-control"
                                    placeholder="Search for a Product By Name, Model Or Brand..."
                                    style='color:var(--green); font-weight:bold; text-transform:capitalize'
                                    name='search_term'>
                            </div>
                        </form>
                        <button class="btn btn-shop-alt bold font-16 " id="add_btn">ADD PRODUCT</button>
                    </div>
                </div>
            </div>
            <!--end Nav-->



            <div class="mt-4 product-table py-3" id="product_table">
                <div class="container  ">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">S/N</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Model</th>
                                <th scope="col">Color</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col" colspan="3">Auction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                      
                        
                        foreach($result as $key => $product):  ?>
                            <tr>
                                <td><?php echo $key + 1 ?></td>
                                <td><?php echo $product['Name']  ?></td>
                                <td><?php echo $product['Category']  ?></td>
                                <td><?php echo $product['Model']  ?></td>
                                <td><?php echo $product['Brand']  ?></td>
                                <td><?php echo $product['Color']  ?></td>
                                <td><?php echo $product['Price']  ?></td>
                                <td><?php echo $product['Quantity']  ?></td>
                                <td><button class="btn btn-info" id="<?php echo $product['id'] ?>"
                                        onclick="edit(this)">EDIT</button>
                                </td>


                                <td><button class="btn btn-danger" id="<?php echo $product['id'] ?>"
                                        onclick="remove(this)">REMOVE</button></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <!-- 
        end product table -->




        <!--browse category second page! tab page -->
        <div class="category_tab_section" id="productTab">
            <div class="close_product  " id="close_p">
                <i class="fa fa-close white py-1 px-2 bg_dark-green" style="float: right; cursor:pointer"></i>
            </div>
            &nbsp &nbsp &nbsp
            <div class="r">
                <h1 class="font-20 bold dark-green">Create a new product</h1>
                <p class="light font-16 dark-green">Please select a primary category for your product</p>
            </div>
            <form id='post_form' enctype="multipart/form-data" onsubmit="return false">
                <ul>
                    <li><a class="font-14" href="#productInfo"> Product</a></li>
                    <li><a class="font-14" href="#productDetails"> Details</a></li>
                    <li><a class="font-14" href="#productPricing">Pricing</a></li>
                    <li><a class="font-14" href="#imageTab">Images</a></li>
                </ul>

                <!--product information-->

                <div class="product_information" id="productInfo">
                    <div class="">
                        <div class="title w-100 ">
                            <h6 class="bold font-16 dark-green" style="text-align:left ;">Category</h6>

                            <select name="category" id="category" class="form-control dark-green light">
                                <option value=""></option>
                                <option value="Accessories">Accessories</option>
                                <option value="Clothings">Clothings</option>
                                <option value="Bags">Bags</option>
                                <option value="Shoes">Shoes</option>
                                <option value="Phones">Phones</option>
                                <option value="Jewelries">Jewelries</option>
                            </select>
                            <div class="invalid-feedback error-category">
                                Please Select a category
                            </div>
                        </div>
                    </div>
                    <div class="product_info_details">
                    </div>
                    <div class="product_info_details">
                        <div class="row">
                            <div class="title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <h5 class="bold">Name</h5>
                            </div>
                            <div class="details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <input type="text" id='name' name='name' class="form-control"
                                    placeholder="Hint text*" />
                                <div class="invalid-feedback error-name">
                                    Please Input The Name of Product
                                </div>
                                <p>
                                    Name of the product. For a better listing quality, the
                                    name should consist the actual product name, if
                                    available colour, edition, speciality.
                                </p>
                                <p>
                                    Example: Wide Angle Camera 10mp-Black, Galaxy Tab. A
                                    leather flip case-Red. DO NOT ADD BRAND NAME HERE
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="product_info_details">
                        <div class="row">
                            <div class="title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <h5 class="bold">Main color</h5>
                            </div>
                            <div class="details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <input type="text" id='color' name='color' class="form-control"
                                    placeholder="Main color*" />
                                <div class="invalid-feedback error-color">
                                    Please Input color of product
                                </div>
                                <p>
                                    Main color of a product can also be a certain shade of
                                    a color or a brand specific color description.
                                </p>
                                <p>Example: Royal blue, Red</p>
                            </div>
                        </div>
                    </div>

                    <div class="product_info_details">
                        <div class="row">
                            <div class="title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <h5 class="bold">Brand</h5>
                            </div>
                            <div class="details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <input type="text" id="brand" name="brand" class="form-control" placeholder="Brand*" />
                                <div class="invalid-feedback error-brand">
                                    Please Input Brand of product
                                </div>
                                <p>
                                    Brand of the product, if brand does not exist, please
                                    copy https://cutt.ly/ownhcIV into your browser and
                                    fill accordingly.
                                </p>
                                <p>
                                    Example: Apple, Chanel. For unbranded Fashion items,
                                    please use 'Fashion'. Other unbranded items please use
                                    'Generic'
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="product_info_details">
                        <div class="row">
                            <div class="title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                <h5 class="bold">Model</h5>
                            </div>
                            <div class="details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                <input type="text" id='model' name='model' class="form-control" placeholder="Model*" />
                                <div class="invalid-feedback error-model">
                                    Please Input Model of Product
                                </div>
                                <p>
                                    This field is for for the model description of your
                                    product.
                                </p>
                                <p>
                                    Example: iphone 4s, Samsung galaxy s10 . please copy
                                    https://cutt.ly/ownhcIV to your browser for more
                                    Information
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <!--end product information tab-->

                <!--Produc details tab-->
                <div class="product_details" id="productDetails">

                    <!--2-->
                    <div class="product_specification">
                        <h1>Product Specification</h1>
                        <div class="product_info_details">
                            <div class="row">
                                <div class="title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <h5 class="bold">Product Description</h5>
                                </div>
                                <div class="details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <textarea name="description" id="description" class="form-control" cols="30"
                                        rows="6" placeholder="Text Hint*"></textarea>
                                    <div class="invalid-feedback error-description">
                                        Please Add Product Description
                                    </div>
                                    <p>
                                        The produuct description should give the buyer more
                                        information about a product to ensure a purchase.
                                        paste https://bit.ly/3aazgoU into your browser for
                                        more information.
                                    </p>
                                    <p>
                                        Example: JTC Full HD 24"", LED CD TV combines great
                                        features and design. It has a diagonal screen size
                                        61cm(24inch), with integratd dvd player and an
                                        in-built turner. It also recieves sattalite cable,
                                        DVB-T and DVB-T2 signals without the need for a
                                        reciever.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="product_info_details">
                            <div class="row">
                                <div class="title col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <h5 class="bold">Product Quantity</h5>
                                </div>
                                <div class="details col-xl-9 col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <input type="number" id='quantity' name='quantity' class="form-control"
                                        placeholder="30">
                                    <div class="invalid-feedback error-quantity">
                                        Please Add Product Quantity
                                    </div>
                                    <p>
                                        Example: JTC Full HD 24"", LED CD TV combines great
                                        features and design. It has a diagonal screen size
                                        61cm(24inch), with integratd dvd player and an
                                        in-built turner. It also recieves sattalite cable,
                                        DVB-T and DVB-T2 signals without the need for a
                                        reciever.
                                    </p>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>


                <!--Product details tab end-->

                <!--Product pricing tab-->
                <div class="product_pricing" id="productPricing">
                    <div class="order_container">
                        <label for="" style="font-size: 12px; opacity: 0.8">Product pricing</label>
                        <input type="number" id='price' name='price' placeholder="Price of product" class="form-control"
                            style="font-size: 13px" />
                        <div class="invalid-feedback error-price">
                            Please Add Price of Product
                        </div>
                    </div>

                </div>

                <!--End Product pricing tab-->

                <!--Images-->
                <div class="image_tab" id="imageTab">
                    <h6>
                        Images need to be at least 200 * 200 pixels with a maximum
                        of 3000* by 3000 pixels
                    </h6>
                    <div class="upload" style="margin-top: 9%">
                        <h5 style="font-size: 11px; opacity: 0.8">
                            Upload product images here
                        </h5>
                        <input type="file" id='image' name='image' class="form-control" />
                        <div class="invalid-feedback error-image">
                            Please Add product Image
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 adjust">
                            <img src="../images/cart/speaker 2.png" alt="" />
                        </div>

                    </div>


                    <div class="select_btn" style="margin-top: 5%">
                        <button class="btn btn-shop-alt bold" type="submit" onclick="add_post()"> <i id="hide-fa"
                                class="fa  fa-spinner fa-spin"></i> &nbsp ADD &nbsp</button>
                    </div>
                </div>
                <!--end image tab-->
            </form>
        </div>
        <!--end category-->

        <!--edit tab-->
        <div class='category_tab_section' id='edittab' style="display: none;">

        </div>

        <!--end-->
        <div class="container" style="overflow-x: scroll">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item <?php echo $disabledFirst?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="index.php?page=<?php echo $first ?>" tabindex="-1">First</a>
                    </li>
                    <li class="page-item  <?php echo $disabledPrev?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link " href="index.php?page=<?php echo $previous ?>" tabindex="-1"><i
                                class="fa fa-caret-left" style='cursor:pointer'></i></a>
                    </li>

                    <!-- Looping through pages to print numbers -->
                    <?php for ($i=1; $i <= $totalPages ; $i++) :?>
                    <li class="page-item"><a class="page-link " id='active' href="index.php?page=<?php echo $i ?>"
                            value='<?php echo $i ?>'><?php echo $i ?></a>
                    </li>
                    <?php endfor; ?>
                    <!-- End Looping through pages to print numbers -->

                    <li class="page-item <?php echo $disabledNext?>" style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="index.php?page=<?php echo $next ?>"><i class="fa fa-caret-right"
                                style='cursor:pointer'></i></a>
                    </li>
                    <li class="page-item <?php echo $disabledLast?> " style='background-color:<?php echo $bg ?>'>
                        <a class="page-link" href="index.php?page=<?php echo $last ?>" tabindex="-1">Last</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</section>


<!-------====================== END PRODUCT SESSION===================-------------->