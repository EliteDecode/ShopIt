<style>
/*-------------------------------------
		1.General css (Reset code)
--------------------------------------*/
* {
    padding: 0;
    margin: 0;
    font-family: "Roboto", sans-serif;

}

* {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
}

/* a,
a:hover,
a:active,
a:focus {
    display: inline-block;
    text-decoration: none;
    color: #616060;
    font-size: 16px;
    padding: 0;
    font-weight: 500;
} */


sup {
    border: 1px solid var(--green);
    padding: 0px 3px !important;
    border-radius: 50%;
    margin-left: -5px;
    color: var(--white);
    background: var(--dark_green);
    font-weight: bold;
}

a {
    text-decoration: none !important;
}

a:hover {
    color: var(--green) !important;
}

ul {
    padding: 0;
    margin: 0 auto;
    list-style: none;
}

ul li {
    list-style: none;
}

select,
input,
textarea,
button {
    box-shadow: none;
    outline: 0 !important;
}


[placeholder]:focus::-webkit-input-placeholder {
    -webkit-transition: opacity 0.3s 0.3s ease;
    -moz-transition: opacity 0.3s 0.3s ease;
    -ms-transition: opacity 0.3s 0.3s ease;
    -o-transition: opacity 0.3s 0.3s ease;
    transition: opacity 0.3s 0.3s ease;
    opacity: 0;
}


:root {
    --green: #3AAFA9;
    --dark: #17252A;
    --white: #FEFFFF;
    --dark_green: #2b7a78;
}

.green {
    color: #3AAFA9 !important;
}

.dark-green {
    color: #2b7a78;
}

.dark {
    color: #17252A;
}

.white {
    color: #FEFFFF;
}

.grey_white {
    color: #a3abab;
}

.bg_green {
    background: #3AAFA9;
}

.bg_dark-green {
    background: #2b7a78;
}

.bg_light_green {
    background: #3aafa98c;
}

.bg_dark {
    background: #17252A;
}

.bg_white {
    background: #FEFFFF;
}

.font-12 {
    font-size: 12px;
}

.font-10 {
    font-size: 10px;
}

.font-14 {
    font-size: 14px;
}

.font-16 {
    font-size: 16px;
}

.font-20 {
    font-size: 20px;
}

.font-22 {
    font-size: 22px;
}

.bold {
    font-weight: bold;
}

.light {
    font-weight: 600;
}

.btn-shop {
    background-color: var(--green);
    border: 1px solid var(--green);
    color: var(--white);
}

.btn-shop-alt {
    background-color: var(--white);
    border: 2px solid var(--green);
    color: var(--green);
}

.btn-shop-alt:hover {
    transition: .7s ease all;
    background-color: var(--green);
    border: 2px solid var(--green);
    color: var(--white);
}

.border-green {
    border: 1px solid var(--green);
}

/*universal*/



/* Nav content */

.nav_content {
    width: 100%;
    height: 700px;
    position: absolute;
    z-index: 5;
    display: none;
    margin-top: -5% !important;
    padding: 30px 0px
}

.close_btn>i {
    font-size: 28px;
    font-weight: lighter;
    margin-top: 25%;
    cursor: pointer;
    color: #fff;
}

.close_btn {
    border: 1px solid rgba(0, 0, 0, 0.5);
    height: 700px;
    background-color: rgba(24, 24, 24, 0.9);
}

.content {
    border: 1px solid var(--green) !important;
    height: 700px;
    background-color: var(--green) !important;
    color: #fff !important;
}

.sign_in {
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    height: 30px;
    margin-left: -16px;
    width: 300px;
}

.showNav {
    display: block;
    overflow: hidden;
}

.hideNav {
    display: none;
}




.accounts {
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    height: 160px;
    margin-left: -16px;
    width: 300px;
}

.accounts>.container {
    margin-top: 5%;
}


.accounts>.container>ul>li {
    list-style-type: none;
    margin-bottom: 6%;
}

.accounts>.container>ul>li>img {
    width: 9%;
    color: var(--white) !important;
}

.accounts>.container>ul>li>a {
    text-decoration: none;
    font-size: 14px;
    margin-left: 3%;
    color: #fff !important;
}

.explores {
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    height: 290px;
    margin-left: -16px;
    width: 300px;
}

.explores>.container {
    margin-top: 5%;
}



