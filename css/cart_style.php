<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}

:root {
    --green: #3aafa9;
    --dark: #17252a;
    --white: #feffff;
}



.green {
    color: #3aafa9 !important;
}

.dark-green {
    color: #2b7a78;
}

.dark {
    color: #17252a;
}

.white {
    color: #feffff;
}

.grey_white {
    color: #a3abab;
}

.bg_green {
    background: #3aafa9;
}

.bg_dark-green {
    background: #2b7a78;
}

.bg_light_green {
    background: #3aafa98c;
}

.bg_dark {
    background: #17252a;
}

.bg_white {
    background: #feffff;
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
    transition: 0.7s ease all;
    background-color: var(--green);
    border: 2px solid var(--green);
    color: var(--white);
}

.border-green {
    border: 1px solid var(--green);
}

/*universal*/

/* Cart detail */



.active {
    border-bottom: 3px solid rgb(6, 56, 82);
}

.cart_product {
    width: 100%;
    height: 1400px;
    margin-top: 8%;
}

.cart_product>.container>.row>.col-6>img {


    padding: 10px;
}

.img_color_dark {
    border: 3px solid rgb(29, 56, 114);
}

.img_color_cyan {
    border: 3px solid rgb(139, 7, 7);
}

.img_color_black {
    border: 3px solid rgb(15, 14, 14);
}

.img_color_grey {
    border: 3px solid rgb(53, 192, 95);
}

.cart_product>.container>.row>.col-6 {
    height: 500px;
}

.product_detail>h5 {
    font-size: 14px;
    line-height: 1.3rem;
    margin-left: 3%;
    color: rgb(6, 56, 82);
    margin-top: 25%;
    font-weight: lighter;
}

.add_product {
    margin-top: 5%;
}

.product_ratings {
    margin-left: 3%;
}

.product_ratings>i {
    font-size: 14px;
    margin-bottom: 13%;
}

.product_price>h2 {
    color: rgb(6, 56, 82);
    font-size: 18px;
    font-weight: bolder;
    margin-top: -7px;
    margin-left: 3%;
}

.product_size {
    margin-top: 20px;
    color: rgb(6, 56, 82);
}

.product_size>h5 {
    font-size: 14.4px;
    margin-left: 3%;
}

.product_sizes>h6 {
    font-size: 14px;
    margin-top: -2%;
    padding: 3%;
    font-weight: bolder;
}

.img img {
    height: 350px;
}

.add_minus>.row>.col-8>input {
    border: 1px solid var(--green);
    font-size: 14px;
    border-radius: 5px;
    height: 30px;
    text-align: center;

    color: var(--green);
    font-weight: 900;
    outline: none;
}

.add_minus {
    border: 2px solid var(--green);
    margin-top: 5%;
    margin-bottom: 4%;
    padding: 1%;
}





/*description_reviews_storeinfo*/
.description_reviews_storeinfo {
    margin-top: 10%;
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
}

.active_tab {
    font-weight: bolder !important;
}

.description_reviews_storeinfo>.row>.col-4>h4 {
    font-size: 13.5px;
    padding-bottom: 15%;
    font-weight: lighter;
    color: rgb(6, 56, 82);
}

.description_reviews_storeinfo>.row>.col-4 {
    border-right: 1px solid rgba(172, 178, 182, 0.733);
}

.product_description {
    margin-top: 4%;
}

.product_description>h5 {
    width: 90%;
    font-size: 15px;
    line-height: 1.8rem;
    color: rgba(31, 34, 36, 0.733);
}

.product_description>h1 {
    font-size: 18px;
    margin-top: 50px;
}

/*review*/

.reviews {
    margin-top: 10%;
    display: none;
}

.customerReview {
    color: rgba(31, 34, 36, 0.733);
}

.customerReview>h4 {
    font-size: 15px;
    font-weight: bolder;
    margin-bottom: 7%;
    margin-left: 3%;
    color: rgb(6, 56, 82) !important;
}

