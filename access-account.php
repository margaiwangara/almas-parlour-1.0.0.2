<?php
//set sesssion
session_start();

//include connect db file
require_once __DIR__ . '/include/connect-db.inc.php';

$error_message = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //get input values
    $email = clean_input($_POST['access_username_name']);
    $password = clean_input($_POST['access_password_name']);

    //check if input was empty
    if(empty($email) || empty($password))
        $error_message = "All input is required";
    else if(isset($_POST['access_rememberuser_name']))
    {
        setcookie('REMEMBER_USER',$email,time()+(24*60*60));
    }
    else
    {
        //access the account
        $get_from_db = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email' AND password = '$password'");
        if(mysqli_num_rows($get_from_db) > 0)
            $some_code = "Account Access Successful";
        else
            $error_message = "Invalid Email or Password";
    }

    echo $error_message;
}

?>