.explores>.container>ul {
    clear: both;
}

.explores>.container>ul>li {
    list-style-type: none;
    margin-bottom: 6%;
}

.explores>.container>ul>li>img {
    width: 9%;
    color: var(--white) !important;
}

.explores>.container>ul>li>a {
    text-decoration: none;
    font-size: 14px;
    margin-left: 3%;
    color: #fff !important;
}

.nav_footer {
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    height: 160px;
    margin-left: -16px;
    width: 300px;
}

.nav_footer>.container>ul>li {
    list-style-type: none;
    margin-bottom: 6%;
    margin-top: 5%;
}

.nav_footer>.container>ul {
    margin-top: 10%;
}

.nav_footer>.container>ul>li>a {
    text-decoration: none;
    font-size: 14px;
    margin-left: 3%;
    color: var(--white);
}

/*end*/

/*background region */
.background {
    min-height: 640px;
    width: 100%;
    background-repeat: no-repeat;
    background-position: 800px 98px;
    z-index: 0;
}

.bg1 {
    background-image: url("./images/index_image/banner.jpg");
    background-repeat: no-repeat;
    min-height: 640px;
    background-size: cover;
    background-position: 0px -248px;
    background-color: rgba(0, 0, 0, 0.45);
    background-blend-mode: overlay;
}

.bg2 {
    background-image: url("./images/index_image/banner2.jpg");
    background-repeat: no-repeat;
    min-height: 640px;
    background-size: cover;
    background-position: 0px -248px;
    background-color: rgba(0, 0, 0, 0.45);
    background-blend-mode: overlay;
}


.bg3 {
    background-image: url("./images/index_image/banner3.jpg");
    background-repeat: no-repeat;
    min-height: 640px;
    background-size: cover;
    background-position: 0px -208px;
    background-color: rgba(0, 0, 0, 0.45);
    background-blend-mode: overlay;
}

.background_content h5 {
    text-transform: capitalize;
    width: 50%;
    font-size: 30px;
    font-weight: bolder;
    color: rgb(73, 98, 112);
}

.background_content {
    transform: translateY(250px);
    margin-left: 200px;
}


/* explore category section */



/* new arrivals session */
/*universal product design*/



/* accessories section */
.feature_categories {
    height: 400px;
}

.feature_details {
    height: 120px;
    margin-bottom: 0%;
    text-align: center;
    margin-top: -7%;
}

.feature_details>a>img {
    width: 50%;
}

.feature_details2 {
    height: 120px;
    margin-bottom: 10%;
}

.feature_details2>a>img {
    width: 50%;
    margin-left: 75%;
    margin-top: 10%;
}

.feature_categories>.containers>h3 {
    text-transform: uppercase;
    font-size: 18px;
    color: var(--white);
    margin-bottom: 10%;
    font-weight: 500;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}

/*footer session */

.footer {
    text-align: center;
    border: 1px solid var(--dark);
    height: 200px;
    width: 100%;
    margin-top: 5% !important;
    background-color: var(--dark);
}

.footer_container {
    width: 95%;
    margin: 5% 1%;
}

.footer>.footer_container>.row>.col-4>h4 {
    font-size: 12px;
    font-weight: bold;
    color: #fff;
}

.footer>.footer_container>.row>.col-4>ul>li {
    list-style-type: none;
}

.footer>.footer_container>.row>.col-4>ul>li a {
    font-size: 9.5px;
    color: #fff;
    text-decoration: none;
}

@media (max-width: 767px) and (min-width: 0px) {
    #explore_mob {
        display: block !important;
    }

    #explore_desk {
        display: none;
    }

    .arrivals-desk {
        display: none;
    }

    .arrivals-mob {
        display: block !important;
    }

    .advert-mob {
        display: block !important;
    }

    .advert-desk {
        display: none;
    }
}

