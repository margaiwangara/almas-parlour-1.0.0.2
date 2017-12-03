<?php

//start session
session_start();

//include db
include_once __DIR__.'/../include/connect-db.inc.php';

$error = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //get data from form
    $email = clean_input($_POST['admin_username']);
    $password = clean_input($_POST['admin_pass']);

    if(empty($email) || empty($password))
        $error = "Please input all fields";
    else
    {
        //check if the input is the same as the database input. check through the encryption
        $access_account = mysqli_query($conn, "SELECT * FROM admin_info WHERE username = '$email'");
        if(mysqli_num_rows($access_account) > 0)
        {
            //get data from the db for comparison
            $get_data = mysqli_fetch_assoc($access_account);
            $pass_confirm = $get_data['password'];

            if(password_verify($password,$pass_confirm))
            {
                //set session
                $_SESSION['ADMIN_EMAIL'] = $email;

                //redirect to index page
                echo "Login Success. Redirecting...<script>setTimeout(function(){window.location.replace('index.php');},2000)</script>";
            }
            else
                $error = "Login Failed";
        }
        else
            $error = "You are not registered as an administrator";

    }
}

?>