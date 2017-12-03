<?php

//include db
require_once __DIR__.'/include/connect-db.inc.php';

$error_message = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //get value
    $email = clean_input($_POST['reset_pass_email']);
    $reset_code = rand(1523568,952758746);

    //check if email is available in db
    $get_email = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email'");
    if(mysqli_num_rows($get_email) > 0)
    {
        //write in the random code
        mysqli_query($conn, "UPDATE user_registration SET pass_reset_code='$reset_code',pass_reset_confirmed='0' WHERE email='$email'");

        //send an email to user
        //$handle = fopen("files-redirect/reset-password.html","a");

        //get user data
        $to = $email;
        $from = "no-reply@almasparlour.co.ke";
        $subject = "Password Reset";
        $reset_link = "http://www.almasparlour.co.ke/almas-parlour/forgot-password-reset-face.php?email=$email&reset_code=$reset_code";
        $message = "Hello ".substr($email,0,strpos($email,'@')).",\r\nPlease click the link below to reset your password\r\n".$reset_link;

        //headers
        $headers = 'MIME Version: 1.0'."\r\n";
        $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        //additional headers
        $headers = 'From: Do Not Reply <no-reply@almasparlour.co.ke>'."\r\n";

        //send email
        if(mail($to,$subject,$message,$headers))
            echo "<script>alert('Please check your email to reset your password and access your account');</script>";
        //write to file
        //fwrite($handle,"<table style='text-align: left;'><tr><th>".$to."</th></tr><tr><th>".$from."</th></tr><tr><th>".$subject."</th></tr></table><table><tr><td>".$message."</td></tr></table>");
        //fclose($handle);


        //header('Refresh: 2;url=access-account-face.php');
    }
    else
        $error_message = "You are not a registered member";

}

?>