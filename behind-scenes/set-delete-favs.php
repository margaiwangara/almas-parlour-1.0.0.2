<?php

//session
session_start();

//db
require_once 'include/connect-db.inc.php';

//initialize
$total_favs = 0;
if(isset($_SESSION['USER_EMAIL']))
{
    $item_id = clean_input($_GET['fav_item_id']);
    $user_id = $_SESSION['USER_EMAIL'];

    //get user id
    $a_user_id = mysqli_query($conn, "SELECT * FROM user_registration WHERE email='$user_id'");
    if(mysqli_num_rows($a_user_id) > 0)
    {
        $get_a_user_id = mysqli_fetch_assoc($a_user_id);
        $user_id = $get_a_user_id['user_id'];

        //check availability
        $get_fav = mysqli_query($conn, "SELECT * FROM fav_items WHERE user_id ='$user_id' AND item_id='$item_id'");
        if(mysqli_num_rows($get_fav) > 0)
        {

            //delete items from favourites table
            $delete_fav = mysqli_query($conn, "DELETE FROM fav_items WHERE item_id = '$item_id' AND user_id='$user_id'");
            if($delete_fav)
                echo "Item removed from favourites";
            else
                echo "Item not removed from your favourite list";
        }
        else
        {
            //add item to favs
            $add_to_favs = mysqli_query($conn, "INSERT INTO fav_items(user_id, item_id) VALUES ('$user_id','$item_id')");
            if($add_to_favs)
                echo "Item added to favourites";
            else
                echo "Item not added to your favourites list";
        }
    }


}
else
    echo "You must be logged in to add to favourites";

?>