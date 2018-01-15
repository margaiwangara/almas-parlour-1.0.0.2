<?php

//connect to db
require_once __DIR__.'/../include/connect-db.inc.php';

$update_cart_message = FALSE;
if(isset($_SESSION['USER_EMAIL']))
{

    if(isset($_POST['update-cart'])) {
        //user id
        $user_id = $_SESSION['USER_ID'];

        //default checkbox value
        $bool_delete = FALSE;

        //cart id
        if (preg_match('%^[1-9][0-9]{0,20}$%', stripslashes(trim($_POST['cart_item_id']))))
            $item_id = clean_input($_POST['cart_item_id']);
        else {
            $item_id = FALSE;
            $update_cart_message = "Invalid data";
        }

        //quantity update
        if (preg_match('%^[1-9][0-9]{0,20}$%', $_POST['uncart_quantity']))
            $check_quantity = clean_input($_POST['uncart_quantity']);
        else {
            $check_quantity = FALSE;
            $update_cart_message = "Invalid data";
        }

        //checkbox value
        if (isset($_POST['uncart_checker'])) {
            if (preg_match('%^[0-9][0-9]{0,3}$%', stripslashes(trim($_POST['uncart_checker']))))
                $bool_delete = clean_input($_POST['uncart_checker']);
            else {
                $bool_delete = FALSE;
                $update_cart_message = "Invalid data";
            }
        }

        if ($bool_delete) {

            //get quantity before deletion
            $quantity_uncart_query = mysqli_query($conn, "SELECT quantity FROM cart_basket WHERE item_id = '$item_id' AND user_id = '$user_id'") or trigger_error("Query execution failed - Uncart Quantity");
            if (mysqli_num_rows($quantity_uncart_query) == 1) {
                //collect quantity
                $uncart_data = mysqli_fetch_assoc($quantity_uncart_query);
                $uncart_quantity = $uncart_data['quantity'];

                //delete item
                $uncart_query = mysqli_query($conn, "DELETE FROM cart_basket WHERE item_id = '$item_id' AND user_id = '$user_id'") or trigger_error("Uncart delete query failed to execute");
                if (mysqli_affected_rows($conn) == 1) {
                    $update_cart_message = "Item removed from cart";

                    //update item_list
                    $uncart_update = mysqli_query($conn, "UPDATE items_list SET item_quantity = item_quantity + '$uncart_quantity' WHERE item_id = '$item_id'") or trigger_error("Quantity update failed");
                    if (mysqli_affected_rows($conn) == 1)
                        $update_cart_message = "Item deletion and update successful";
                    else
                        $update_cart_message = "Item quantity update failed";
                } else
                    $update_cart_message = "Item failed to delete from cart";
            }


        } else if($check_quantity)
        {
            //check if item quantity is available
            $item_available_query = mysqli_query($conn, "SELECT item_quantity FROM items_list WHERE item_id = '$item_id'") or trigger_error("Item quantity retrieval failed");
            if (mysqli_num_rows($item_available_query) == 1) {

                //get existing quantity
                $existing_data = mysqli_fetch_assoc($item_available_query);
                $existing_quantity = $existing_data['item_quantity'];

                //get the difference with new quantity
                $quantity_difference = $existing_quantity - $check_quantity;

                if ($quantity_difference < 0)//nothing left
                    $update_cart_message = "Quantity exceeded. Only " . $existing_quantity . " items available";
                else {
                    //update the cart basket
                    $cart_new_quantity = mysqli_query($conn, "UPDATE cart_basket SET quantity = '$check_quantity' WHERE item_id = '$item_id' AND user_id = '$user_id'") or trigger_error("Quantity update query failed");
                    if (mysqli_affected_rows($conn) == 1) {
                        $update_cart_message = "Update successful";
                    } else
                        $update_cart_message = "Update failed due to technical difficulties. Please try again later ".mysqli_error($conn);
                }
            }

        }
    }

}

?>