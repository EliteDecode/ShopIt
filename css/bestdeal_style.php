<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}

/*universal*/



/*Best deal section*/
.best_dea {
    display: none;
}

.best_deal_desk {
    display: block;
    padding: 3% 0%;
    margin-top: 3%;
}

.best_deal_header {
    margin-top: 5%;
}

.best_deal_header>.row>.col-10>h6 {
    font-size: 16px;
    border-bottom: 1px solid rgba(172, 178, 182, 0.733);
    padding: 3%;
    margin-right: 2%;
    color: rgb(6, 56, 82);
}

.best_deal_header>.row>.col-2>i {
    display: none;
}

.best_deal_items {
    margin-top: 2% !important;
}

.best_deal_items>.row>.col-6 {
    height: 380px;
    margin-bottom: 3%;
}

.best_deal_items>.row>.col-3 {
    height: 380px;
    margin-bottom: 0%;
}

.best_deal_item {
    box-shadow: 1px 1px 3px 1px rgba(26, 23, 23, 0.3);
    /* height: 475px; */
    position: absolute;
    width: 92%;
    margin-left: -4.5%;

}

.best_deal_item>img {
    width: 90%;
    margin: 15% 5% 0% 5%;
}

.item_ratings {
    margin-top: 15%;
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
    background-color: rgb(255, 114, 0);
    color: #fff;
    margin-bottom: 10%;
    margin-top: 10%;
    font-weight: bolder;
}




/*previous and next */

.prev_next {
    height: 150px;
    margin-top: 2%;
}

.prev {
    display: flex;
    border: 1px solid rgb(255, 114, 0);
    margin-top: 2%;
    background-color: rgb(255, 114, 0);
    padding: 2% 0%;

}

.prev>h5 {
    font-size: 14px;
    margin-left: 3%;

    color: #fff;
    margin-top: 1.5%;
}

.prev>i {
    color: #fff;
    margin-left: 8%;
    margin-top: 1.3%;
}

.next {
    display: flex;
    border: 1px solid rgb(255, 114, 0);
    margin-top: 2%;
    background-color: #fff;
    ;
    padding: 2% 0%;
}

.next>h5 {
    font-size: 14px;
    margin-left: 75%;
    margin-top: 1.5%;
    color: rgb(6, 56, 82);
}

.next>i {
    color: rgb(255, 114, 0);
    margin-left: 5%;
    margin-top: 1.3%;
}

.row_resize {
    width: 95%;
    margin: 0% 2.5%;
}

.page_count {
    margin-top: 5%;
}

.page_count>h6 {
    font-size: 13px;
    color: rgb(6, 56, 82);
}

.page_count>h6>span {
    border: 1px solid rgb(255, 114, 0);
    padding: .5% 3% .5% 3%;
}




@media(max-width:523px) and (min-width:0px) {





    /*Best deal section*/
    .best_dea {

        display: block;
        position: relative;


    }

    .best_deal_desk {
        display: none;
    }

    .best_deal_header {
        margin-top: 5%;

    }

    .best_deal_header>.row>.col-10>h6 {
        font-size: 16px;
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        padding: 3%;
        margin-right: 2%;
        color: rgb(6, 56, 82);
    }

    .best_deal_header>.row>.col-2>i {
        border: 1px solid rgb(6, 56, 82);
        padding: 32%;
        margin-left: -25px;
        color: rgb(6, 56, 82);
        margin-top: -20px;
    }

    .best_deal_items {
        margin-top: 3% !important;
    }

    .best_deal_items>.row>.col-6 {
        height: 380px;
        margin-bottom: 3% !important;
    }

    .best_deal_item {
        box-shadow: 1px 1px 3px 1px rgba(26, 23, 23, 0.3);
        /* height: 375px; */
        position: absolute;
        width: 92%;
        margin-left: -4.5%;

    }

    .best_deal_item>img {
        width: 90%;
        margin: 0% 5% 0% 5% !important;
    }

    .item_ratings {
        margin-top: 15%;
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
        background-color: rgb(255, 114, 0);
        color: #fff;
        margin-bottom: 10%;
        margin-top: 10%;
        font-weight: bolder;
    }




    /*previous and next */

    .prev_next {

        height: 80px;
        margin-top: 5%;
    }

    .prev {
        display: flex;

        margin-top: 5%;
        background-color: rgb(255, 114, 0);
        height: 30px;

    }

    .prev>h5 {
        font-size: 14px;
        margin-left: 3%;
        margin-top: 5%;
        color: #fff;
    }

    .prev>i {
        color: #fff;
        margin-left: 17%;
        margin-top: 4.5%;
    }

    .next {
        display: flex;
        border: 1px solid rgb(255, 114, 0);
        margin-top: 5%;
        background-color: #fff;
        ;
        height: 30px;

    }

    .next>h5 {
        font-size: 14px;
        margin-left: 25%;
        margin-top: 4.5%;
        color: rgb(6, 56, 82);
    }

    .next>i {
        color: rgb(255, 114, 0);
        margin-left: 5%;
        margin-top: 4.5%;
    }

    .row_resize {
        width: 95%;
        margin: 0% 2.5%;
    }

    .page_count {
        margin-top: 5%;
    }

    .page_count>h6 {
        font-size: 13px;
        color: rgb(6, 56, 82);
    }

    .page_count>h6>span {
        border: 1px solid rgb(255, 114, 0);
        padding: .5% 3% .5% 3%;
    }



}



