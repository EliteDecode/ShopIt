<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP IT</title>
</head>
<?php include('includes/header.php');
  include('css/orders_style.php');
?>


<?php 
include('includes/components/navigation.php');
 ?>

<section class="orders">
    <div class="container">

        <a href="customerinfo.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">LOGISTIC STATIONS</h6>
        </a>
    </div>
    <!--in orders css-->
    <div class="logistic">
        <div class="container">
            <div class="logistic_address">
                <h5>Miles Olufemi</h5>
                <p>43, okada New Road off Adesuwa <br> Juction by Nati Filling station, <br> Benin city</p>

                <p>+234 800000000000</p>
            </div>

        </div>

    </div>



</section>

<!--End-->




<script>
//NavBar navigation toggler

var navContent = document.querySelector('.nav_content');
var collapseBar = document.querySelector('.collapse_bar')
var closeBtn = document.querySelector('.close_btn');


collapseBar.addEventListener('click', e => {
    navContent.classList.add('showNav')
    $('body').wrapInner($('<div id = "height-helper"/>').css({
        height: $('.nav_content').height(),
        overflow: "hidden"
    }))
})

closeBtn.addEventListener('click', e => {
    navContent.classList.remove('showNav')
    $('#height-helper').css({
        height: $('body').height(),
        overflow: "visible"
    })
})
</script>