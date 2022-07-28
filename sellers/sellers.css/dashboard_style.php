<style>
* {
    margin: 0;
    padding: 0;
    font-family: "Lucida Sans", "Lucida Sans Regular", "Lucida Grande",
        "Lucida Sans Unicode", Geneva, Verdana, sans-serif;
}

:root {
    --green: #3aafa9;
    --dark: #17252a;
    --white: #feffff;
    --dark-green: #2b7a78;
}

.green {
    color: #3aafa9;
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
    background-color: var(--dark-green);
    border: 1px solid var(--dark-green);
    color: var(--white);
}

.btn-shop-alt {
    background-color: var(--white);
    border: 2px solid var(--dark-green);
    color: var(--dark-green);
}

.btn-shop-alt:hover {
    transition: 0.7s ease all;
    background-color: var(--dark-green);
    border: 2px solid var(--dark-green);
    color: var(--white);
}

.border-green {
    border: 1px solid var(--dark-green);
}

#tabs {
    width: 100%;
    height: 1700px;
    padding: 0px;
    overflow: hidden;
    background-color: #fcf7f4;
}

.tab {
    border: 1px solid var(--dark-green);
    height: 1700px;
    margin: 0px;
    padding: 0px;
    position: relative;
    background-color: var(--dark-green);
    color: #fff;
}

@media (max-width: 575px) and (min-width: 0px) {


    .tab {
        border: 1px solid var(--dark-green);
        height: 1700px;
        margin: 0px;
        padding: 0px;
        position: relative;
        background-color: var(--dark-green);
        color: #fff;
        width: 70% !important;
        z-index: 1 !important;
        display: none;
    }

    #tabs {
        overflow: hidden;
    }

    .content {
        height: 1500px;
        padding: 0px;
        position: absolute;
        z-index: 0 !important;
    }

    .dashboard_nav {
        height: 0px !important;
        padding: 3% 0% !important;

    }

    .dashboard_header {
        height: 0px !important;
        padding: 3% 4% !important;

    }

    .dashboard_header_review h2 {
        font-size: 16px !important;
        font-weight: bold;
        margin-left: 5%;
        color: var(--dark-green);
    }

    .dashboard_header_review {
        width: 70% !important;
    }

    .box {
        margin-top: 15% !important;
    }

    .dashboard-charts {
        display: none;
    }

    .dashboard_wrap {
        margin-left: 0%;
    }

    .recent-order .container table {
        box-shadow: 2px 3px 10px rgba(255, 115, 0, 0.29);
        margin-bottom: 40px !important;
        overflow: scroll !important;
        background: #fff;
    }

    .recent-order .container {
        overflow-y: scroll;
    }

    .orders_form {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        margin: 15% 5% 5% 5% !important;
    }

    .analytics_wrap {
        display: none !important;
    }

    .orders {
        overflow-y: scroll;

    }

    .followersTab {
        overflow-x: scroll;

    }

    .followers_header {
        display: block !important;

    }

    .product-table {
        margin-top: 80% !important;
        overflow: scroll;
    }

    .category_tab_section {
        border: 2px solid rgba(54, 53, 53, 0.153);
        width: 100% !important;
        margin: -5% 0% !important;
        padding: 5%;
        background-color: #fff;
        position: relative;
    }

    .product_info_details .title h5,
    .image_tab h6 {
        font-size: 15px;
        color: var(--dark-green);
        font-weight: normal;
        transform: translateY(0px) !important;
    }

    .product_info_details .title {
        width: 50%;
        text-align: left !important;
        font-weight: bold !important;
    }

    .category_tab_section ul .ui-tabs-active a {
        color: #fff;
        font-size: 12px !important;
    }


    /* #edittab {
        margin-top: -170% !important;
    } */

    .p {
        display: none;
    }

    .mob-text {
        margin-bottom: 5%;
    }

    /* #productTab {
        margin-top: -230% !important;
    } */




}


/* .content {
    height: 155500px;
    padding: 0px;
} */



.img h3 {
    text-align: center;
    font-size: 12px;
    text-transform: capitalize;
    font-weight: bolder;
}

.tab ul li {
    list-style: none;
    font-size: 15px;
    margin: 15% 0%;
    text-align: center;
    font-weight: bolder;
}

.img img {
    width: 30%;
    margin: 15% 35% 4% 35%;
    border-radius: 100%;
}

