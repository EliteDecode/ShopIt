<!--footer section-->
<section class="footer">
    <div class="footer_container">
        <div class="row">
            <div class="col-4">
                <h4>HELP</h4>

                <ul>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Payment method</a></li>
                    <li><a href="#">Delivery and returns</a></li>
                </ul>

            </div>
            <div class="col-4">
                <h4>ABOUT US</h4>

                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Terms & condition</a></li>
                    <li><a href="#">Policy</a></li>
                </ul>

            </div>
            <div class="col-4">
                <h4>JOIN US NOW</h4>
            </div>
        </div>
    </div>
    <?php 


?>

</section>



<!--end-->
<!--jquery linking-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/aos.js"></script>
<script src="js/wow.min.js"></script>
<!--Bootsrtap js link-->
<script src="js/bootstrap.min.js"></script>


<script>
$(document).ready(function() {
    var owl = $('.new_arrivals');
    owl.owlCarousel({
        loop: true,
        dots: false,
        autoplay: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 3,
                nav: false,
                loop: true

            },
            767: {
                items: 3,
                nav: false,
                loop: true
            },
            1000: {
                items: 5,
                nav: false,
                loop: true
            }
        }
    })
})


$(document).ready(function() {
    var owl = $('.adverts');
    owl.owlCarousel({
        loop: true,
        dots: true,
        autoplay: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: false,
                loop: true

            },
            767: {
                items: 2,
                nav: false,
                loop: true
            },
            1000: {
                items: 2,
                nav: false,
                loop: true
            }
        }
    })
})
</script>


<script>
// wow js
new WOW().init();
//aos
AOS.init({
    duration: 800,
    easing: 'slide',
    once: false,


});
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
//End



count_cart();

function count_cart() {
    var cart_item = $('#cart_item').val();
    $.ajax({
        url: "ajax/count_cart.php",
        method: "get",
        data: {
            cartItem: cart_item
        },
        success: function(data) {
            $("#cart_item_mob").html(data);
            $("#cart_item").html(data);
            console.log(data);
        }
    });
}


//Cart-Count
let plus = document.getElementById('plus-sign');
let minus = document.getElementById('minus-sign');
let cartCount = document.getElementById('cart_count');
var qty = document.getElementById('qty');

plus.addEventListener('click', () => {

    if (cartCount.value < parseInt(qty.value)) {
        cartCount.value = parseInt(cartCount.value) + 1;
    }

});

minus.addEventListener('click', () => {
    if (cartCount.value > 1) {
        cartCount.value = parseInt(cartCount.value) - 1;
    }
});




//add to cart in cart.hml




/*
1.cart product discription
2.Reviews
3.Store information
the click and display script

*/

//The tabs
var descriptionTab = document.querySelector('.descriptionTab');
var reviewTab = document.querySelector('.reviewTab');
var storeTab = document.querySelector('.storeTab');

//The contents

var descriptionTabInfo = document.querySelector('.product_description');
var reviewTabInfo = document.querySelector('.reviews')
var storeTabInfo = document.querySelector('.storeInfo')

//adding events

descriptionTab.addEventListener('click', e => {
    descriptionTabInfo.style.display = "block";
    reviewTabInfo.style.display = "none";
    storeTabInfo.style.display = "none"
});

reviewTab.addEventListener('click', e => {
    descriptionTabInfo.style.display = "none";
    reviewTabInfo.style.display = "block";
    storeTabInfo.style.display = "none"
});

storeTab.addEventListener('click', e => {
    descriptionTabInfo.style.display = "none";
    reviewTabInfo.style.display = "none";
    storeTabInfo.style.display = "block"
});
</script>


</body>

</html>