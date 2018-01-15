<?php

//require db
require_once __DIR__.'/../include/connect-db.inc.php';

$item_count = $total_fav_count = 0;
if(isset($_SESSION['USER_EMAIL']))
{
    $item_id = clean_input($_GET['ic']);
    $user_id = $_SESSION['USER_EMAIL'];

    //explode item
    $get_item_id = explode("-",$item_id);
    $item_id = $get_item_id[1];

    //get user id
    $user_id_acq = mysqli_query($conn, "SELECT * FROM user_registration WHERE  email = '$user_id'");
    if(mysqli_num_rows($user_id_acq) > 0)
    {
        $get_id = mysqli_fetch_assoc($user_id_acq);
        $user_id = $get_id['user_id'];

        $get_item_table = mysqli_query($conn, "SELECT * FROM fav_items WHERE item_id ='$item_id' AND user_id='$user_id'");
        if(mysqli_num_rows($get_item_table) > 0)
        {
            $item_count = mysqli_num_rows($get_item_table);
        }

    }




}


?>