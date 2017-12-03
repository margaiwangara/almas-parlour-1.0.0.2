<?php

//include db
include_once __DIR__.'/include/connect-db.inc.php';

$error_display = 0;
if($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $confirm_code = clean_input($_GET['confirmation_code']);
    $user_email = clean_input($_GET['user_email']);

    //get data from db and confirm code
    $get_code = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$user_email'");
    if(mysqli_num_rows($get_code) > 0)
    {
        $get_data = mysqli_fetch_assoc($get_code);
        $confirmation = $get_data['confirm_code'];

        if($confirm_code == $confirmation)
        {
            //update the rows in the db
            $update_status = mysqli_query($conn, "UPDATE user_registration SET confirmed='1' , confirm_code='0' WHERE email='$user_email'");
            if(!$update_status)
                echo "<script>alert('Update Failed')</script>";

            //redirect to login page
            //header('Refresh:3;url=access-account-face.php');
            echo "<div style='font-family: Cambria;font-weight: bold;font-size: 35px;color: #004085;position: absolute;top: 2%;left: 17%;'>
                    Account Confirmation Success. Redirecting to Login Page...      
                  </div><script>setTimeout(function(){window.location.replace('access-account-face.php');},3000);</script>";
        }
        else
            echo "<div style='font-family: Cambria;font-weight: bold;font-size: 35px;color: #004085;position: absolute;top: 2%;left: 30%;'>
                    Verification Timeout. This link has expired     
                  </div>";
    }
}


?>