.sellersInfo {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.sellersInfo h6 {
    font-size: 12px;
    margin: 2% 7%;
    font-weight: normal;
}

/* .dashboard_nav {
    height: 230px;
} */

/* .dashboard_wrap {
  display: none;
} */

.dashboard_header {
    width: 100%;
    height: 60px;
    padding: 0% 4%;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.dashboard_header_review h2 {
    font-size: 22px;
    color: var(--dark-green);
    font-weight: bold;
}

.dashboard_header_review {
    margin-top: 2%;
    width: 35%;
}

.dashboard_alerts {
    width: 20%;
    height: 50px;
    margin-top: 2%;
    display: flex;
    justify-content: flex-end;
}

.dashboard_alerts i {
    margin: 0% 4%;
    font-size: 20px;
    color: var(--dark-green);
}



.box {
    margin-top: 4%;
    margin-bottom: 5%;
}

.box h5 {
    font-size: 15px;
    text-transform: uppercase;
    font-weight: bold;
    color: var(--dark-green);
}

.statistics {
    border: 1px solid #fff;
    padding: 2% 5%;
    box-shadow: 2px 7px 13px #888888;
    margin-top: 2%;
    background-color: #fff;
    margin-bottom: 5%;
}

.statistics h6 {
    margin: 5% 0%;
    text-transform: capitalize;
    font-weight: lighter;
    font-size: 13px;
}

.statistics h5 {
    margin-bottom: 8%;
    font-weight: bolder;
}

.progress {
    margin-bottom: 5%;
}

.progress-bar {
    background-color: var(--dark-green);
}

.rate_color {
    color: var(--dark-green);
}

.chart_img {
    height: 200px;
    margin: 0.5% 0%;
    width: 100%;
}

.chart_img img {
    border: 1px solid #fff;
    box-shadow: 2px 7px 13px #888888;
    width: 90%;
    margin: 0% 4%;
}

.recent {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 9% 5% 2% 0%;
}

.recent h1 {
    font-size: 22px;
    font-weight: bold;
    color: var(--dark-green);
}

.recent-orders .container table {

    box-shadow: 2px 3px 10px rgba(255, 115, 0, 0.29);
    margin-bottom: 40px !important;
}


.recent-orders .container table thead tr th {
    width: 14.28%;
    font-size: 13px;
    position: relative;

}

td {
    font-size: 12px;
    font-weight: bold;
    color: var(--dark-green);
}

/*orders*/

/* .orders {
  display: none;
} */

.orders_form {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 2% 5% 5% 5%;
}

.sort {
    width: 50%;
}

.sort label {
    font-size: 16px;
    margin-right: 3%;
    color: var(--dark-green);
}

.sort select {
    width: 45%;
    padding: 1.5% 2%;
    outline: none;
    border-radius: 50px;
    border: 2px solid var(--dark-green);

}

.search input {
    padding: 1.5% 3%;
    border: 2px solid var(--dark-green);
    outline: none;
    width: 100%;
}

.search {
    position: relative;
    display: flex;
    width: 35%;
}

.search i {
    position: absolute;
    left: 315px;
    color: var(--dark-green);
    top: 10px;
}

.orders table thead tr th {
    border: 1px solid var(--dark-green) !important;
    border-left: none !important;
    border-right: none !important;
    width: 12.5% !important;
}

.order_container {
    width: 95%;
    margin: 0% 2.5%;
}

.orders table {
    background-color: #fff;
}

.orders table tbody tr td img {
    width: 50%;
    margin-top: -20%;
}

.orders table tbody tr td {
    text-align: center;
    padding-top: 3%;
    border: 1px solid var(--dark-green) !important;
    color: var(--dark-green);
}

.orders table thead tr th {
    font-size: 13px;
    text-align: center;
    border: 1px solid var(--dark-green) !important;
    color: var(--dark-green);
}

/*pagination*/

nav {
    width: 40%;
    margin: 5% 30%;
    display: flex;
    justify-content: center;
}

nav ul li a {
    color: var(--dark-green) !important;
}

/*end pagination */

/*Analytics */

/* .analytics {
  display: none;
} */

.analytic_btns {
    display: flex;
    justify-content: flex-end;
    padding: 0% 4%;
    margin-top: 3%;
    position: relative;
}

.analytic_btns i {
    position: absolute;
    margin-right: 560px;
    margin-top: 8px;
    color: var(--dark-green);
}

.analytic_btns button {
    border: 1px solid var(--dark-green);
    outline: none;
    margin: 0% 0.1%;
    padding: 0.5% 1%;
    background-color: var(--dark-green);
    color: #fff;
    font-weight: bolder;
    font-size: 14px;
}

.analytic_btns input {
    padding: 0.2% 3%;
    margin: 0% 3%;
}

.search_analytic {
    border-radius: 50px;
}

.analytic_table table tbody tr td {
    border: none !important;
}

.analytic_table table thead tr th {
    color: var(--dark-green);
    font-size: 14px;
}

.analytic_table {
    margin-top: 15%;
    height: 400px;
    padding: 0px 50px;
    overflow-y: scroll;
    box-shadow: 2px 7px 13px #888888;
}

/*followers*/

/* .followers {
  display: none;
} */

#followers,
#following {
    border: 1px solid rgba(155, 217, 250, 0.037);
    height: 700px;
}

#followersTab {
    margin-top: -10%;
}

