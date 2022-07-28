<?php 

session_start();
if (!isset($_SESSION['admin'])) {
    header('location:login.php');
 }
include('includes/header.php');
include('sellers.css/dashboard_style.php');
include('database/functions.php');






?>


<section id="tabs" class="">
    <div class="container-fluid">
        <div class="row" style="position: relative;">
            <div class="col-xl-2 col-md-2 col-sm-2 tab" id="tab">
                <?php include('components/side_nav.php') ?>
            </div>

            <!--Dashboard Content-->
            <div class="col-xl-10 col-md-10 col-sm-10 content">

                <div class="container" style="position:absolute;">
                    <div id="msg" class="mt-3"></div>
                </div>


                <div class="bars" id="bars">
                    <i class="fa fa-bars font-20 bold dark-green pt-4 pl-3 "></i>
                </div>



                <?php
                //  start dashboard section tab
                include('components/dashboard.php');

                // start  Orders section tab
                include('components/orders.php');

               
                

                //start statistic section tab'
                include('components/statistics.php');
                ?>
            </div>
            <!------======END DASHBOARD CONTENT==============---->
        </div>
    </div>
</section>


<?php include('includes/footer.php') ?>


<script>
$("#hide-fa").hide();


function add_post() {
    var category = $("#category").val();
    var name = $("#name").val();
    var color = $("#color").val();
    var brand = $("#brand").val();
    var model = $("#model").val();
    var description = $("#description").val();
    var quantity = $("#quantity").val();
    var price = $("#price").val();
    var image = $("#image").val();



    if (category == "") {
        $("#category").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-category').show();

    } else {
        $("#category").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-category').hide();
    }


    if (name == "") {
        $("#name").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-name').show();

    } else {
        $("#name").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-name').hide();

    }

    if (color == "") {
        $("#color").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-color').show();

    } else {
        $("#color").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-color').hide();

    }

    if (brand == "") {
        $("#brand").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-brand').show();

    } else {
        $("#brand").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-brand').hide();

    }

    if (model == "") {
        $("#model").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-model').show();

    } else {
        $("#model").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-model').hide();

    }



    if (description == "") {
        $("#description").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-description').show();
    } else {
        $("#description").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-description').hide();
    }



    if (quantity == "") {
        $("#quantity").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-quantity').show();
    } else {
        $("#quantity").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-quantity').hide();
    }



    if (price == "") {
        $("#price").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-price').show();
    } else {
        $("#price").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-price').hide();
    }



    if (image == "") {
        $("#image").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-image').show();
    } else {
        $("#image").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-image').hide();
    }



    if (category != "" && description != "" && name != "" && color != "" && brand != "" && model != "" && quantity !=
        "" && price != "" && image != "") {

        $("#hide-fa").show();

        fetch('ajax_controls/add_product.php', {
                method: 'POST',
                body: new FormData(document.getElementById('post_form'))
            })
            .then(function(response) {
                return response.text();
                window.scrollTo(0, 0);
            })
            .then(function(text) {
                window.scrollTo(0, 0);
                $('#msg').html(text);
            })

    }
}
</script>



<!-- edit -->

<script>
function edit(edit) {
    var product_id = edit.id;


    var edit = new XMLHttpRequest();


    var url = "ajax_controls/edit_product.php";
    var vars = "product_id=" + product_id;

    edit.open("POST", url, true);



    edit.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    edit.onreadystatechange = function() {
        if (edit.readyState == 4 && edit.status == 200) {
            var data = edit.responseText;
            console.log(data);
            document.getElementById('edittab').innerHTML = data;
            document.getElementById('edittab').style.display = 'block';

        }
    }

    edit.send(vars);

}



function auction(auction) {
    var product_id = auction.id;


    var auction = new XMLHttpRequest();


    var url = "ajax_controls/auction_product.php";
    var vars = "product_id=" + product_id;

    auction.open("POST", url, true);



    auction.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    auction.onreadystatechange = function() {
        if (auction.readyState == 4 && auction.status == 200) {
            var data = auction.responseText;
            console.log(data);
            document.getElementById('msg').innerHTML = data;


        }
    }

    auction.send(vars);

}



function remove(remove) {
    var product_id = remove.id;


    var remove = new XMLHttpRequest();


    var url = "ajax_controls/remove_product.php";
    var vars = "product_id=" + product_id;

    remove.open("POST", url, true);



    remove.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    remove.onreadystatechange = function() {
        if (remove.readyState == 4 && remove.status == 200) {
            var data = remove.responseText;
            console.log(data);
            document.getElementById('msg').innerHTML = data;


        }
    }

    remove.send(vars);

}
</script>



<script>
function close_form() {
    edittab.style.display = 'none'
    productTable.classList.remove('blur')
}


$("#hide-fap").hide();

function edit_post() {



    var edit_category = $("#edit_category").val();
    var edit_name = $("#edit_name").val();
    var edit_color = $("#edit_color").val();
    var edit_brand = $("#edit_brand").val();
    var edit_model = $("#edit_model").val();
    var edit_description = $("#edit_description").val();
    var edit_quantity = $("#edit_quantity").val();
    var edit_price = $("#edit_price").val();
    var edit_image = $("#edit_image").val();



    if (edit_category == "") {
        $("#edit_category").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_category').show();

    } else {
        $("#edit_category").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_category').hide();
    }


    if (edit_name == "") {
        $("#edit_name").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_name').show();

    } else {
        $("#edit_name").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_name').hide();

    }

    if (edit_color == "") {
        $("#edit_color").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_color').show();

    } else {
        $("#edit_color").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_color').hide();

    }

    if (edit_brand == "") {
        $("#edit_brand").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_brand').show();

    } else {
        $("#edit_brand").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_brand').hide();

    }

    if (edit_model == "") {
        $("#edit_model").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_model').show();

    } else {
        $("#edit_model").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_model').hide();

    }



    if (edit_description == "") {
        $("#edit_description").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_description').show();
    } else {
        $("#edit_description").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_description').hide();
    }



    if (edit_quantity == "") {
        $("#edit_quantity").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_quantity').show();
    } else {
        $("#edit_quantity").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_quantity').hide();
    }



    if (edit_price == "") {
        $("#edit_price").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_price').show();
    } else {
        $("#edit_price").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_price').hide();
    }



    if (edit_image == "") {
        $("#edit_image").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-edit_image').show();
    } else {
        $("#edit_image").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-edit_image').hide();
    }



    if (edit_category != "" && edit_description != "" && edit_name != "" && edit_color != "" && edit_brand != "" &&
        edit_model != "" && edit_quantity !=
        "" && edit_price != "" && edit_image != "") {

        $("#hide-fap").show();

        fetch('ajax_controls/edit_insert_product.php', {
                method: 'POST',
                body: new FormData(document.getElementById('edit_form'))
            })
            .then(function(response) {
                return response.text();
                window.scrollTo(0, 0);
            })
            .then(function(text) {
                window.scrollTo(0, 0);
                $('#msg').html(text);
            })

    }
}



function status(e) {
    var id = e.id;
    var vars = 'id=' + id;


    var status_check = new XMLHttpRequest();
    var method = 'POST';
    var url = 'ajax_controls/status_check.php';

    status_check.open(method, url, true);
    status_check.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    status_check.onreadystatechange = function() {
        if (status_check.readyState == 4 && status_check.status == 200) {
            var data = status_check.responseText;
            console.log(data);
            $('#msg').html(data);
            window.scrollTo(0, 0);

        }
    }

    status_check.send(vars);
}
</script>