@media(max-width:765px) and (min-width:524px) {




    /*Best deal section*/
    .best_dea {

        display: block;
        position: relative;

    }

    .best_deal_desk {
        display: none;
    }

    .best_deal_header {
        margin-top: 5%;
    }

    .best_deal_header>.row>.col-10>h6 {
        font-size: 16px;
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        padding: 3%;
        margin-right: 2%;
        color: rgb(6, 56, 82);
    }

    .best_deal_header>.row>.col-2>i {
        border: 1px solid rgb(6, 56, 82);
        padding: 32%;
        margin-left: -25px;
        color: rgb(6, 56, 82);
        margin-top: -20px;
    }

    .best_deal_items {
        margin-top: 5%;
    }

    .best_deal_items>.row>.col-6 {
        height: 380px;
        margin-bottom: 25%;
    }

    .best_deal_item {
        box-shadow: 1px 1px 3px 1px rgba(26, 23, 23, 0.3);
        /* height: 475px; */
        position: absolute;
        width: 92%;
        margin-left: -1.5%;

    }

    .best_deal_item>img {
        width: 90%;
        margin: 15% 5% 0% 5%;
    }

    .item_ratings {
        margin-top: 15%;
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
        background-color: rgb(255, 114, 0);
        color: #fff;
        margin-bottom: 10%;
        margin-top: 13%;
        font-weight: bolder;
    }




    /*previous and next */

    .prev_next {

        height: 120px;
        margin-top: 5%;
    }

    .prev {
        display: flex;
        margin-top: 5%;
        background-color: rgb(255, 114, 0);
        height: 45px;

    }

    .prev>h5 {
        font-size: 14px;
        margin-left: 3%;
        margin-top: 5%;
        color: #fff;
    }

    .prev>i {
        color: #fff;
        margin-left: 7%;
        margin-top: 4.5%;
    }

    .next {
        display: flex;
        border: 1px solid rgb(255, 114, 0);
        margin-top: 5%;
        background-color: #fff;
        ;
        height: 45px;

    }

    .next>h5 {
        font-size: 14px;
        margin-left: 65%;
        margin-top: 4.5%;
        color: rgb(6, 56, 82);
    }

    .next>i {
        color: rgb(255, 114, 0);
        margin-left: 5%;
        margin-top: 4%;
    }

    .row_resize {
        width: 95%;
        margin: 0% 2.5%;
    }

    .page_count {
        margin-top: 5%;
    }

    .page_count>h6 {
        font-size: 13px;
        color: rgb(6, 56, 82);
    }

    .page_count>h6>span {
        border: 1px solid rgb(255, 114, 0);
        padding: .5% 3% .5% 3%;
    }


}