.customerReview>.product_ratings>span {
    font-size: 15px;
    margin-left: 5%;
}

.global_rating>h6 {
    font-size: 9px;
    margin-left: 3%;
    margin-top: -10%;
    margin-bottom: 6%;
}

.customer_rating>ul>li {
    list-style-type: none;
}

.customer_rating>ul>li>i {
    margin-left: 2%;
    top: -6.7px;
    position: relative;
    color: var(--green);
}

.customer_rating>ul>li>span {
    font-size: 14px;
    top: -7px;
    position: relative;
}

.customer_rating>ul>li>progress {
    height: 24px;
    margin-top: -2%;
    position: relative;
}

.product_review {
    margin-top: 15%;
}

.product_review>.row>.col-8>h6 {
    font-size: 13px;
    line-height: 1.4rem;
    margin-left: 3%;
    margin-top: 5%;
    color: rgba(31, 34, 36, 0.733);
}

.product_review>.row>.col-4>img {
    width: 40%;
    margin-left: 5%;
    border-radius: 100%;
}

.product_review>h4 {
    font-size: 15px;
    font-weight: bolder;
    margin-bottom: 7%;
    margin-left: 3%;
    color: rgba(31, 34, 36, 0.733);
}

.product_review>.row>.col-8>.product_ratings {
    font-size: 12px;
    margin-top: 0%;
}

.verified {
    widows: 90%;
    margin: 3% 5% 18% 5%;
    display: flex;
}

.verified>h6 {
    font-size: 14px;
    margin-left: 2%;
    margin-top: 1%;
    color: rgba(31, 34, 36, 0.733);
}

.verified>i {
    border: 1px solid rgb(24, 146, 55);
    padding: 1% 1% 1% 1%;
    border-radius: 100%;
    margin-top: 0%;
    background-color: rgb(24, 146, 55);
    color: #fff;
    font-size: 12px;
}

/*store info*/
.storeInfo {
    display: none;
}

.storeInfo>address {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bolder;
    margin-top: 10%;
    color: rgba(31, 34, 36, 0.733);
}

.storeInfo>address>h4 {
    font-size: 15px;
    margin-top: 10%;
    text-align: right;
}

/*end*/

