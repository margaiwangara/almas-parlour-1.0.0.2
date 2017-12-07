<?php

//set session
session_start();

//require db
require_once 'include/connect-db.inc.php';

//get data

if(isset($_SESSION['USER_EMAIL']))
{
    //form data
    $address_name = clean_input($_GET['addr_name']);
    $address = clean_input($_GET['user_addr']);
    $email = clean_input($_GET['user_email']);
    $name = clean_input($_GET['user_name']);
    $surname = clean_input($_GET['user_surname']);
    $county = clean_input($_GET['user_city']);

    //update db
    $update_user = mysqli_query($conn, "UPDATE user_registration SET adress_name = '$address_name',adress='$address',
                    email='$email',name='$name',surname='$surname',city='$county' WHERE email='$email'");
    if($update_user)
        echo "Account Details Updated";
    else
        echo "Update Failed";

}


?>