@media (max-width: 523px) and (min-width: 0px) {

    .banner__content .container p {
        font-size: 14px !important;
        opacity: .75 !important;
    }


    .bg1 {
        background-image: url("./images/index_image/banner.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: -430px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }

    .bg2 {
        background-image: url("./images/index_image/banner2.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: -430px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }


    .bg3 {
        background-image: url("./images/index_image/banner3.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: -320px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }

    .desktop_products_tab {
        display: none;
    }

    .mobile_products_tab {
        display: block !important;
    }

    .containers {
        width: 90%;
        margin: 0% 5%;
    }

    #desk-bars {
        display: none !important;
    }

    #mob-bars {
        display: block !important;
        margin-top: -4px;
    }

    .brand h5 {
        padding-top: 5px;
        font-size: 21px;
    }



    .brand button i {
        font-size: 20px;
        font-weight: lighter;
        padding-top: 5px !important;
    }

    .nav-icons {
        display: none !important;
    }

    #cart-mob {
        display: block !important;
    }

    .bars .login a button {
        font-size: 12px !important;
    }

    /* Nav content */

    .nav_content {
        width: 100%;
        height: 700px;
        position: absolute;
        z-index: 5;
        margin-top: -17% !important;
        display: none;
    }

    .close_btn>i {
        font-size: 28px;
        font-weight: lighter;
        margin-top: 110%;
        color: #fff;
    }

    .close_btn {
        border: 1px solid rgba(0, 0, 0, 0.5);
        height: 700px;
        background-color: rgba(24, 24, 24, 0.9);
    }

    .content {
        border: 1px solid #fff;
        height: 700px;
        background-color: #fff;
    }

    .sign_in {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 30px;
        margin-left: -16px;
        width: 300px;
    }

    .showNav {
        display: block;
        overflow: hidden;
    }

    .hideNav {
        display: none;
    }

    .sign_in>i {
        font-size: 20px;
        margin-left: 10%;
        margin-top: -2.3%;
        color: #fff;
        background-color: rgb(255, 114, 0);
        padding: 2% 3%;
        border-radius: 100%;
        float: left;
        margin-right: 3%;
    }

    .sign_in>h5 {
        margin-top: 6%;
        color: var(--white);
        font-weight: 500;
        font-size: 16px;
    }

    .sign_in>h5>a {
        color: var(--white);
        text-decoration: none;
    }

    .accounts {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .accounts>.container {
        margin-top: 5%;
    }

    .accounts>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .accounts>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .accounts>.container>ul {
        clear: both;
    }

    .accounts>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .accounts>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .accounts>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .explores {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 290px;
        margin-left: -16px;
        width: 300px;
    }

    .explores>.container {
        margin-top: 5%;
    }

    .explores>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .explores>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .explores>.container>ul {
        clear: both;
    }

    .explores>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .explores>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .explores>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .nav_footer {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .nav_footer>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
        margin-top: 5%;
    }

    .nav_footer>.container>ul {
        margin-top: 10%;
    }

    .nav_footer>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    /*background region */
    .background {
        min-height: 540px;
        width: 100%;
        background-image: url("../images/index_image/ojahi_image.png");
        background-repeat: no-repeat;
        background-position: 100px 0px;
    }

    .background_content h5 {
        text-transform: capitalize;
        width: 50%;
        font-size: 25px;
        font-weight: bolder;
        color: rgb(73, 98, 112);
    }



    .show>img {
        width: 100%;
        position: absolute;
        margin-left: -8.9%;
        height: 294px;
    }

    /* accessories section */
    .explore_categories {
        height: 350px;
        display: none;
    }

    .explore_categories_desk {
        height: 350px;
    }

    .explore_details {
        height: 120px;
        text-align: center;
    }

    .explore_details>a>img {
        width: 120%;
        margin-left: -16%;
    }

    .explore_details2>a>img {
        width: 120% !important;
        margin-left: -60%;
    }

    .shift_cont {
        margin-left: 29% !important;
    }

    .explore_details>h5 {
        text-transform: capitalize;
        font-size: 11px;
        margin-left: -6%;
        margin-top: -7%;
        color: var(--white);
    }

    .explore_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .explore_details2>h5 {
        color: var(--white);
        text-transform: capitalize;
        font-size: 11px;
        margin-top: -6%;
        margin-left: -25%;
    }

    .explore_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 500;
        color: var(--white);
        margin-bottom: 10%;
    }

    /* new arrivals session */
    /*universal product design*/

    .products {
        height: 220px;
    }

    .products>.header>h3 {
        width: 90%;
        margin: 0% 5%;
        text-transform: uppercase;
        font-size: 18px;
        color: #fff;
        font-weight: 490;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    .products>.header {
        border: 1px solid var(--dark);
        padding: 0.9% 3%;
        background-color: var(--dark);
    }

    .products>.container_product>.row {
        text-align: center;
    }

    .container_product {
        width: 90%;
        margin: 0% 5%;
    }

    .products>.container_product>.row>.col-4>a>img {
        width: 100%;
        margin-top: 33% !important;
    }

    .product_ratings {
        margin-top: 10%;
    }

    .product_ratings>i {
        font-size: 10px;

    }

    .product_title {
        font-size: 9px;
        text-transform: capitalize;
    }

    .product_price {
        font-size: 9.9px;
        margin-top: -4%;
    }

    /* accessories section */
    .feature_categories {
        height: 300px;
        margin-top: 10%;
    }

    .feature_details {
        height: 120px;
        margin-bottom: 0%;
        text-align: center;
        margin-top: -7%;
    }

    .feature_details>a>img {
        width: 160%;
        margin-left: -33%;
    }

    .feature_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .feature_details2>a>img {
        width: 160%;
        margin-left: 35%;
    }

    .feature_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        color: var(--white);
        margin-bottom: 10%;
        font-weight: 500;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    /*footer session */

    .footer {
        border: 1px solid var(--dark);
        height: 230px;
        width: 100%;
        margin-top: 0%;
        background-color: var(--dark);
    }

    .footer_container {
        width: 95%;
        margin: 5% 1%;
    }

    .footer>.footer_container>.row>.col-4>h4 {
        font-size: 12px;
        font-weight: bold;
        color: #fff;
    }

    .footer>.footer_container>.row>.col-4>ul>li {
        list-style-type: none;
    }

    .footer>.footer_container>.row>.col-4>ul>li a {
        font-size: 9.5px;
        color: #fff;
        text-decoration: none;
    }
}

@media (max-width: 765px) and (min-width: 524px) {

    .banner__content .container p {
        font-size: 14px !important;
        opacity: .75 !important;
    }


    .bg1 {
        background-image: url("./images/index_image/banner.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: -180px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }

    .bg2 {
        background-image: url("./images/index_image/banner2.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: -180px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }


    .bg3 {
        background-image: url("./images/index_image/banner3.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: -90px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }

    .containers {
        width: 85%;
        margin: 0% 7.5%;
    }

    .desktop_products_tab {
        display: none;
    }

    .mobile_products_tab {
        display: block !important;
    }




    /* Nav content */

    .nav_content {
        width: 100%;
        height: 700px;
        position: absolute;
        z-index: 5;
        display: none;
        top: -3.5% !important;
    }

    .close_btn>i {
        font-size: 28px;
        font-weight: lighter;
        margin-top: 37%;
        color: #fff;
    }

    .close_btn {
        border: 1px solid rgba(0, 0, 0, 0.5);
        height: 700px;
        background-color: rgba(24, 24, 24, 0.9);
    }

    .content {
        border: 1px solid #fff;
        height: 700px;
        background-color: #fff;
    }

    .sign_in {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 30px;
        margin-left: -16px;
        width: 300px;
    }

    .showNav {
        display: block;
        overflow: hidden;
    }

    .hideNav {
        display: none;
    }

    .sign_in>i {
        font-size: 20px;
        margin-left: 10%;
        margin-top: -2.3%;
        color: #fff;
        background-color: rgb(255, 114, 0);
        padding: 2% 3%;
        border-radius: 100%;
        float: left;
        margin-right: 3%;
    }

    .sign_in>h5 {
        margin-top: 6%;
        color: var(--white);
        font-weight: 500;
        font-size: 16px;
    }

    .sign_in>h5>a {
        color: var(--white);
        text-decoration: none;
    }

    .accounts {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .accounts>.container {
        margin-top: 5%;
    }

    .accounts>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .accounts>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .accounts>.container>ul {
        clear: both;
    }

    .accounts>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .accounts>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .accounts>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .explores {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 290px;
        margin-left: -16px;
        width: 300px;
    }

    .explores>.container {
        margin-top: 5%;
    }

    .explores>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .explores>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .explores>.container>ul {
        clear: both;
    }

    .explores>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .explores>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .explores>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .nav_footer {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .nav_footer>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
        margin-top: 5%;
    }

    .nav_footer>.container>ul {
        margin-top: 10%;
    }

    .nav_footer>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    /*end*/

    /*background region */
    .background {
        min-height: 640px;
        width: 100%;
        background-image: url("../images/index_image/ojahi_image.png");
        background-repeat: no-repeat;
        background-position: 250px 0px;
    }

    .background_content h5 {
        text-transform: capitalize;
        width: 100%;
        font-size: 25px;
        font-weight: bolder;
        color: rgb(73, 98, 112);
        margin-left: -60%;
    }

    .btn-ojahi {
        background-color: rgb(255, 114, 0);
        border-color: rgb(255, 114, 0);
        text-transform: capitalize;
        font-weight: bold;
        margin-left: -60%;
    }

    .background_content {
        transform: translateY(250px);
    }

    /* third section. bg headers*/


    /* accessories section */
    .explore_categories {
        height: 350px;
        display: none;
    }

    .explore_categories_desk {
        height: 350px;
    }

    .explore_details {
        height: 120px;
        margin-bottom: 7%;
        text-align: center;
    }

    .explore_details>a>img {
        width: 80%;
        margin-left: -20%;
    }

    .explore_details2>a>img {
        width: 80% !important;
        margin-left: 0%;
    }

    .explore_details>h5 {
        text-transform: capitalize;
        font-size: 16px;
        margin-left: -16%;
        margin-top: -7%;
        color: var(--white);
    }

    .explore_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .explore_details2>h5 {
        color: var(--white);
        text-transform: capitalize;
        font-size: 16px;
        margin-top: -5%;
    }

    .explore_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 500;
        color: var(--white);
        margin-bottom: 10%;
    }

    /* new arrivals session */
    /*universal product design*/

    .products {
        height: 300px;
    }

    .products>.header>h3 {
        width: 90%;
        margin: 0% 5%;
        text-transform: uppercase;
        font-size: 18px;
        color: #fff;
        font-weight: 490;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    .products>.header {
        border: 1px solid var(--dark);
        padding: 0.9% 3%;
        background-color: var(--dark);
    }

    .products>.container_product>.row {
        text-align: center;
    }

    .container_product {
        width: 90%;
        margin: 0% 5%;
    }

    .products>.container_product>.row>.col-4>a>img {
        width: 60%;
        align-items: center;
        margin-top: 55px;
    }

    .product_ratings {
        margin-top: 1%;
    }

    .product_ratings>i {
        font-size: 14px;

    }

    .product_title {
        font-size: 13px;
        text-transform: capitalize;
    }

    .product_price {
        font-size: 13.9px;
    }

    /* accessories section */
    .feature_categories {
        height: 350px;
    }

    .feature_details {
        height: 120px;
        margin-bottom: 0%;
        text-align: center;
        margin-top: -7%;
    }

    .feature_details>a>img {
        width: 80%;
    }

    .feature_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .feature_details2>a>img {
        width: 80%;
        margin-left: 70%;
        margin-top: 10%;
    }

    .feature_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        color: var(--white);
        margin-bottom: 10%;
        font-weight: 500;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    /*footer session */

    .footer {
        text-align: center;
        border: 1px solid var(--dark);
        height: 200px;
        width: 100%;
        margin-top: 0%;
        background-color: var(--dark);
    }

    .footer_container {
        width: 95%;
        margin: 5% 1%;
    }

    .footer>.footer_container>.row>.col-4>h4 {
        font-size: 12px;
        font-weight: bold;
        color: #fff;
    }

    .footer>.footer_container>.row>.col-4>ul>li {
        list-style-type: none;
    }

    .footer>.footer_container>.row>.col-4>ul>li a {
        font-size: 9.5px;
        color: #fff;
        text-decoration: none;
    }
}

@media (max-width: 990px) and (min-width: 765px) {
    .banner__content .container p {
        font-size: 14px !important;
        opacity: .75 !important;
    }


    .bg1 {
        background-image: url("./images/index_image/banner.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: 0px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }

    .bg2 {
        background-image: url("./images/index_image/banner2.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: 0px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }


    .bg3 {
        background-image: url("./images/index_image/banner3.jpg");
        background-repeat: no-repeat;
        height: 640px;
        background-size: cover;
        background-position: 0px 0px;
        background-color: rgba(0, 0, 0, 0.65);
        background-blend-mode: overlay;
    }

    .containers {
        width: 85%;
        margin: 0% 7.5%;
    }



    /* Nav content */

    .nav_content {
        width: 100%;
        height: 700px;
        position: absolute;
        z-index: 5;
        margin-top: 9%;
        display: none;
    }

    .close_btn>i {
        font-size: 28px;
        font-weight: lighter;
        margin-top: 30%;
        color: #fff;
    }

    .close_btn {
        border: 1px solid rgba(0, 0, 0, 0.5);
        height: 700px;
        background-color: rgba(24, 24, 24, 0.9);
    }

    .content {
        border: 1px solid #fff;
        height: 700px;
        background-color: #fff;
    }

    .sign_in {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 30px;
        margin-left: -16px;
        width: 300px;
    }

    .showNav {
        display: block;
        overflow: hidden;
    }

    .hideNav {
        display: none;
    }

    .sign_in>i {
        font-size: 20px;
        margin-left: 10%;
        margin-top: -2.3%;
        color: #fff;
        background-color: rgb(255, 114, 0);
        padding: 2% 3%;
        border-radius: 100%;
        float: left;
        margin-right: 3%;
    }

    .sign_in>h5 {
        margin-top: 6%;
        color: var(--white);
        font-weight: 500;
        font-size: 16px;
    }

    .sign_in>h5>a {
        color: var(--white);
        text-decoration: none;
    }

    .accounts {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .accounts>.container {
        margin-top: 5%;
    }

    .accounts>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .accounts>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .accounts>.container>ul {
        clear: both;
    }

    .accounts>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .accounts>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .accounts>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .explores {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 290px;
        margin-left: -16px;
        width: 300px;
    }

    .explores>.container {
        margin-top: 5%;
    }

    .explores>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .explores>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .explores>.container>ul {
        clear: both;
    }

    .explores>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .explores>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .explores>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .nav_footer {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .nav_footer>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
        margin-top: 5%;
    }

    .nav_footer>.container>ul {
        margin-top: 10%;
    }

    .nav_footer>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    /*background region */
    .background {
        min-height: 540px;
        width: 100%;
        background-image: url("../images/index_image/ojahi_image.png");
        background-repeat: no-repeat;
        background-position: 400px 0px;
    }

    .background_content h5 {
        text-transform: capitalize;
        width: 50%;
        font-size: 25px;
        font-weight: bolder;
        color: rgb(73, 98, 112);
    }

    .btn-ojahi {
        background-color: rgb(255, 114, 0);
        border-color: rgb(255, 114, 0);
        text-transform: capitalize;
        font-weight: bold;
    }

    .background_content {
        transform: translateY(250px);
        margin-left: 0px;
    }

    /* third section. bg headers*/

    /* accessories section */
    .explore_categories {
        height: 350px;
        display: none;
    }

    .explore_categories_desk {
        height: 450px;
    }

    .explore_details {
        height: 120px;
        margin-bottom: 7%;
        text-align: center;
    }

    .explore_details>a>img {
        width: 80%;
        margin-left: -20%;
    }

    .explore_details2>a>img {
        width: 80% !important;
        margin-left: 0%;
    }

    .explore_details>h5 {
        text-transform: capitalize;
        font-size: 16px;
        margin-left: -16%;
        margin-top: -7%;
        color: var(--white);
    }

    .explore_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .explore_details2>h5 {
        color: var(--white);
        text-transform: capitalize;
        font-size: 16px;
        margin-top: -5%;
        margin-left: 25%;
    }

    .explore_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 500;
        color: var(--white);
        margin-bottom: 10%;
    }

    /* new arrivals session */
    /*universal product design*/

    .products {
        height: 300px;
    }

    .products>.header>h3 {
        width: 90%;
        margin: 0% 5%;
        text-transform: uppercase;
        font-size: 18px;
        color: #fff;
        font-weight: 490;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    .products>.header {
        border: 1px solid var(--dark);
        padding: 0.9% 3%;
        background-color: var(--dark);
    }

    .products>.container_product>.row {
        text-align: center;
    }

    .container_product {
        width: 90%;
        margin: 0% 5%;
    }

    .products>.container_product>.row>.col-4>a>img {
        width: 60%;
        align-items: center;
        margin-top: 55px;
    }

    .product_ratings {
        margin-top: 1%;
    }

    .product_ratings>i {
        font-size: 14px;

    }

    .product_title {
        font-size: 13px;
        text-transform: capitalize;
    }

    .product_price {
        font-size: 13.9px;
    }

    /* accessories section */

    /* accessories section */
    .feature_categories {
        height: 350px;
    }

    .feature_details {
        height: 120px;
        margin-bottom: 0%;
        text-align: center;
        margin-top: -7%;
    }

    .feature_details>a>img {
        width: 80%;
    }

    .feature_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .feature_details2>a>img {
        width: 80%;
        margin-left: 70%;
        margin-top: 10%;
    }

    .feature_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        color: var(--white);
        margin-bottom: 10%;
        font-weight: 500;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    /*footer session */

    .footer {
        text-align: center;
        border: 1px solid var(--dark);
        height: 300px;
        width: 100%;
        margin-top: 0%;
        background-color: var(--dark);
    }

    .footer_container {
        width: 95%;
        margin: 5% 1%;
    }

    .footer>.footer_container>.row>.col-4>h4 {
        font-size: 12px;
        font-weight: bold;
        color: #fff;
    }

    .footer>.footer_container>.row>.col-4>ul>li {
        list-style-type: none;
    }

    .footer>.footer_container>.row>.col-4>ul>li a {
        font-size: 9.5px;
        color: #fff;
        text-decoration: none;
    }
}

@media (max-width: 1200px) and (min-width: 991px) {

    .bg1 {
        background-image: url("./images/index_image/banner.jpg");
        background-repeat: no-repeat;
        min-height: 640px;
        background-size: cover;
        background-position: 0px -128px;
        background-color: rgba(0, 0, 0, 0.45);
        background-blend-mode: overlay;
    }

    .bg2 {
        background-image: url("./images/index_image/banner2.jpg");
        background-repeat: no-repeat;
        min-height: 640px;
        background-size: cover;
        background-position: 0px -128px;
        background-color: rgba(0, 0, 0, 0.45);
        background-blend-mode: overlay;
    }


    .bg3 {
        background-image: url("./images/index_image/banner3.jpg");
        background-repeat: no-repeat;
        min-height: 640px;
        background-size: cover;
        background-position: 0px -78px;
        background-color: rgba(0, 0, 0, 0.45);
        background-blend-mode: overlay;
    }

    .containers {
        width: 85%;
        margin: 0% 7.5%;
    }



    /* Nav content */

    .nav_content {
        width: 100%;
        height: 700px;
        position: absolute;
        z-index: 5;
        margin-top: 7%;
        display: none;
    }

    .close_btn>i {
        font-size: 28px;
        font-weight: lighter;
        margin-top: 30%;
        color: #fff;
    }

    .close_btn {
        border: 1px solid rgba(0, 0, 0, 0.5);
        height: 700px;
        background-color: rgba(24, 24, 24, 0.9);
    }

    .content {
        border: 1px solid #fff;
        height: 700px;
        background-color: #fff;
    }

    .sign_in {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 30px;
        margin-left: -16px;
        width: 300px;
    }

    .showNav {
        display: block;
        overflow: hidden;
    }

    .hideNav {
        display: none;
    }

    .sign_in>i {
        font-size: 20px;
        margin-left: 10%;
        margin-top: -2.3%;
        color: #fff;
        background-color: rgb(255, 114, 0);
        padding: 2% 3%;
        border-radius: 100%;
        float: left;
        margin-right: 3%;
    }

    .sign_in>h5 {
        margin-top: 6%;
        color: var(--white);
        font-weight: 500;
        font-size: 16px;
    }

    .sign_in>h5>a {
        color: var(--white);
        text-decoration: none;
    }

    .accounts {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .accounts>.container {
        margin-top: 5%;
    }

    .accounts>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .accounts>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .accounts>.container>ul {
        clear: both;
    }

    .accounts>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .accounts>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .accounts>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .explores {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 290px;
        margin-left: -16px;
        width: 300px;
    }

    .explores>.container {
        margin-top: 5%;
    }

    .explores>.container>h5 {
        font-size: 17px;
        float: left;
        margin-bottom: 5%;
        color: rgb(255, 114, 0);
    }

    .explores>.container>a {
        text-decoration: underline;
        float: right;
        font-size: 11px;
        margin-top: 0%;
        color: var(--white);
    }

    .explores>.container>ul {
        clear: both;
    }

    .explores>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
    }

    .explores>.container>ul>li>img {
        width: 9%;
        color: var(--white);
    }

    .explores>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    .nav_footer {
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        height: 160px;
        margin-left: -16px;
        width: 300px;
    }

    .nav_footer>.container>ul>li {
        list-style-type: none;
        margin-bottom: 6%;
        margin-top: 5%;
    }

    .nav_footer>.container>ul {
        margin-top: 10%;
    }

    .nav_footer>.container>ul>li>a {
        text-decoration: none;
        font-size: 14px;
        margin-left: 3%;
        color: var(--white);
    }

    /*background region */
    .background {
        min-height: 540px;
        width: 100%;
        background-image: url("../images/index_image/ojahi_image.png");
        background-repeat: no-repeat;
        background-position: 620px 0px;
    }

    .background_content h5 {
        text-transform: capitalize;
        width: 50%;
        font-size: 25px;
        font-weight: bolder;
        color: rgb(73, 98, 112);
    }

    .btn-ojahi {
        background-color: rgb(255, 114, 0);
        border-color: rgb(255, 114, 0);
        text-transform: capitalize;
        font-weight: bold;
    }

    .background_content {
        transform: translateY(250px);
        margin-left: 30px;
    }

    /* third section. bg headers*/


    /* accessories section */
    .explore_categories {
        height: 350px;
        display: none;
    }

    .explore_categories_desk {
        height: 450px;
    }

    .explore_details {
        height: 120px;
        margin-bottom: 7%;
        text-align: center;
    }

    .explore_details>a>img {
        width: 60%;
        margin-left: -20%;
    }

    .explore_details2>a>img {
        width: 60% !important;
        margin-left: 0%;
    }

    .explore_details>h5 {
        text-transform: capitalize;
        font-size: 16px;
        margin-left: -18%;
        margin-top: -7%;
        color: var(--white);
    }

    .explore_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .explore_details2>h5 {
        color: var(--white);
        text-transform: capitalize;
        font-size: 16px;
        margin-top: -5%;
        margin-left: 19%;
    }

    .explore_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        font-weight: 500;
        color: var(--white);
        margin-bottom: 10%;
    }

    /* new arrivals session */
    /*universal product design*/

    .products {
        height: 300px;
    }

    .products>.header>h3 {
        width: 90%;
        margin: 0% 5%;
        text-transform: uppercase;
        font-size: 18px;
        color: #fff;
        font-weight: 490;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    .products>.header {
        border: 1px solid var(--dark);
        padding: 0.9% 3%;
        background-color: var(--dark);
    }

    .products>.container_product>.row {
        text-align: center;
    }

    .container_product {
        width: 90%;
        margin: 0% 5%;
    }

    .products>.container_product>.row>.col-4>a>img {
        width: 60%;
        align-items: center;
        margin-top: 55px;
    }

    .product_ratings {
        margin-top: 1%;
    }

    .product_ratings>i {
        font-size: 14px;

    }

    .product_title {
        font-size: 13px;
        text-transform: capitalize;
    }

    .product_price {
        font-size: 13.9px;
    }

    /* accessories section */

    /* accessories section */
    .feature_categories {
        height: 350px;
    }

    .feature_details {
        height: 120px;
        margin-bottom: 0%;
        text-align: center;
        margin-top: -7%;
    }

    .feature_details>a>img {
        width: 60%;
    }

    .feature_details2 {
        height: 120px;
        margin-bottom: 10%;
    }

    .feature_details2>a>img {
        width: 60%;
        margin-left: 75%;
        margin-top: 10%;
    }

    .feature_categories>.containers>h3 {
        text-transform: uppercase;
        font-size: 18px;
        color: var(--white);
        margin-bottom: 10%;
        font-weight: 500;
        font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
            "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
    }

    /*footer session */

    .footer {
        text-align: center;
        border: 1px solid var(--dark);
        height: 230px;
        width: 100%;
        margin-top: 0%;
        background-color: var(--dark);
    }

    .footer_container {
        width: 95%;
        margin: 5% 1%;
    }

    .footer>.footer_container>.row>.col-4>h4 {
        font-size: 12px;
        font-weight: bold;
        color: #fff;
    }

    .footer>.footer_container>.row>.col-4>ul>li {
        list-style-type: none;
    }

    .footer>.footer_container>.row>.col-4>ul>li a {
        font-size: 9.5px;
        color: #fff;
        text-decoration: none;
    }
}
</style>