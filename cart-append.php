<?php

//require db
require_once 'include/connect-db.inc.php';

//get info from form
$user_email = clean_input($_GET['user_id']);
$item_id = clean_input($_GET['item_id']);
$quantity = clean_input($_GET['quantity']);
$price = clean_input($_GET['price']);

$message = 0;
//get user info from the db
$get_user_data = mysqli_query($conn, "SELECT * FROM user_registration WHERE email = '$user_email'");
if(mysqli_num_rows($get_user_data) > 0)
{
    $collect_info = mysqli_fetch_assoc($get_user_data);
    $user_id = $collect_info['user_id'];

    //get quantity to compare
    $get_quantity = mysqli_query($conn, "SELECT * FROM items_list WHERE item_id = '$item_id'");
    if(mysqli_num_rows($get_quantity) > 0)
    {
        $orij_data = mysqli_fetch_assoc($get_quantity);
        $orij_quantity = $orij_data['item_quantity'];

        //get the difference btn orijinal and selected quantity
        $new_quantity = $orij_quantity - $quantity;
        if($new_quantity < 0)
            $message = 3;//quantity overload
        else
        {
            //insert into cart
            $add_to_cart = mysqli_query($conn, "INSERT INTO cart_basket(user_id, item_id, quantity, status, item_price) VALUES('$user_id','$item_id','$quantity','carted','$price')");
            if(!$add_to_cart)
                $message = 1;
            else
            {
                mysqli_query($conn, "UPDATE items_list SET item_quantity = '$new_quantity' WHERE item_id='$item_id'");
            }
        }

    }
    else
        echo "Error";

}
else
    $message = 2;

echo $message;

?>