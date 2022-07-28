<?php  session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP IT</title>
</head>
<?php 
  include('includes/header.php');
  include('css/orders_style.php');
  include('includes/components/navigation.php');
  include('database/functions.php');


  $email = $_SESSION['users'];
  $res =selectOne('users', ['Email' => $email]);
  $id = $res['id'];
?>

<section class="orders">
    <div class="container mb-3">
        <a href="customerinfo.php" class="d-flex border-bottom"><i class="fa fa-arrow-left font-20 dark-green mr-2"></i>
            <h6 class="bold dark-green font-16 " style="padding-top:.3%;">PASSWORD</h6>
        </a>
    </div>
    <!--in orders css-->
    <div class="account_form">
        <div class="container">
            <div id="msg"></div>
            <form action="" method="post" enctype="multipart/form-data" class='form'>
                <input type="hidden" name='id' value='<?php echo $id ?>' id='id'>
                <div class="form-group">
                    <label for="payment" style="font-size:14px; font-weight:bold;">Old
                        Password</label>
                    <input type="password" name="method" class="form-control" placeholder="Your Old password..."
                        id='old_password' />
                    <div class="invalid-feedback  error-old " style='padding-left:0%; position:absolute'>
                        Please your old password is needed.
                    </div>
                </div>
                <div class="form-group">
                    <label for="payment" style="font-size:14px; font-weight:bold;">New
                        Password</label>
                    <input type="password" name="method" class="form-control" placeholder="Your New password..."
                        id='new_password' />
                    <div class="invalid-feedback password-error error-new" style='padding-left:0%; position:absolute'>
                        Please choose a new password.
                    </div>
                </div>
                <div class="form-group">
                    <label for="payment" style="font-size:14px; font-weight:bold;">Retype New
                        Password</label>
                    <input type="password" name="method" class="form-control" placeholder="Retype your New password..."
                        id='new_password2' />
                    <div class="invalid-feedback password-error error-new2" style='padding-left:0%; position:absolute'>
                        Please re-enter your new password.
                    </div>
                </div>

            </form>
        </div>
    </div>


    <div class="orders_body text-center mt-3">
        <div class="container">
            <button class="btn btn-shop-alt w-100" onclick="update_password()">UPDATE</button>
        </div>
    </div>
</section>

<!--End-->





<?php include('includes/footer.php')?>
<script>
function update_password() {


    var oldpassword = $("#old_password").val();
    var new_password = $("#new_password").val();
    var new_password2 = $("#new_password2").val();
    var id = $("#id").val();

    if (oldpassword == "") {
        $("#old_password").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-old').show();

    } else {
        $("#old_password").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-old').hide();

    }


    if (new_password == "") {
        $("#new_password").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-new').show();

    } else {
        $("#new_password").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-new').hide();

    }

    if (new_password2 == "") {
        $("#new_password2").removeClass('form-control').addClass('form-control is-invalid');
        $('.error-new2').show();

    } else {
        $("#new_password2").removeClass('form-control is-invalid').addClass('form-control');
        $('.error-new2').hide();

    }


    if (oldpassword != "" && new_password != "" && new_password2 != "") {

        $("#hide-fa").show();

        $.ajax({
            url: "ajax/user_update_password.php",
            method: "post",
            data: {
                old_password: oldpassword,
                new_password: new_password,
                new_password2: new_password2,
                id: id
            },
            dataType: "text",
            success: function(data) {
                $("#msg").html(data);
            }
        });

    }


}
</script>