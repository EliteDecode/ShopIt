<?php

session_start();

include('../database/functions.php');
include('../database/db.php');

$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$id = $_POST["id"];


// echo $fullname;
// echo $email;
// echo $phone;
// echo $id;
// echo $pwd;

$result = selectOdd('users', ["Email" => $email, 'id' => $id]);

if ($result) {
    echo" <script>
    $('#hide-fa-p').hide();;
    $('#username').removeClass('form-control').addClass('form-control is-invalid');
    $('.email-error').show();
    $('.email-error').html('Email Already exists');
 </script>";
}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
        
            $('#email').removeClass('form-control').addClass('form-control is-invalid');
            $('.email-error').show();
            $('.email-error').html('Invalid Email Entered');
         </script>";
}else{
   
   
   $data =[
 'Fullname' => $fullname,
 'Email' => $email,
 'Phone' => $phone,
   ];

 
$re = update('users', $id, $data);

  if($re){

    $_SESSION['users'] = $email;
    echo  "
    <script>
    function hide(){
        var msg = document.getElementById('mssg').style.display='none';
    }
    setTimeout('hide()', 5000)
    </script>
    <div class='alert alert-success alert-dismissible' id='mssg'>
   
    <strong class='text-center'>Details Updated Successfully</strong> 
  </div>";
  }

}
?>