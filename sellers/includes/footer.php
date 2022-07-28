  <!--jquery linking-->
  <script src="./dashboard.js" type="text/javascript"></script>
  <script src="../js/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="../sellers/js/jquery-ui-1.13.1/jquery-ui.min.js" type="text/javascript"></script>

  <script type="text/javascript">
$("#followersTab").tabs();

$("#tabs").tabs();

$("#productTab").tabs();
$("#edittab").tabs();



$('#bars').click(function() {
    document.getElementById('tab').style.display = 'block';
})

$('#close').click(function() {
    document.getElementById('tab').style.display = 'none';
})

var productTable = document.getElementById('product_table')


var productTab = document.getElementById('productTab')
var browseCategory = document.getElementById('browse_cat')
var finishBtn = document.getElementById('finish_btn')

var addBtn = document
    .getElementById('add_btn')
    .addEventListener('click', function() {
        productTable.classList.add('blur')
        productTab.style.display = 'block'
    })
var close_p = document
    .getElementById('close_p')
    .addEventListener('click', function() {
        productTable.classList.remove('blur')
        productTab.style.display = 'none'
        productTable.style.display = 'block'
    })


finishBtn.addEventListener('click', function() {
    productTable.style.display = 'block'
    productTab.style.display = 'none'
})
  </script>

  <!--Bootsrtap js link-->
  <script src="../js/bootstrap.min.js"></script>
  </body>

  </html>