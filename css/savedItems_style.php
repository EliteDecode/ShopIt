<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

}

/*universal*/



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

.saved {
    margin-top: 7%;
}




@media(max-width:523px) and (min-width:0px) {
    .saved {
        margin-top: 27% !important;
    }
}

@media(max-width:765px) and (min-width:524px) {
    .saved {
        margin-top: 12%;
    }
}

@media(max-width:990px) and (min-width:765px) {
    .saved {
        margin-top: 10%;
    }
}
</style>