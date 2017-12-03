<?php
//include db
include_once __DIR__.'/../include/connect-db.inc.php';

$error = $item_dresses = $item_jumpsuits = $item_cosmetics = $item_nightgown = '';

//get data from the db
$products = mysqli_query($conn, "SELECT * FROM items_list ORDER BY upload_date DESC");
if(mysqli_num_rows($products) > 0)
{
    //get all the data
    while($alldata = mysqli_fetch_assoc($products))
    {
        //store each data in their arrays
        $products_id [] = $alldata['item_id'];
        $products_code [] = $alldata['item_code'];
        $products_name [] = $alldata['item_name'];
        $products_type [] = $alldata['type'];
        $products_descr [] = $alldata['description'];
        $add_info [] = $alldata['additional_info'];
        $products_color [] = $alldata['color'];
        $products_img [] = $alldata['image_path'];
        $products_price [] = $alldata['item_price'];
        $products_date [] = $alldata['upload_date'];
    }
}
else
    $error = "No products to display";

    echo json_encode(array('prod_id'=>$products_id,'prod_code'=>$products_code,'prod_name'=>$products_name,'prod_type'=>$products_type,
        'prod_desc'=>$products_descr,'add_info'=>$add_info,'prod_color'=>$products_color,'prod_img'=>$products_img,
        'prod_price'=>$products_price,'prod_date'=>$products_date,'error_mess'=>$error));

//append data into variables to show in html
/*
    for($i=0;$i<count($products_id);$i++)
    {
        if($products_type[$i] == 'dress')
        {
            $item_dresses .= "<tr><td><img src='../".$products_img[$i]."' alt=img-dresses-".$products_id[$i]." height='40' width='40'/></td>
                                    <td>".$products_code[$i]."</td><td>".$products_name[$i]."</td><td>".$products_descr[$i]."</td>
                                    <td>".$products_price[$i]."</td><td>".$products_date[$i]."</td></tr>";
        }
        else if($products_type[$i] == 'jumpsuits')
        {
            $item_jumpsuits .= "<tr><td><img src='../".$products_img[$i]."' alt=img-dresses-".$products_id[$i]." height='40' width='40'/></td>
                                    <td>".$products_code[$i]."</td><td>".$products_name[$i]."</td><td>".$products_descr[$i]."</td>
                                    <td>".$products_price[$i]."</td><td>".$products_date[$i]."</td></tr>";
        }
        else if($products_type[$i] == 'cosmetics')
        {
            $item_cosmetics .= "<tr><td><img src='../".$products_img[$i]."' alt=img-dresses-".$products_id[$i]." height='40' width='40'/></td>
                                    <td>".$products_code[$i]."</td><td>".$products_name[$i]."</td><td>".$products_descr[$i]."</td>
                                    <td>".$products_price[$i]."</td><td>".$products_date[$i]."</td></tr>";
        }
        else if($products_type[$i] == 'nightgown')
        {
            $item_nightgown .= "<tr><td><img src='../".$products_img[$i]."' alt=img-dresses-".$products_id[$i]." height='40' width='40'/></td>
                                    <td>".$products_code[$i]."</td><td>".$products_name[$i]."</td><td>".$products_descr[$i]."</td>
                                    <td>".$products_price[$i]."</td><td>".$products_date[$i]."</td></tr>";
        }

    }
*/


?>