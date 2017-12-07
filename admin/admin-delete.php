<?php

//include db
include_once __DIR__.'/../include/connect-db.inc.php';

//get info from url
$content_id = clean_input($_GET['content_id']);

//delete from db
$delete_item = mysqli_query($conn, "DELETE FROM items_list WHERE item_id='$content_id'");
if($delete_item)
{
    echo $display_mess = "Deletion successful";
    echo "<script>setTimeout(function(){history.go(-1)},2000);</script>";
}
else
{
    echo $display_mess = "Deletion failed";
    echo "<script>setTimeout(function(){history.go(-1)},2000);</script>";
}


?>