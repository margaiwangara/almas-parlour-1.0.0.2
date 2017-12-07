<?php

//session start
session_start();

//require db
require_once 'include/connect-db.inc.php';

if(isset($_SESSION['USER_EMAIL']))
{
    $user_email = $_SESSION['USER_EMAIL'];
    $item_id = clean_input($_GET['']);

    //get user id
    $get_id = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$user_email'");
    if(mysqli_num_rows($get_id) > 0)
    {
        //get id
        $id_collect = mysqli_fetch_assoc($get_id);
        $user_id = $id_collect['user_id'];

        //insert into favs table
        $add_fav = mysqli_query($conn, "INSERT INTO fav_items(user_id, item_id) VALUES ('$user_id','$item_id')");
        if($add_fav)
            echo "Added to favourites";
        else
            echo "Not added to favourites";
    }
}

?>