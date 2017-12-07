<?php

//include master file
include_once __DIR__.'/include/master.inc.php';

//include item display php
include_once 'display-item-backend.php';
/*
//echo $_GET['item_id']."<br>";
$explode_item = explode('-','item-id-21');
$explode_first = $explode_item[2];
echo $explode_first;
*/

?>
<title><?php echo $item_name;?></title>
<div class="item-display-container">
    <div class="row">
        <div class="col-md-4">
            <div class="item-image-display">
                <table class="table" align="center">
                    <thead>
                    <tr>
                        <td><img src="<?php echo $item_image_path;?>" alt="item-image" height="300" width="300"/></td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>

        <div class="col-md-4">
            <div class="item-info-display" style="margin-top: 10px;">
                <form action="" method="get">
                <table class="table table-striped">
                    <tr>
                        <td></td>
                        <td>
                            <a href="#" id="fav-link"><span class="glyphicon glyphicon-heart-empty"></span>
                                <font style="font-family: Cambria;">Add to favourites</font>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <th>Item Name</th>
                        <td><?php echo $item_name;?></td>
                        <td>
                            <input type="hidden" value="<?php echo $item_id;?>" id ="item_id"/>
                        </td>
                    </tr>
                    <tr>
                        <th>Item Number</th>
                        <td><?php echo $item_code;?></td>
                    </tr>
                    <tr>
                        <th>Item Color</th>
                        <td><?php echo ucfirst($item_color);?></td>
                    </tr>
                    <tr>
                        <th>Item Type</th>
                        <td><?php echo ucfirst($item_type);?></td>
                    </tr>
                    <tr>
                        <th>Item Price</th>
                        <td><?php echo "Kshs. ".$item_price;?><input type="hidden" value="<?php echo $item_price;?>" id="item_price"/></td>
                    </tr>
                    <tr>
                        <th>Item Size</th>
                        <td><?php echo $item_size;?></td>
                    </tr>
                    <tr>
                        <th>Item Quantity</th>
                        <td>
                            <div class="quantity-control">
                                <button type="button" id="quant-red">- </button>
                                <input type="text" name="item-quantity" id="item-quantity-id" class="form-control-sm" style="width: 10%;margin: 0 -3px 0 -3px;" readonly/>
                                <button type="button" id="quant-add">+</button>
                                    <span style="font-family: Calibri;color: red;display: none;" id="quantity-warning">
                                        The quantity is excessive
                                    </span>
                            </div>

                        </td>
                    </tr>
                </table>
                <table class="table">
                    <tr>
                        <td>
                            <div class="form-group">
                                <button class="btn btn-primary form-control" id="add-to-cart">
                                    <span class="glyphicon glyphicon-shopping-cart" align="left"></span> Add to cart
                                </button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Description</th>
                    <th>Additional Information</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $item_descr;?></td>
                    <td><?php echo $item_add_info;?></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <tr>
                    <td>Related Items</td>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Related item 1</td>
                    <td>Related item 2</td>
                    <td>Related item 3</td>
                    <td>Related item 4</td>
                    <td>Related item 5</td>
                    <td>Related item 6</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

