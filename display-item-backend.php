<?php

//connect db
include_once __DIR__.'/include/connect-db.inc.php';

//get id from url
$item_id = clean_input($_GET['item_id']);
$get_item_id = explode("-",$item_id);
$item_id = $get_item_id[2];

//get all the item information from db
$get_item_info = mysqli_query($conn, "SELECT * FROM items_list WHERE item_id='$item_id'");
if(mysqli_num_rows(($get_item_info))> 0)
{
    //get all the info
    $all_info = mysqli_fetch_assoc($get_item_info);

    //store all the info
    $item_id_num = $all_info['item_id'];
    $item_code = $all_info['item_code'];
    $item_name = $all_info['item_name'];
    $item_type = $all_info['type'];
    $item_descr = $all_info['description'];
    $item_add_info = $all_info['additional_info'];
    $item_color = $all_info['color'];
    $item_image_path = $all_info['image_path'];
    $item_price = $all_info['item_price'];
    $item_upload_data = $all_info['upload_date'];


}

?>