@media (max-width: 523px) and (min-width: 0px) {

    /*background region */

    /* Cart detail */
    .active {
        border-bottom: 3px solid rgb(6, 56, 82);
    }

    .cart_product {
        width: 100%;
        height: 1400px;
        margin-top: 5%;
    }



    .cart_product>.container>.row>.col-6>img {
        width: 100%;
        height: 150px;
        margin-top: 10%;
        margin-left: -2%;
    }

    .add_product {
        margin-top: 0% !important;
    }

    .cart_product>.container>.row>.col-6 {
        height: 300px;
    }

    .product_detail>h5 {
        font-size: 14px;
        line-height: 1.3rem;
        margin-left: 3%;
        color: rgb(6, 56, 82);
        margin-top: 25%;
        font-weight: lighter;
    }

    .product_ratings {
        margin-top: -5%;
        margin-left: 3%;
    }

    .product_ratings>i {
        font-size: 14px;
        margin-bottom: 13%;
    }

    .product_price>h2 {
        color: rgb(6, 56, 82);
        font-size: 18px;
        font-weight: bolder;
        margin-top: -7px;
        margin-left: 3%;
    }

    .product_size {
        margin-top: 20px;
        color: rgb(6, 56, 82);
    }

    .product_size>h5 {
        font-size: 14.4px;
        margin-left: 3%;
    }

    .product_sizes>h6 {
        font-size: 14px;
        margin-top: -5%;
        padding: 3%;
        font-weight: bolder;
    }

    .product_color {
        margin-top: 7%;
    }

    .product_color>h5 {
        font-size: 14.4px;
        margin-left: 3%;
        color: rgb(6, 56, 82);
    }

    .product_colors {
        margin-top: -3%;
    }

    .product_colors>.black {
        border: 1px solid rgb(15, 14, 14);
        padding: 7%;
        margin: 3%;
        background-color: rgb(15, 14, 14);
    }

    .product_colors>.cyan {
        border: 1px solid rgb(139, 7, 7);
        padding: 7%;
        margin: 3%;
        background-color: rgb(139, 7, 7);
    }

    .product_colors>.grey {
        border: 1px solid rgb(53, 192, 95);
        padding: 7%;
        margin: 3%;
        background-color: rgb(53, 192, 95);
    }

    .product_colors>.dark {
        border: 1px solid rgb(29, 56, 114);
        padding: 7%;
        margin: 3%;
        background-color: rgb(29, 56, 114);
    }

    .add_minus>.row>.col-8>input {
        border: 1px solid var(--green);
        font-size: 14px;
        border-radius: 5px;
        height: 30px;
        text-align: center;
        width: 30%;
        color: var(--green);
        font-weight: 900;
        outline: none;
    }

    .add_minus {
        border: 2px solid var(--green);
        margin-top: 5%;
        margin-bottom: 4%;
    }




    /*description_reviews_storeinfo*/
    .description_reviews_storeinfo {
        margin-top: 4%;
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    }

    .active_tab {
        font-weight: bolder !important;
    }

    .description_reviews_storeinfo>.row>.col-4>h4 {
        font-size: 13.5px;
        padding-bottom: 15%;
        font-weight: lighter;
        color: rgb(6, 56, 82);
    }

    .description_reviews_storeinfo>.row>.col-4 {
        border-right: 1px solid rgba(172, 178, 182, 0.733);
    }

    .product_description {
        margin-top: 10%;
    }

    .product_description>h5 {
        width: 90%;
        font-size: 15px;
        line-height: 1.8rem;
        color: rgba(31, 34, 36, 0.733);
    }

    .product_description>h1 {
        font-size: 18px;
        margin-top: 50px;
    }

    /*review*/

    .reviews {
        margin-top: 4%;
        display: none;
    }

    .customerReview {
        color: rgba(31, 34, 36, 0.733);
    }

    .customerReview>h4 {
        font-size: 15px;
        font-weight: bolder;
        margin-bottom: 7%;
        margin-left: 3%;
        color: rgb(6, 56, 82) !important;
    }

    .customerReview>.product_ratings>span {
        font-size: 15px;
        margin-left: 5%;
    }

    .global_rating>h6 {
        font-size: 9px;
        margin-left: 3%;
        margin-top: -10%;
        margin-bottom: 6%;
    }

    .customer_rating>ul>li {
        list-style-type: none;
    }

    .customer_rating>ul>li>i {
        margin-left: 2%;
        top: -6.7px;
        position: relative;
        color: var(--green);
    }

    .customer_rating>ul>li>span {
        font-size: 14px;
        top: -7px;
        position: relative;
    }

    .customer_rating>ul>li>progress {
        height: 24px;
        margin-top: -2%;
        position: relative;
    }

    .product_review {
        margin-top: 15%;
    }

    .product_review>.row>.col-8>h6 {
        font-size: 13px;
        line-height: 1.4rem;
        margin-left: 3%;
        margin-top: 5%;
        color: rgba(31, 34, 36, 0.733);
    }

    .product_review>.row>.col-4>img {
        width: 100%;
        margin-left: 5%;
    }

    .product_review>h4 {
        font-size: 15px;
        font-weight: bolder;
        margin-bottom: 7%;
        margin-left: 3%;
        color: rgba(31, 34, 36, 0.733);
    }

    .product_review>.row>.col-8>.product_ratings {
        font-size: 12px;
        margin-top: 0%;
    }

    .verified {
        widows: 90%;
        margin: 3% 5% 18% 5%;
        display: flex;
    }

    .verified>h6 {
        font-size: 14px;
        margin-left: 2%;
        margin-top: 1%;
        color: rgba(31, 34, 36, 0.733);
    }

    .verified>i {
        border: 1px solid rgb(24, 146, 55);
        padding: 1% 1% 1% 1%;
        height: 20px;
        border-radius: 100%;
        margin-top: 0.5%;
        background-color: rgb(24, 146, 55);
        color: #fff;
        font-size: 12px;
    }

    /*store info*/
    .storeInfo {
        display: none;
    }

    .storeInfo>address {
        font-size: 15px;
        text-transform: uppercase;
        font-weight: bolder;
        margin-top: 10%;
        color: rgba(31, 34, 36, 0.733);
    }

    .storeInfo>address>h4 {
        font-size: 15px;
        margin-top: 10%;
        text-align: right;
    }

    /*end*/
}