.followers_header {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    margin: 0% 5%;
}

.followers_header .text h5 {
    font-size: 14px;
    text-transform: capitalize;
}

.followers_header .text {
    margin: 2.5% 5% 5% 0%;
}

.followers_search {
    position: relative;
    width: 35%;
    margin-top: 2%;
}

.followers_search input {
    border-radius: 50px;
    padding: 1.6% 3%;
    width: 100%;
    font-size: 12px !important;
}

.followers_search i {
    position: absolute;
    margin-left: 270px;
    margin-top: 7px;
}

.followers_box_content {
    border: 2px solid var(--dark-green);
    height: 140px;
    padding: 0px;
    color: var(--dark-green);
    background-color: #fff;
    margin-top: 5%;
    margin-bottom: 3%;
}

.box_content {
    display: flex;
    flex-direction: row;
    height: 90px;

    padding: 8px;
    border-top: none;
    border-right: none;
    border-left: none;
}

.box_content .img img {
    border-radius: 100%;
    width: 100%;
}

.box_content .img {
    width: 30%;
    height: 50px;
    margin-right: 4%;
}

.box_content_write_up h5 {
    font-size: 14px;
    margin-top: 4px;
}

.box_content_write_up {
    margin-left: 9%;
}

.box_content_write_up h6 {
    font-size: 12px;
    opacity: 0.7;
    margin-top: -5px;
}

.box_content_write_up h3 {
    font-size: 8px;
}

.followers_box_tags {
    display: flex;
    justify-content: center;
}

.followers_box_tags i {
    margin: 5% 2%;
    font-size: 18px;
}

/* styling tabs */
.tab .ui-tabs-nav {
    background-color: var(--dark-green) !important;
    display: flex;
    flex-direction: column;
    border: none !important;
    padding: 0px;
}

.tab ul li .ui-tabs-anchor {
    text-align: center !important;
    color: #fff;
}

.tab ul .ui-tabs-tab {
    background-color: var(--dark-green) !important;
    border: none;
    margin: 5% 0% !important;
    display: flex;
    justify-content: center;
}

.ul:hover {
    background-color: #fff;
    padding: 0% 0%;
}

.ul:hover>li a {
    color: var(--dark-green) !important;
}

.ul li {
    padding: 3% 0%;
}

.ul {
    width: 97%;
    margin: 0% 1.5%;
}

.tab ul .ui-tabs-active {
    background-color: #fff !important;
    color: var(--dark-green);
}

.tab ul .ui-tabs-active a {
    color: var(--dark-green);
}

.tab ul li .ui-tabs-anchor:hover {
    color: var(--dark-green) !important;
    background-color: #fff !important;
    width: 100%;
}

.tab ul .ui-tabs-tab {
    transition: 0.5s ease all;
    padding: 0px;
}

/* products */

.dashboard_alerts .btn {
    border: 1px solid var(--dark-green);
    display: flex;
    flex-direction: row;
    margin-right: 15%;
    padding: 2.9px 14px;
    height: 32px;
    background-color: var(--dark-green);
    color: #fff;
}

.dashboard_alerts .btn h5 {
    font-size: 15px;
    margin-top: 8%;
}

.dashboard_alerts .btn i {
    font-size: 15px;
    margin-top: 11%;
    margin-left: -10%;
    padding-left: 2%;
    color: #fff;
}

.product_search {
    position: relative;
    width: 100%;
    margin-top: 0.5%;
}

.product_search input {
    border-radius: 50px;
    padding: 1.6% 3%;
    width: 100%;
    font-size: 12px !important;
}

.product_search i {
    position: absolute;
    margin-left: 220px;
    margin-top: 6px;
    color: var(--dark-green) !important;
    font-size: 17px;
}

.custom_style {
    width: 40%;
}

.product-table {
    margin-top: -2%;
    background-color: #fff;
    overflow: scroll;
    height: 800px;

}


/* .product_table_wrap,
.category_product {
  display: none;
} */

.browse_category {
    display: none;
    margin-top: -20%;
}

.browse_category_header {
    width: 30%;
    margin-top: 5%;
}

.browse_category_header h1 {
    font-size: 22px;
    font-weight: bold;
    text-transform: capitalize;
    color: var(--dark-green);
}

.browse_category_header p {
    font-size: 13px;
}

.browse_category_header .product_search i {
    margin-left: 280px;
}

.category_product .row .col-xl-4 {
    border: 1px solid rgba(65, 64, 64, 0.085);
}

