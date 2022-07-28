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
}


/*universal*/





.orders_header {
    padding: 3%;
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
}

.orders_header>a>i {
    font-size: 20px;
    margin-right: 5%;
    margin-left: 5%;
    margin-top: -.8%;
    color: var(--green);
    font-weight: bolder;
}

.orders_header>h5 {
    color: var(--green);
    font-size: 18px;
    margin-top: .3%;
    text-shadow: 5px 5px 9px rgba(26, 23, 23, 0.3);
    margin-left: 5%;
}



.orders_body>.container>i {
    font-size: 120px;
    margin-top: 10%;
    color: var(--green);
}

.orders_body>.container>h6 {
    color: rgb(6, 56, 82);
    text-transform: uppercase;
    margin: 5% 0% 10% 0%;
    line-height: 1.9rem;
}

.orders_body>.container>a {
    text-decoration: none;
}

.orders_body>.container>a>button {
    border: none;
    padding: 2%;
    width: 100%;
    background-color: var(--green);
    color: #fff;
    box-shadow: 2px 3px 4px 2px rgba(26, 23, 23, 0.6);
}

.orders {
    margin-top: 9%;
}



/*details session*/

.account_form {
    margin-bottom: 15%;

}

.account_form>.container>form>label {
    font-weight: bolder;
    margin-top: 3%;
    font-size: 14px;
}

.account_form>.container>form>input {
    width: 100%;
    border-bottom: 1px solid rgba(26, 23, 23, 0.3);
    border-left: none;
    border-right: none;
    border-top: none;
    padding: 1.5%;
    outline: none;
    font-size: 16px;
    margin-bottom: 1%;
}

.account_form>.container>form>select {
    width: 100%;
    border-bottom: 1px solid rgba(26, 23, 23, 0.3);
    border-left: none;
    border-right: none;
    border-top: none;
    padding: 1.5%;
    outline: none;
    font-size: 16px;
    margin-bottom: 5%;
}


.account_form>.container>form>span {
    position: relative;
    top: -50px;
    float: right;
    margin-right: 3%;
    color: var(--green);
}

/*reviews*/
.review_section {
    margin-top: 5%;
}

.review_section>.container {
    border: 1px solid rgb(6, 56, 82);
    padding: 4%;
    margin-top: 5%;

}

.review_section>.container>.image {
    float: left;
    font-size: 40px;
    border: 1px solid var(--green);
    color: white;
    padding: 1% 2% 1% 2%;
    background-color: var(--green);
    border-radius: 100%;
    margin-right: 4%;
}

.comment {
    margin-top: 4px;
}




/*logistics*/

.logistic {
    margin-top: 5%;
    color: rgb(6, 56, 82);
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
}

.logistic>.container>.logistic_address>h5 {
    color: rgb(6, 56, 82);
}

.logistic>.container>.logistic_address>p {
    font-size: 14px;
    font-weight: bold;
}



.logistic_add {
    color: #fff;
    border: 1px solid var(--green);
    font-size: 25px;
    background-color: var(--green);
    width: 7%;
    padding: 2% 0%;
    box-shadow: 4px 4px 4px 1px rgba(26, 23, 23, 0.6);
    float: right;
    margin-top: 10%;
    margin-right: 5%;
    border-radius: 100%;
}

.logistic_add:hover {
    box-shadow: none;
    transition: .6s ease all;
}






/*Settings*/
.setting_form {
    margin-top: 5%;
}

.radio {
    border: 1px solid rgba(172, 178, 182, 0.733);
    padding: 2%;
}

.radio>span {
    margin-left: 5%;
    font-size: 14px;
    font-weight: bolder;
    position: relative;
    top: -2px;
}

