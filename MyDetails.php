<?php  
session_start();
if (!isset($_SESSION['users'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP IT</title>

    <style>
    label {
        font-weight: bold;
        color: var(--green);
        padding: 1% 0%;
    }
    </style>
</head>
<?php
 include('includes/header.php');
include('database/functions.php');
  include('css/orders_style.php');
  include('includes/components/navigation.php');
?>

<section class="orders">
    <div class="container">

        <a href="customerinfo.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">MY ACCOUNT DETAILS</h6>
        </a>
    </div>
    <!--in orders css-->
    <div class="mt-4">
        <div class="container">
            <div id="msg"></div>
            <?php  
            $email = $_SESSION['users'];
              $result = selectOne('users', ['Email' => $email])
            ?>
            <form action="">


                <label for="lastname">Full Name:</label>
                <input type="text" id="fullname" placeholder="Olufemi" class="form-control"
                    value="<?php echo $result['Fullname'] ?>">

                <label for="email">Email:</label>
                <input type="email" id="email" placeholder="MilesOlu@gmail.com" class="form-control"
                    value="<?php echo $result['Email'] ?>">

                <label for="number">Phone Number:</label>
                <input type="number" id="phone" placeholder="09010000000" class="form-control"
                    value="<?php echo $result['Phone'] ?>">
                <input type="hidden" id="id" value="<?php echo $result['id'] ?>">
                <input type="password" hidden id="pwd" value="<?php echo $result['Pwd'] ?>">

            </form>
        </div>
    </div>


    <div class="orders_body text-center mt-5 mb-3">
        <div class="container">
            <button id='<?php echo $result['id'] ?>' class="btn btn-shop bold" onclick="update()">UPDATE</button>
        </div>
    </div>
</section>

<!--End-->




<?php include('includes/footer.php')?>
<script>
function update() {
    var fullname = $("#fullname").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var id = $("#id").val();


    $.ajax({
        url: "ajax/update_user_details.php",
        method: "post",
        data: {
            fullname: fullname,
            email: email,
            phone: phone,

            id: id

        },
        dataType: "text",
        success: function(data) {
            $("#msg").html(data);
            console.log(data);

        }
    });
}
</script>