@media (max-width: 765px) and (min-width: 524px) {

    /* Cart detail */
    .active {
        border-bottom: 3px solid rgb(6, 56, 82);
    }

    .img img {
        height: 200px;
    }


    .add_product {
        margin-top: -20% !important;
    }

    .cart_product {
        width: 100%;
        height: 1000px;
        margin-top: 8%;
    }

    .cart_product>.container>.row>.col-6>img {
        width: 100%;

    }

    .cart_product>.container>.row>.col-6 {
        height: 320px;
    }

    .product_detail>h5 {
        font-size: 14px;
        line-height: 1.3rem;
        margin-left: 3%;
        color: rgb(6, 56, 82);
        margin-top: 25%;
        font-weight: lighter;
    }

    .product_ratings {
        margin-left: 3%;
    }

    .product_ratings>i {
        font-size: 14px;
        margin-bottom: 13%;
    }

    .product_price>h2 {
        color: rgb(6, 56, 82);
        font-size: 18px;
        font-weight: bolder;
        margin-top: -7px;
        margin-left: 3%;
    }

    .product_size {
        margin-top: 20px;
        color: rgb(6, 56, 82);
    }

    .product_size>h5 {
        font-size: 14.4px;
        margin-left: 3%;
    }

    .product_sizes>h6 {
        font-size: 14px;
        margin-top: -2%;
        padding: 3%;
        font-weight: bolder;
    }

    .product_color {
        margin-top: 5%;
    }

    .product_color>h5 {
        font-size: 14.4px;
        margin-left: 3%;
        color: rgb(6, 56, 82);
    }

    .product_colors {
        margin-top: -3%;
    }

    .product_colors>.black {
        border: 1px solid rgb(15, 14, 14);
        padding: 7%;
        margin: 3%;
        background-color: rgb(15, 14, 14);
    }

    .product_colors>.cyan {
        border: 1px solid rgb(139, 7, 7);
        padding: 7%;
        margin: 3%;
        background-color: rgb(139, 7, 7);
    }

    .product_colors>.grey {
        border: 1px solid rgb(53, 192, 95);
        padding: 7%;
        margin: 3%;
        background-color: rgb(53, 192, 95);
    }

    .product_colors>.dark {
        border: 1px solid rgb(29, 56, 114);
        padding: 7%;
        margin: 3%;
        background-color: rgb(29, 56, 114);
    }

    .add_minus>.row>.col-8>input {
        border: 1px solid var(--green);
        font-size: 14px;
        border-radius: 5px;
        height: 30px;
        text-align: center;
        width: 30%;
        color: var(--green);
        font-weight: 900;
        outline: none;
    }

    .add_minus {
        border: 2px solid var(--green);
        margin-top: 5%;
        margin-bottom: 4%;
        padding: 1%;
    }



}

@media (max-width: 990px) and (min-width: 765px) {

    .cart_product {
        margin-top: 7%;
    }

    .img img {
        height: 200px;
    }



    .cart_product>.container>.row>.col-6 {
        height: 350px;
    }
}

@media (max-width: 1200px) and (min-width: 991px) {

    .cart_product {
        margin-top: 10%;
    }

    .img img {
        height: 200px;
    }


    .cart_product>.container>.row>.col-6 {
        height: 450px;
    }
}
</style>