.setting_form>.container>form>button {
    width: 80%;
    margin: 15% 10%;
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




.best_deal_items {
    margin-top: 5%;
}

.best_deal_items>.row>.col-6 {
    height: 380px;
    margin-bottom: 7%;
}

.best_deal_item {
    box-shadow: 1px 1px 3px 1px rgba(26, 23, 23, 0.3);
    height: 405px;
    position: absolute;
    width: 50%;
    margin-left: -4.5%;

}

.best_deal_item>img {
    width: 60%;
    margin: 15% 20% 0% 20%;
}

.item_ratings {
    margin-top: 7%;
    margin-left: 5%;
}

.item_ratings>i {
    font-size: 13px;
    margin-bottom: 13%;
}


.best_deal_description>h6 {
    color: rgb(86, 116, 131);
    font-size: 13px;
    text-transform: capitalize;
    margin-left: 5%;
    margin-top: -6%;
    line-height: 1.2rem;
}

.best_deal_price>h2 {
    color: rgb(6, 56, 82);
    font-size: 18px;
    margin-left: 5%;
    font-weight: bolder;
    margin-top: 16px;
}

.ojahi_btn {
    font-size: 11px;
    padding: 5% 18% 5% 18%;
    border: none;
    text-transform: uppercase;
    background-color: var(--green);
    color: #fff;
    margin-bottom: 10%;
    margin-top: 10%;
    font-weight: bolder;
}






@media(max-width:523px) and (min-width:0px) {



    .orders {
        margin-top: 25% !important;
    }

    .orders_header {
        padding: 3%;
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    }

    .orders_header>a>i {
        font-size: 20px;
        margin-right: 5%;
        margin-left: 5%;
        margin-top: -.8%;
        color: var(--green);
        font-weight: bolder;
    }

    .orders_header>h5 {
        color: var(--green);
        font-size: 18px;
        margin-top: .3%;
        text-shadow: 5px 5px 9px rgba(26, 23, 23, 0.3);
        margin-left: 5%;
    }


    .orders_body>.container>i {
        font-size: 120px;
        margin-top: 20%;
        color: var(--green);
    }

    .orders_body>.container>h6 {
        color: rgb(6, 56, 82);
        text-transform: uppercase;
        margin: 5% 0% 10% 0%;
        line-height: 1.9rem;
    }

    .orders_body>.container>a {
        text-decoration: none;
    }

    .orders_body>.container>a>button {
        border: none;
        padding: 3%;
        width: 100%;
        background-color: var(--green);
        color: #fff;
        box-shadow: 2px 3px 4px 2px rgba(26, 23, 23, 0.6);
    }





    /*details session*/

    .account_form {
        margin-bottom: 15%;

    }

    .account_form>.container>form>label {
        font-weight: bolder;
        margin-top: 3%;
        font-size: 14px;
    }

    .account_form>.container>form>input {
        width: 100%;
        border-bottom: 1px solid rgba(26, 23, 23, 0.3);
        border-left: none;
        border-right: none;
        border-top: none;
        padding: 1.5%;
        outline: none;
        font-size: 16px;
        margin-bottom: 5%;
    }

    .account_form>.container>form>select {
        width: 100%;
        border-bottom: 1px solid rgba(26, 23, 23, 0.3);
        border-left: none;
        border-right: none;
        border-top: none;
        padding: 1.5%;
        outline: none;
        font-size: 16px;
        margin-bottom: 5%;
    }


    .account_form>.container>form>span {
        position: relative;
        top: -50px;
        float: right;
        margin-right: 3%;
        color: var(--green);
    }




    /*logistics*/

    .logistic {
        margin-top: 5%;
        color: rgb(6, 56, 82);
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    }

    .logistic>.container>.logistic_address>h5 {
        color: rgb(6, 56, 82);
    }

    .logistic>.container>.logistic_address>p {
        font-size: 14px;
        font-weight: bold;
    }



    .logistic_add {
        color: #fff;
        border: 1px solid var(--green);
        font-size: 25px;
        background-color: var(--green);
        width: 15%;
        padding: 2% 0%;
        box-shadow: 4px 4px 4px 1px rgba(26, 23, 23, 0.6);
        float: right;
        margin-top: 30%;
        margin-right: 5%;
        border-radius: 100%;
    }

    .logistic_add:hover {
        box-shadow: none;
        transition: .6s ease all;
    }






    /*Settings*/
    .setting_form {
        margin-top: 5%;
    }

    .radio {
        border: 1px solid rgba(172, 178, 182, 0.733);
        padding: 2%;
    }

    .radio>span {
        margin-left: 5%;
        font-size: 14px;
        font-weight: bolder;
        position: relative;
        top: -2px;
    }

    .setting_form>.container>form>button {
        width: 80%;
        margin: 15% 10%;
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



}



@media(max-width:1200px) and (min-width:991px) {

    .logistic_add {
        color: #fff;
        border: 1px solid var(--green);
        font-size: 25px;
        background-color: var(--green);
        width: 7%;
        padding: 2% 0%;
        box-shadow: 4px 4px 4px 1px rgba(26, 23, 23, 0.6);
        float: right;
        margin-top: 10%;
        margin-right: 5%;
        border-radius: 100%;
    }

}
</style>