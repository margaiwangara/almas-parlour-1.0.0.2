<?php

//include db
include_once __DIR__.'/../include/connect-db.inc.php';

$error_message = $images_dir = '';
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $item_code = clean_input($_POST['item_code']);
    $item_name = clean_input($_POST['item_name']);
    $item_type = clean_input($_POST['item_type']);
    $item_descr = clean_input($_POST['item_desc']);
    $add_info = clean_input($_POST['add_info']);
    $item_color = clean_input($_POST['item_color']);
    $item_price = clean_input($_POST['item_price']);

    //validate input
    if(empty($item_code) || empty($item_name) || empty($item_price))
        $error_message = "All required inputs must be filled";
    else if($item_type == 'dress')
        $images_dir ='../items-images/dresses/';
    else if($item_type == 'nightgown')
        $images_dir = '../items-images/nightgowns/';
    else if($item_type == 'cosmetics')
        $images_dir = '../items-images/cosmetics/';
    else if($item_type == 'jumpsuits')
        $images_dir = '../items-images/jumpsuits/';

    //file upload algorithm
    $image_file = $images_dir.basename($_FILES['item_image']['name']);
    $upload_Ok = 1;
    $img_fileType = pathinfo($image_file,PATHINFO_EXTENSION);

    //check if image is actual or fake
    $check = getimagesize($_FILES['item_image']['tmp_name']);
    if($check == false)
    {
        $error_message = "File is not an image";
        $upload_Ok = 0;
    }
    else if(file_exists($image_file))
    {
        //check if file already exists
        $error_message = "File already exists";
        $upload_Ok = 0;
    }
    else if($_FILES['item_image']['size'] > 500000)
    {
        //check file size
        $error_message = "File too large";
        $upload_Ok = 0;
    }
    else if($img_fileType != 'jpg' && $img_fileType != 'jpeg' && $img_fileType != 'png' && $img_fileType != 'gif')
    {
        //limit file extensions
        $error_message = "Sorry only JPG, JPEG, PNG and GIF files allowed";
        $upload_Ok = 0;
    }
    else if(!move_uploaded_file($_FILES['item_image']['tmp_name'],$image_file))
    {
        //upload file failed
        $error_message = "Failed to upload file";
    }
    else
    {
        //image path change
        $image_file = substr($image_file,3);

        //changes to input
        $item_descr = ucfirst($item_descr);
        $item_name = ucwords($item_name);

        //set additional info to be the same as item desc
        if(empty($add_info))
            $add_info = $item_descr;
        else if(empty($item_descr))
            $item_descr = $add_info;

        //check if code already exists
        $get_code = mysqli_query($conn, "SELECT * FROM items_list WHERE item_code='$item_code'");
        if(mysqli_num_rows($get_code) > 0)
            $error_message = "Item code already exists. Please input another code";
        else
        {
            //add files to database
            $insert_data = mysqli_query($conn, "INSERT INTO items_list(item_code, item_name, type, description, additional_info, color, image_path, item_price) 
                        VALUES ('$item_code','$item_name','$item_type','$item_descr','$add_info','$item_color','$image_file','$item_price')");
            if(!$insert_data)
                $error_message = "New item not added because ".mysqli_error($conn);
        }

    }
    echo json_encode(array('display_error'=>$error_message));
}
?>

