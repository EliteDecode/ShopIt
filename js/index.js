
//NavBar navigation toggler

var navContent = document.querySelector('.nav_content');
var collapseBar = document.querySelector('.collapse_bars')
var closeBtn = document.querySelector('.close_btn');


collapseBar.addEventListener('click', e=>{
   navContent.classList.add('showNav')
   $('body').wrapInner($('<div id = "height-helper"/>').css({
     height: $('.nav_content').height(),
     overflow: "hidden"
   }))
})

closeBtn.addEventListener('click', e=>{
    navContent.classList.remove('showNav')
  $('#height-helper').css({
      height: $('body').height(),
      overflow: "visible"
    })
})


//End



//Cart-Count

let plus = document.getElementById('plus');
let minus = document.getElementById('minus');
let cartCount = document.getElementById('cart_count');

plus.addEventListener('click', ()=>{
  cartCount.value = parseInt(cartCount.value) + 1;

}); 

minus.addEventListener('click', ()=>{
  cartCount.value = parseInt(cartCount.value) - 1;
}); 


//add to cart in cart.hml

//cart color selection
var greyCart = document.querySelector('.grey');
var blackCart = document.querySelector('.black');
var cyanCart = document.querySelector('.cyan');
var darkCart = document.querySelector('.dark');


var imgColor = document.querySelector('.img_color');

greyCart.addEventListener('click', e=>{
      imgColor.classList.add("img_color_grey")
      imgColor.classList.remove("img_color_dark")
      imgColor.classList.remove("img_color_black")
      imgColor.classList.remove("img_color_cyan")
});
blackCart.addEventListener('click', e=>{
      imgColor.classList.add("img_color_black")
      imgColor.classList.remove("img_color_dark")
      imgColor.classList.remove("img_color_grey")
      imgColor.classList.remove("img_color_cyan")
});

cyanCart.addEventListener('click', e=>{
      imgColor.classList.add("img_color_cyan")
      imgColor.classList.remove("img_color_dark")
      imgColor.classList.remove("img_color_black")
      imgColor.classList.remove("img_color_grey")
});

darkCart.addEventListener('click', e=>{
      imgColor.classList.add("img_color_dark")
      imgColor.classList.remove("img_color_grey")
      imgColor.classList.remove("img_color_black")
      imgColor.classList.remove("img_color_cyan")
});






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

descriptionTab.addEventListener('click', e=>{
  descriptionTabInfo.style.display = "block";
  reviewTabInfo.style.display = "none";
  storeTabInfo.style.display = "none"
});

reviewTab.addEventListener('click', e=>{
    descriptionTabInfo.style.display = "none";
    reviewTabInfo.style.display = "block";
    storeTabInfo.style.display = "none"
  });

  storeTab.addEventListener('click', e=>{
    descriptionTabInfo.style.display = "none";
    reviewTabInfo.style.display = "none";
    storeTabInfo.style.display = "block"
  });




