<?php


include('../database/functions.php');


$old = $_POST['old_password'];
$new = $_POST['new_password'];
$new2 = $_POST['new_password2'];
$id = $_POST['id'];

$old_password = password_hash($old, PASSWORD_DEFAULT);

$result =selectOne('users', ['id' => $id]);

$pwd = $result['Pwd'];

if (!password_verify($old, $pwd)) {
    echo" <script>
    $('#hide-fa').hide();;
    $('#old_password').removeClass('form-control').addClass('form-control is-invalid');
    $('.error-old').show();
    $('.error-old').html('Incorrect old Password');
 </script>";

}elseif ($new != $new2) {
    echo" <script>
             $('#hide-fa').hide();
             $('#new_password').removeClass('form-control').addClass('form-control is-invalid');
             $('#new_password2').removeClass('form-control').addClass('form-control is-invalid');
             $('.password-error').show();
             $('.password-error').html('Both password must match');
     </script>";
 }else{
    echo" <script>
    $('#hide-fa').hide();;
    $('#old_password').removeClass('form-control is-invalid').addClass('form-control');
    $('#new_password').removeClass('form-control is-invalid').addClass('form-control');
    $('#new_password2').removeClass('form-control is-invalid').addClass('form-control');
    $('.error-old').hide();
    $('.password-error').hide();

 </script>";
    $new_password = password_hash($new, PASSWORD_DEFAULT);

             update('users', $id, ['Pwd' => $new_password]);
              echo  "
              <script>
              function hide(){
                  var msg = document.getElementById('mssg').style.display='none';
              }
              setTimeout('hide()', 5000)
              </script>
              <div class='alert alert-success alert-dismissible' id='mssg'>
             
              <strong class='text-center'>Password Updated Successfully</strong> 
            </div>";
}