.category_product .row .col-xl-4 ul li {
    list-style-type: none;
    padding: 3% 5%;
    cursor: pointer;
    margin-top: 3%;
    text-align: center;
}

.category_product .row .col-xl-4 ul li a {
    text-decoration: none;
    font-size: 14px;
    padding: 3% 20%;
    margin-top: 5%;
    color: var(--dark-green);
    font-weight: bolder;
}

.category_product .row .col-xl-4 ul li a:hover {
    color: #fff;
    background-color: var(--dark-green);
    border-radius: 20px;
}

.category_product .row .col-xl-4 ul li a:active {
    color: #fff;
    background-color: var(--dark-green);
    border-radius: 20px;
}

.category_product .row .col-xl-4 ul {
    overflow-y: scroll;
    height: 500px;
}

.category_product {
    padding: 2% 4%;
    height: 790px;
    margin-top: 4%;
    box-shadow: 2px 7px 13px var(--dark-green);
    background-color: #fff;
}

.category_product h1 {
    font-size: 20px;
    color: var(--dark-green);
    margin-bottom: 3%;
}

.custom_li li {
    font-size: 14px;
}

.custom_li li input {
    margin-right: 2%;
}

.footer_box {
    border: 2px solid rgba(59, 57, 57, 0.468);
    width: 40%;
    margin: 3% 30%;
    text-align: center;
    justify-content: center;
    padding: 1% 0%;
}

.btn-success {
    background-color: var(--dark-green) !important;
    border: 2px solid var(--dark-green) !important;
    padding: 0.4% 6% !important;
    border-radius: 10px !important;
    margin: 0% 3%;
    outline: none !important;
}

.btn-success:hover {
    background-color: #fff !important;
    color: var(--dark-green);
    border: 2px solid var(--dark-green);
    outline: none !important;
}

.select_btn {
    justify-content: center;
    display: flex;
    align-items: center;
}

.category_tab_section {
    border: 2px solid rgba(54, 53, 53, 0.153);
    width: 80%;
    margin: 0% 10%;
    padding: 5%;
    background-color: #fff;
    position: relative;
}

#productTab {
    display: none;
    position: absolute;
    top: 0;
    left: 0;
    /* margin-top: -115%; */
}

#edittab {
    position: absolute;
    top: 0;
    left: 0;
}

.product_info_details {
    display: flex;
    flex-direction: row;
    padding: 2% 0%;
}

.product_info_details .title {
    width: 50%;
    text-align: center;
}

.product_info_details .title h5,
.image_tab h6 {
    font-size: 15px;
    color: var(--dark-green);
    font-weight: normal;
    transform: translateY(40px);
}

.product_info_details .details p {
    font-size: 12px;
    color: var(--dark-green);
    margin-top: 1%;
    opacity: .8;
}

.product_info_details .details input {
    font-size: 12px;
}

/* .product_information,
.product_details,
.product_pricing {
  display: none;
} */

.product_specification h1 {
    font-size: 15px;
    border-bottom: 1px solid rgba(59, 57, 57, 0.468);
    margin-top: 5%;
    padding-bottom: 2%;
    color: var(--dark-green);
    padding-left: 5%;
    text-transform: capitalize;
}

.image_tab .row {
    display: flex;
    margin-top: 5%;
}

.image_tab .row .adjust {
    justify-content: center;
    display: flex;
    align-items: center;
    margin-top: 7%;
}

/* styling tabs in products */
/* styling tabs */
.category_tab_section .ui-tabs-nav {
    background-color: #fff;

    border: none !important;
    padding: 0px;
}

.category_tab_section ul li .ui-tabs-anchor {
    text-align: center !important;
    color: var(--dark-green);
    font-weight: bolder;
    padding: 5% 3% !important;
    width: 100%;
}

.category_tab_section ul {
    padding: 0px !important;
}

.category_tab_section ul .ui-tabs-tab {
    background-color: #fff;
    border: none;
    margin: 0% 0% !important;
    display: flex;
    margin: 0% 1% !important;
    width: 23% !important;
    justify-content: center;
}

.category_tab_section ul .ui-tabs-active {
    background-color: var(--dark-green) !important;
    color: #fff;

}

.category_tab_section ul .ui-tabs-active a {
    color: #fff;
}

.category_tab_section ul li .ui-tabs-anchor:hover {
    background-color: #fff !important;
    color: #fff !important;
    background-color: var(--dark-green) !important;
    width: 100%;
}

.category_tab_section ul .ui-tabs-tab {
    transition: 0.5s ease all;
    padding: 0px;
}

/*end*/

.blur {
    filter: blur(5px);
    background-color: rgba(0, 0, 0, 0.4);
}
</style>