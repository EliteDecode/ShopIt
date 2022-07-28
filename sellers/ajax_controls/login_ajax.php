<?php

session_start();


include('../database/functions.php');


$email = $_POST["email"];
$password = $_POST["password"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>
                     $('#hide-fa').hide();;   
                    $('#email').removeClass('form-control').addClass('form-control is-invalid');
                    $('.email-error').show();
                    $('.email-error').html('Invalid Email Entered');
                 </script>";
        }else{

            echo" <script>
                    $('#email').removeClass('form-control is-invalid').addClass('form-control');
                    $('.email-error').hide();
                 </script>";
                
               $results = selectAll('admin', ['Email' => $email]);

            if (count($results) >= 1) {
               foreach($results as $result){
                   $pwd = $result['Pwd'];
                   if (password_verify($password,$pwd)){
                       $_SESSION['admin'] = $email;
                       echo "<script>window.location.assign('index.php');</script>";
                   }else{
                   echo" <script>
                           $('#hide-fa').hide();;
                           $('#password').removeClass('form-control').addClass('form-control is-invalid');
                           $('.password-error').show();
                           $('.password-error').html('Incorrect Password');
                        </script>";
                   }
               }
            }else{
            echo "<script>
                        $('#email').removeClass('form-control').addClass('form-control is-invalid');
                        $('.email-error').show();
                        $('.email-error').html('Unknown Email Entered');
                </script>";
            }
           

           


           

        }
        