@media(max-width:990px) and (min-width:765px) {



    /*Best deal section*/
    .best_dea {

        display: none;
    }

    .best_deal_desk {
        display: block;
        padding: 3% 0%;
        position: relative;

    }

    .best_deal_header {
        margin-top: 5%;
    }

    .best_deal_header>.row>.col-10>h6 {
        font-size: 16px;
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        padding: 3%;
        margin-right: 2%;
        color: rgb(6, 56, 82);
    }

    .best_deal_header>.row>.col-2>i {
        display: none;
    }

    .best_deal_items {
        margin-top: 5%;
    }

    .best_deal_items>.row>.col-6 {
        height: 380px;
        margin-bottom: 7%;
    }

    .best_deal_items>.row>.col-3 {
        height: 380px;
        margin-bottom: 7%;
    }

    .best_deal_item {
        box-shadow: 1px 1px 3px 1px rgba(26, 23, 23, 0.3);
        /* height: 375px; */
        position: absolute;
        width: 92%;
        margin-left: -4.5%;

    }

    .best_deal_item>img {
        width: 90%;
        margin: 15% 5% 0% 5%;
    }

    .item_ratings {
        margin-top: 15%;
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
        background-color: rgb(255, 114, 0);
        color: #fff;
        margin-bottom: 10%;
        margin-top: 10%;
        font-weight: bolder;
    }




    /*previous and next */

    .prev_next {

        height: 120px;
        margin-top: 5%;
    }

    .prev {
        display: flex;
        margin-top: 5%;
        background-color: rgb(255, 114, 0);
        height: 45px;

    }

    .prev>h5 {
        font-size: 14px;
        margin-left: 3%;
        margin-top: 2.8%;
        color: #fff;
    }

    .prev>i {
        color: #fff;
        margin-left: 7%;
        margin-top: 2%;
    }

    .next {
        display: flex;
        border: 1px solid rgb(255, 114, 0);
        margin-top: 5%;
        background-color: #fff;
        ;
        height: 45px;

    }

    .next>h5 {
        font-size: 14px;
        margin-left: 65%;
        margin-top: 2.8%;
        color: rgb(6, 56, 82);
    }

    .next>i {
        color: rgb(255, 114, 0);
        margin-left: 5%;
        margin-top: 2%;
    }

    .row_resize {
        width: 95%;
        margin: 0% 2.5%;
    }

    .page_count {
        margin-top: 5%;
    }

    .page_count>h6 {
        font-size: 13px;
        color: rgb(6, 56, 82);
    }

    .page_count>h6>span {
        border: 1px solid rgb(255, 114, 0);
        padding: .5% 3% .5% 3%;
    }

}

/*end*/


@media(max-width:1200px) and (min-width:991px) {



    /*Best deal section*/
    .best_dea {

        display: none;
    }

    .best_deal_desk {
        display: block;
        position: relative;
        padding: 3% 0%;
    }

    .best_deal_header {
        margin-top: 2%;
    }

    .best_deal_header>.row>.col-10>h6 {
        font-size: 16px;
        border-bottom: 1px solid rgba(172, 178, 182, 0.733);
        padding: 3%;
        margin-right: 2%;
        color: rgb(6, 56, 82);
    }

    .best_deal_header>.row>.col-2>i {
        display: none;
    }

    .best_deal_items {
        margin-top: 5%;
    }

    .best_deal_items>.row>.col-6 {
        height: 380px;
        margin-bottom: 7%;
    }

    .best_deal_items>.row>.col-3 {
        height: 380px;
        margin-bottom: 10%;
    }

    .best_deal_item {
        box-shadow: 1px 1px 3px 1px rgba(26, 23, 23, 0.3);
        /* height: 410px; */
        position: absolute;
        width: 92%;
        margin-left: -4.5%;

    }

    .best_deal_item>img {
        width: 90%;
        margin: 15% 5% 0% 5%;
    }

    .item_ratings {
        margin-top: 15%;
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
        background-color: rgb(255, 114, 0);
        color: #fff;
        margin-bottom: 10%;
        margin-top: 10%;
        font-weight: bolder;
    }




    /*previous and next */

    .prev_next {
        height: 150px;
        margin-top: 2%;
    }

    .prev {
        display: flex;
        border: 1px solid rgb(255, 114, 0);
        margin-top: 2%;
        background-color: rgb(255, 114, 0);
        padding: 2% 0%;

    }

    .prev>h5 {
        font-size: 14px;
        margin-left: 3%;

        color: #fff;
        margin-top: 1.5%;
    }

    .prev>i {
        color: #fff;
        margin-left: 6%;
        margin-top: 1.3%;
    }

    .next {
        display: flex;
        border: 1px solid rgb(255, 114, 0);
        margin-top: 2%;
        background-color: #fff;
        ;
        padding: 2% 0%;
    }

    .next>h5 {
        font-size: 14px;
        margin-left: 75%;
        margin-top: 1.5%;
        color: rgb(6, 56, 82);
    }

    .next>i {
        color: rgb(255, 114, 0);
        margin-left: 5%;
        margin-top: 1.3%;
    }

    .row_resize {
        width: 95%;
        margin: 0% 2.5%;
    }

    .page_count {
        margin-top: 5%;
    }

    .page_count>h6 {
        font-size: 13px;
        color: rgb(6, 56, 82);
    }

    .page_count>h6>span {
        border: 1px solid rgb(255, 114, 0);
        padding: .5% 3% .5% 3%;
    }




}
</style>