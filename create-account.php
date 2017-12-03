<?php

//include db connection
require_once __DIR__ . '/include/connect-db.inc.php';


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //error initialize
    $error_message = 0;

    //get items from form
    $email = clean_input($_POST['create_email_name']);
    $password = clean_input($_POST['create_password_name']);
    $confirm_password = clean_input($_POST['create_cfpassword_name']);
    $confirm_code = rand(96656420,996965264);

    //check if input was null
    if(empty($email) || empty($password))
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
            $send_to_db = mysqli_query($conn, "INSERT INTO user_registration(email, password,confirm_code,confirmed) VALUES ('$email', '$hashed_password','$confirm_code','0')");
            if(!$send_to_db)
                $error_message = "Registration failed. Please try again";
            else
            {
                //code to send to file
                //$handle = fopen('files-redirect/registration-act.html','a');

                //get user information and write message
                $to = $email;
                $from = "no-reply@almasparlour.co.ke\r\n";
                $subject = "Account Confirmation";
                $access_link = "http://www.almasparlour.co.ke/almas-parlour/confirm-account.php?user_email=$email&confirmation_code=$confirm_code";
                $message = "Hello ".substr($email,0,strpos($email,'@')).",\r\nWelcome to Almas Parlour\r\nPlease click on this link to activate your account\r\n".$access_link;

                //headers
                $headers = 'MIME Version: 1.0'."\r\n";
                $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                //additional headers
                $headers = 'From: Do Not Reply <no-reply@almasparlour.co.ke>'."\r\n";

                //write to file..this is just a test run, i will use mail in the real website
                //fwrite($handle,"<table><tr><th>".$to."</th></tr><tr><th>".$from."</th></tr><tr><th>".$subject."</th></tr><tr><td>".$message."</td></tr></table>");
                //fclose($handle);

                //send email
                mail($to,$subject,$message,$headers);

                //redirect to login page and display info to user
                //header('Refresh: 3;url = access-account-face.php');
                echo "<script>alert('Registration Successful. Please check your email to activate your account. Redirecting to Login page in 1 second...');setTimeout(function(){window.location.replace('access-account-face.php');},1000);</script>";


                /*
                echo "<div style='color: green;font-size: 35px;font-weight: bold;position: absolute;left: 25%;'>
                           Registration Successful. Redirecting...
                      </div>";
                */

            }
        }

    }
    //echo $error_message;

}
?>