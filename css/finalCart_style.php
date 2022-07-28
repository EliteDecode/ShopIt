<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}

/*universal*/
.item_selected {
    margin-top: 7%;
    width: 100%;
}

.row_resize {
    width: 95%;
    margin: 0% 2.5%;
}



.add_sub_cart {
    display: flex;
    margin-left: 0%;
}



.item_rate {
    margin-left: 85%;
}

.item_rate>i {
    font-size: 18px;
    margin-top: 18px;
    color: rgb(255, 114, 0);
}






/* check out session */



.coupon {
    margin-top: 5%;
    width: 90%;
    margin: 0% 5%;
}

.coupon>input {
    width: 100%;
    padding: 2% 0% 2% 0%;
    font-size: 14px;
    border: none;
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    ;
    outline: none;
}

h5.shipping {
    margin-top: 10%;
    font-size: 16px;
    margin-bottom: 5%;
}

p.select_logistic {
    font-size: 12px;
}

.row_resize>select {
    width: 47%;
    margin-right: 3%;
    padding: 1.7% 2% 1.7% 2%;
    outline: none;
    font-size: 14px;
    border-radius: 2%;
    border: 1px solid rgba(172, 178, 182, 0.733);
    color: rgba(50, 54, 56, 0.733);
    margin-bottom: 10%;

}

p.stations {
    font-size: 16px;
    font-weight: bolder;
}

.address {
    margin-top: 5%;
}

.address>p {
    font-size: 13px;
}

.address_info {
    color: rgba(49, 51, 53, 0.733);
    font-size: 13px;
}

.contact_info {
    font-size: 13px;
    margin-top: .2%;
    margin-left: 2%;
    color: rgba(49, 51, 53, 0.733);
}

.address>h6 {
    font-size: 14px;
    font-weight: lighter;
}


.total {
    font-size: 18px;
    margin-left: 4%;
}


/* new arrivals session */
/*universal product design*/

.products {
    height: 300px;
}

.products>.header>h3 {
    width: 90%;
    margin: 5% 5% 5% 10%;
    text-transform: uppercase;
    font-size: 15px;
    color: rgb(6, 56, 82);
    font-weight: 490;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}


.products>.container_product>.row {
    text-align: center;
}

.container_product {
    width: 90%;
    margin: 0% 5%;
}

.products>.container_product>.row>.col-4>img {
    width: 50%;
}



.product_ratings>i {
    font-size: 12px;

}

.product_title {
    font-size: 11px;
    text-transform: capitalize;
}

.product_price {
    font-size: 11.9px;
}




/*end*/

@media(max-width:523px) and (min-width:0px) {

    .row_resize {
        width: 95%;
        margin: 0% 2.5%;
    }

    .add_sub_cart {
        display: flex;
    }



    .item_rate {
        margin-left: 45%;
    }

    .item_rate>i {
        font-size: 18px;
        margin-top: 9px;
        color: rgb(255, 114, 0);
    }

    .item_selected {
        margin-top: 22%;
        width: 100%;
    }


    /* check out session */

    h5.shipping {
        margin-top: 10%;
        font-size: 16px;
        margin-bottom: 5%;
    }

    p.select_logistic {
        font-size: 12px;
    }

    .row_resize>select {
        width: 47%;
        margin-right: 3%;
        padding: 1.7% 2% 1.7% 2%;
        outline: none;
        font-size: 14px;
        border-radius: 2%;
        border: 1px solid rgba(172, 178, 182, 0.733);
        color: rgba(50, 54, 56, 0.733);
        margin-bottom: 10%;

    }

    p.stations {
        font-size: 16px;
        font-weight: bolder;
    }

    .address {
        margin-top: 5%;
    }

    .address>p {
        font-size: 13px;
    }

    .address_info {
        color: rgba(49, 51, 53, 0.733);
        font-size: 13px;
    }

    .contact_info {
        font-size: 13px;
        margin-top: .2%;
        margin-left: 2%;
        color: rgba(49, 51, 53, 0.733);
    }

    .address>h6 {
        font-size: 14px;
        font-weight: lighter;
        margin-top: -3%;
    }



    .total {
        font-size: 18px;
        margin-left: 4%;
    }


    /* new arrivals session */
    /*universal product design*/

    .products {
        height: 240px;
    }

    .products>.header>h3 {
        width: 90%;
        margin: 5% 5%;
        text-transform: uppercase;
        font-size: 15px;
        color: rgb(6, 56, 82);
        font-weight: 490;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }


    .products>.container_product>.row {
        text-align: center;
    }

    .container_product {
        width: 90%;
        margin: 0% 5%;
    }

    .products>.container_product>.row>.col-4>img {
        width: 99%
    }

    .product_ratings {
        margin-top: 10%;
    }

    .product_ratings>i {
        font-size: 12px;
        margin-bottom: 13%;
    }

    .product_title {
        font-size: 10px;
        text-transform: capitalize;
    }

    .product_price {
        font-size: 11.9px;
        margin-top: -4%;
    }





}


@media(max-width:765px) and (min-width:524px) {

    .plus {
        margin-left: 0%;
    }



    .item_rate {
        margin-left: 65%;
    }

    .item_rate>i {
        font-size: 18px;
        margin-top: 18px;
        color: rgb(255, 114, 0);
    }

    .item_selected {
        margin-top: 12%;
    }


}

@media(max-width:990px) and (min-width:765px) {


    .item_selected {
        margin-top: 9%;
    }

    .plus {
        margin-left: 0%;
    }

    .item_rate {
        margin-left: 65%;
    }

    .item_rate>i {
        font-size: 18px;
        margin-top: 18px;
        color: rgb(255, 114, 0);
    }

    /* check out session */


}

@media(max-width:1200px) and (min-width:991px) {
    .plus {
        margin-left: 0%;
    }

    .item_rate {
        margin-left: 65%;
    }

    .item_rate>i {
        font-size: 18px;
        margin-top: 18px;
        color: rgb(255, 114, 0);
    }

    /* check out session */


}
</style>