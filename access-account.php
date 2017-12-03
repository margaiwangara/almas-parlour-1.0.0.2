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
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);
        //access the account
        $get_from_db = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$email'");
        if(mysqli_num_rows($get_from_db) > 0)
        {
            //get password from database
            $db_data = mysqli_fetch_assoc($get_from_db);
            $password_data = $db_data['password'];
            $confirmed = $db_data['confirmed'];

            if(password_verify($password,$password_data))
            {
                if($confirmed == '1')
                {
                    //initialize sessions for user
                    $_SESSION['USER_EMAIL'] = $email;

                    //redirect to index page
                    header('Location:index.php');
                }
                else
                    $error_message = "Access Denied!Error: Please activate your account before attempting to Log In";

            }
            else
                $error_message = "Invalid Email or Password";

        }
        else
            $error_message = "You are not registered as a member";
    }


}

?>