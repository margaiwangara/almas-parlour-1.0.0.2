<?php

//session start
if(session_status() == PHP_SESSION_NONE)
    session_start();

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

//total favourites initialization
$total_fav_count = FALSE;

if(isset($_SESSION['USER_EMAIL']))
{
    $user_id = $_SESSION['USER_EMAIL'];

    //get user id
    $user_id_acq = mysqli_query($conn, "SELECT user_id FROM user_registration WHERE  email = '$user_id'") or trigger_error("User id query failed");
    if(mysqli_num_rows($user_id_acq) == 1)
    {
        $get_id = mysqli_fetch_assoc($user_id_acq);
        $user_id = $get_id['user_id'];

        //get total item count
        $user_fav_count = mysqli_query($conn, "SELECT * FROM fav_items WHERE user_id='$user_id'") or trigger_error("fav items acquisition query failed");
        if(mysqli_num_rows($user_fav_count) > 0)
        {
            $total_fav_count = mysqli_num_rows($user_fav_count);
        }
    }

    //echo total favorites count
    echo $total_fav_count;
}


?>