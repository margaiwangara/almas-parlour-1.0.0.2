<?php

//session set
session_start();

//require db
require_once 'include/connect-db.inc.php';

if(isset($_SESSION['USER_EMAIL']))
{
    $email = $_SESSION['USER_EMAIL'];

    $user_info = mysqli_query($conn,"SELECT * FROM user_registration WHERE email='$email'");
    if(mysqli_num_rows($user_info) > 0)
    {
        $acquire_info = mysqli_fetch_assoc($user_info);

        $ad_name = $acquire_info['adress_name'];
        $ad = $acquire_info['adress'];
        $name = ucfirst($acquire_info['name']);
        $surname = ucfirst($acquire_info['surname']);
        $county = $acquire_info['city'];
    }


    echo json_encode(array('ad_name'=>$ad_name,'ad'=>$ad,'name'=>$name,'surname'=>$surname,'county'=>$county));
}
else
    echo "No session";
?>