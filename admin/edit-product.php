<?php

//connect to db
include_once __DIR__.'/../include/connect-db.inc.php';

//get data from url
$prod_id = clean_input($_GET['product_id']);

//get item info from db
$item_info = mysqli_query($conn, "SELECT * FROM items_list WHERE item_id='$prod_id' ORDER BY upload_date DESC");
if($item_info)
    echo "The item has been found";
else
    echo "Item has not been found";



?>