<?php

//session
session_start();

//db
require_once 'include/connect-db.inc.php';

//initialize
$total_favs = 0;
if(isset($_SESSION['USER_EMAIL']))
{
    $item_id =
    $user_id = $_SESSION['USER_EMAIL'];

    //check availability
    $get_fav = mysqli_query($conn, "SELECT * FROM fav_items WHERE user_id='$user_id' AND item_id='$item_id'");
    if(mysqli_num_rows($get_fav) > 0)
    {
        $total_favs = mysqli_num_rows($get_fav);
    }

    echo json_encode(array('total_favs'=>$total_favs));
}

?>