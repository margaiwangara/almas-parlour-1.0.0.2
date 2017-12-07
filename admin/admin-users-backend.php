<?php

//include db file
include_once __DIR__.'/../include/connect-db.inc.php';

$user_error = false;
//get data from db
$get_users = mysqli_query($conn, "SELECT * FROM user_registration ORDER BY creation_date DESC");
if(mysqli_num_rows($get_users) > 0)
{
    //get data
    while($get_user_data = mysqli_fetch_assoc($get_users))
    {
        $user_id [] = $get_user_data['user_id'];
        $user_email [] = $get_user_data['email'];
        $accnt_conf [] = $get_user_data['confirmed'];
        $reg_date [] = $get_user_data['creation_date'];
    }
}
else
    $user_error = "No existing user account has been found";

?>