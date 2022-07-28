<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}



:root {
    --green: #3AAFA9;
    --dark: #17252A;
    --white: #FEFFFF;
    --dark_green: #2b7a78;
}

.green {
    color: #3AAFA9;
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





/*end*/

/* checkout session */

.checkout {
    height: 1250px;
}

.checkout_header {
    border-bottom: 1px solid rgba(217, 226, 233, 0.733);
    display: flex;
    margin-top: 5%;
    padding: 2%;
    color: var(--green);
}

.checkout_header>h4 {
    font-size: 18px;
    font-weight: bolder;
    margin-right: 2%;
}

.checkout_header>i {
    font-size: 22px;
    margin-top: -.1%;
}



.delivery_details {
    margin-top: 7%;
}

.delivery_details>h4 {
    font-size: 19px;
    text-transform: uppercase;
    color: rgb(6, 56, 82);
}

.delivery_details>p {
    font-size: 13px;
    color: rgba(56, 66, 73, 0.733);
}

.delivery_details>h5 {
    font-size: 14px;
    margin-top: 6%;
    color: rgb(6, 56, 82);
    text-transform: capitalize;
}

.product_details {
    margin-top: 15%;
}

.product_details>h4 {
    font-size: 19px;
    text-transform: uppercase;
    color: rgb(6, 56, 82);
}

.product_details>p {
    font-size: 13px;
    color: rgba(56, 66, 73, 0.733);
}

.product_details>h6 {
    font-size: 10px;
    margin-top: 6%;
    text-transform: capitalize;
    color: rgb(6, 56, 82);
}


.ojahi_btn {
    font-size: 12px;
    padding: 3% 7% 3% 7%;
    border: none;
    text-transform: uppercase;
    color: #fff;
    margin-bottom: 10%;
    border: 1px solid var(--green);
    color: rgb(6, 56, 82);
    font-weight: bolder;
    text-decoration: none;
}

a.ojahi_button_link {
    text-decoration: none;
}

.payment_method>h5 {
    font-size: 19px;
    text-transform: uppercase;
    color: rgb(6, 56, 82);
    margin-top: 10%;
    margin-bottom: 6%;
}

.payment_card {
    margin-bottom: 2%;
    margin-left: -5px;
}

.radio {
    margin-top: 6px;
    background-color: var(--green);
    margin-left: 18px;
}



/*footer session */

.footer {
    border: 1px solid rgb(6, 56, 82);
    height: 60px;
    width: 100%;
    margin-top: 0%;
    background-color: rgb(6, 56, 82);

}

.footer_container {
    width: 95%;
    margin: 0% 1%;

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
    font-size: 7px;
    color: #fff;
    text-decoration: none;
    text-transform: uppercase;
}











@media(max-width:523px) and (min-width:0px) {

    .containers {
        width: 85%;
        margin: 0% 7.5%;
    }

    .navigation {
        width: auto;
        min-height: 60px;
        background-color: rgb(6, 56, 82)
    }

    .navigation_brand {
        width: 100%;
        height: 60px;
        color: #fff;
        margin-left: 5%;

    }

    .navigation_brand>a>img {
        width: 28%;
        margin-left: -10%;
        margin-top: 1.5%;
    }




    /*end*/

    /* checkout session */

    .checkout {
        height: 650px;
    }

    .checkout_header {
        border-bottom: 1px solid rgba(217, 226, 233, 0.733);
        display: flex;
        margin-top: 5%;
        padding: 2%;
        color: var(--green);
    }

    .checkout_header>h4 {
        font-size: 18px;
        font-weight: bolder;
        margin-right: 2%;
    }

    .checkout_header>i {
        font-size: 22px;
        margin-top: -.1%;
    }


    .delivery_details {
        margin-top: 7%;
    }

    .delivery_details>h4 {
        font-size: 19px;
        text-transform: uppercase;
        color: rgb(6, 56, 82);
    }

    .delivery_details>p {
        font-size: 13px;
        color: rgba(56, 66, 73, 0.733);
    }

    .delivery_details>h5 {
        font-size: 14px;
        margin-top: 6%;
        color: rgb(6, 56, 82);
        text-transform: capitalize;
    }

    .product_details {
        margin-top: 15%;
    }

    .product_details>h4 {
        font-size: 19px;
        text-transform: uppercase;
        color: rgb(6, 56, 82);
    }

    .product_details>p {
        font-size: 13px;
        color: rgba(56, 66, 73, 0.733);
    }

    .product_details>h6 {
        font-size: 10px;
        margin-top: 6%;
        text-transform: capitalize;
        color: rgb(6, 56, 82);
    }


    .ojahi_btn {
        font-size: 12px;
        padding: 3% 7% 3% 7%;
        border: none;
        text-transform: uppercase;
        color: #fff;
        margin-bottom: 10%;
        border: 1px solid var(--green);
        color: rgb(6, 56, 82);
        font-weight: bolder;
        text-decoration: none;
    }

    a.ojahi_button_link {
        text-decoration: none;
    }



    /*footer session */

    .footer {
        border: 1px solid rgb(6, 56, 82);
        height: 60px;
        width: 100%;
        margin-top: 0%;
        background-color: rgb(6, 56, 82);

    }

    .footer_container {
        width: 95%;
        margin: 0% 1%;

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
        font-size: 7px;
        color: #fff;
        text-decoration: none;
        text-transform: uppercase;
    }
}






@media(max-width:765px) and (min-width:524px) {
    .navigation {
        width: auto;
        min-height: 90px;
        background-color: rgb(6, 56, 82)
    }

    .navigation_brand>a>img {
        width: 25%;
        margin-left: -10%;
        margin-top: 2.5%;
    }


    .checkout {
        height: 850px;
    }
}



@media(max-width:990px) and (min-width:765px) {
    .navigation {
        width: auto;
        min-height: 105px;
        background-color: rgb(6, 56, 82)
    }

    .navigation_brand>a>img {
        width: 20%;
        margin-left: -10%;
        margin-top: 2.5%;
    }


    .checkout {
        height: 850px;
    }

}



@media(max-width:1200px) and (min-width:991px) {
    .navigation {
        width: auto;
        min-height: 110px;
        background-color: rgb(6, 56, 82)
    }

    .navigation_brand>a>img {
        width: 17%;
        margin-left: -10%;
        margin-top: 2%;
    }


    .checkout {
        height: 1050px;
    }

}

.setting_form {
    margin-top: 5%;
}

.radio {
    border: 1px solid rgba(172, 178, 182, 0.733);
    padding: 2%;
    background-color: #fff !important;
}

.radio>span {
    margin-left: 5%;
    font-size: 14px;
    font-weight: bolder;
    position: relative;
    top: -2px;
    text-transform: uppercase;
}

.setting_form>.container>form>button {
    width: 40%;
    margin: 6% 30%;
    padding: 2%;
    border: 1px solid var(--green);
    color: #fff;
    background-color: var(--green);
    font-weight: bolder;
    box-shadow: 3px 2px 3px 1px rgba(26, 23, 23, 0.3);
}

.setting_form>.container>form>button:hover {
    box-shadow: none;
    transition: .6s ease all;
}
</style>