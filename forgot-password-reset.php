<?php

//include connect db
include_once __DIR__.'/include/connect-db.inc.php';

$error_check = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //get values from URL
    $get_email = clean_input($_POST['user_email']);
    $get_code = clean_input($_POST['user_code']);

    //get user input
    $password = clean_input($_POST['pass_reset']);
    $confirm_password = clean_input($_POST['pass_conf_reset']);

    if(empty($password) || empty($confirm_password))
        $error_check = "All fields must be filled";
    else if($password != $password)
        $error_check = "Passwords don't match";
    else if(strlen($password) < 8)
        $error_check = "Minimum password length must be 8 chars";
    else
    {
        //get values from db
        $get_code_data = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$get_email' AND pass_reset_code='$get_code'");
        if(mysqli_num_rows($get_code_data) > 0)
        {
            //encrypt password
            $hashed_password = password_hash($password,PASSWORD_DEFAULT);

            //update password
            $confirm_reset = mysqli_query($conn, "UPDATE user_registration SET password='$hashed_password',pass_reset_code='0',pass_reset_confirmed='1' WHERE email='$get_email'");
            if(!$confirm_reset)
                $error_check = 'Password reset failed';

        }
        else
            $error_check = 'This is not your account! How did you find yourself here?';
    }
    echo $error_check;

}


?>