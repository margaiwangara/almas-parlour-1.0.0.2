<?php

//include db connection
require_once __DIR__ . '/include/connect-db.inc.php';

$error_message = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email = clean_input($_POST['create_email_name']);
    $password = clean_input($_POST['create_password_name']);
    $confirm_password = clean_input($_POST['create_cfpassword_name']);

    //check if input was null
    if(empty($email) | empty($password) | empty($confirm_password))
        $error_message = "All input is required";
    if(strlen($password) < 8)
        $error_message = "Minimum password length is 8 characters";
    else if($password != $confirm_password)
        $error_message = "Passwords don't match";
    else
    {
        //encrypt password before db input
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        //check if user already exists in db
        $user_existance = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email'");
        if(mysqli_num_rows($user_existance)>0)
            $error_message = "Email already exists";
        else
        {
            //input data int
            $send_to_db = mysqli_query($conn, "INSERT INTO user_registration(email, password) VALUES ('$email', '$hashed_password')");
            if(!$send_to_db)
                $error_message = "Registration failed. Please try again";


        }



    }
    echo $error_message;

}
?>