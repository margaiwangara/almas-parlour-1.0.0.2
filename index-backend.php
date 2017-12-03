<?php

//include connect db file
include_once __DIR__.'/include/connect-db.inc.php';

//get new arrivals
$new_arrivals = mysqli_query($conn, 'SELECT * FROM items_list ORDER BY upload_date DESC LIMIT 6');
if(mysqli_num_rows($new_arrivals) > 0)
{
    while($get_new_arrivals = mysqli_fetch_assoc($new_arrivals))
    {
        $new_arrivals_image [] = $get_new_arrivals['image_path'];
        $new_arrivals_name [] = $get_new_arrivals['item_name'];
        $new_arrivals_price [] = $get_new_arrivals['item_price'];
        $new_arrivals_id [] = $get_new_arrivals['item_id'];
    }
}
//num row data
$new_arrivals_rows = mysqli_num_rows($new_arrivals);

//get cosmetics
$cosmetics = mysqli_query($conn, "SELECT * FROM items_list WHERE type='cosmetics' ORDER BY upload_date LIMIT 6");
if(mysqli_num_rows($cosmetics) > 0)
{
    while($get_cosmetics = mysqli_fetch_assoc($cosmetics))
    {
        $cosmetics_image [] = $get_cosmetics['image_path'];
        $cosmetics_name [] = $get_cosmetics['item_name'];
        $cosmetics_price [] = $get_cosmetics['item_price'];
        $cosmetics_id [] = $get_cosmetics['item_id'];
    }
}

//num row data
$cosmetics_row = mysqli_num_rows($cosmetics);

//get jumpsuits
$jumpsuits = mysqli_query($conn, "SELECT * FROM items_list WHERE type= 'jumpsuits' ORDER BY upload_date LIMIT 6");
if(mysqli_num_rows($jumpsuits) > 0)
{
    while($get_jumpsuits = mysqli_fetch_assoc($jumpsuits))
    {
        $jumpsuits_image [] = $get_jumpsuits['image_path'];
        $jumpsuits_name [] = $get_jumpsuits['item_name'];
        $jumpsuits_price [] = $get_jumpsuits['item_price'];
        $jumpsuits_id [] = $get_jumpsuits['item_id'];
    }
}

//num row data
$jumpsuits_row = mysqli_num_rows($jumpsuits);

//get nightgowns
$nightgowns = mysqli_query($conn, "SELECT * FROM items_list WHERE type= 'nightgown' ORDER BY upload_date LIMIT 6");
if(mysqli_num_rows($nightgowns) > 0)
{
    while($get_nightgowns = mysqli_fetch_assoc($nightgowns))
    {
        $nightgowns_image [] = $get_nightgowns['image_path'];
        $nightgowns_name [] = $get_nightgowns['item_name'];
        $nightgowns_price [] = $get_nightgowns['item_price'];
        $nightgowns_id [] = $get_nightgowns['item_id'];
    }
}

//num row data
$nightgowns_row = mysqli_num_rows($nightgowns);

//get dresses
$dresses = mysqli_query($conn, "SELECT * FROM items_list WHERE type= 'dress' ORDER BY upload_date LIMIT 6");
if(mysqli_num_rows($dresses) > 0)
{
    while($get_dresses = mysqli_fetch_assoc($dresses))
    {
        $dresses_image [] = $get_dresses['image_path'];
        $dresses_name [] = $get_dresses['item_name'];
        $dresses_price [] = $get_dresses['item_price'];
        $dresses_id [] = $get_dresses['item_id'];
    }
}

//num row data
$dresses_row = mysqli_num_rows($dresses);
/* This is the trial code to see if it works
echo "<table border='1'><tr><th>Image Path</th><th>Item Name</th><th>Items Price</th></tr>";
for($i=0;$i<mysqli_num_rows($new_arrivals);$i++)
{
    echo "<tr><td>".$new_arrivals_image[$i]."</td><td>".$new_arrivals_name[$i]."</td><td>".$new_arrivals_price[$i]."</td></tr>";
}

echo "</table>";

//something trial
$new_arrivals_image = array();
$new_arrivals_price = array();
$new_arrivals_name = array();

*/
?>