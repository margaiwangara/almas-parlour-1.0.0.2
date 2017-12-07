<?php
//include view products backend
include_once 'view-products-backend.php';

//include main file
include_once __DIR__.'/../include/admin.master.inc.php';
?>

<title>Alma's Palour - View Products</title>
<?php
//include dressses
include_once 'dresses-product.php';

?>
<script>
    $(document).ready(function()
    {
        $(document).on('change','#item_type_id',function ()
        {
            if($("#item_type_id").val() == 'cosmetics')
            {
                $(".item-cosmetics").show();
                $(".item-clothes").hide();
            }else
            {
                $(".item-cosmetics").hide();
                $(".item-clothes").show();
            }
        });
    });


</script>
<div class="col-md-2"></div>
<div class="col-md-7">
    <div id="add-item">
        <div class="jumbotron">
            <div class="text-center" style="font-family: Cambria;color: #004085;font-size: 25px;font-weight: bolder;">Add New Item</div>
            <hr>
            <form action="" method="post" id="add_item_form" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="text" class="form-control" name="item_code" id="item_code_id" placeholder="Item Code" autocomplete="off" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="item_name" id="item_name_id" placeholder="Item Name" autocomplete="off" required/>
                </div>
                <div class="form-group">
                    <select class="form-control" name="item_type" id="item_type_id">
                        <option value="dress" selected>Dress</option>
                        <option value="nightgown">Nightgown</option>
                        <option value="cosmetics">Cosmetics</option>
                        <option value="jumpsuits">Jumpsuits</option>
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control" name="item_color" id="item_color_id">
                        <option value="red" selected>Red</option>
                        <option value="purple">Purple</option>
                        <option value="blue">Blue</option>
                        <option value="green">Green</option>
                        <option value="pink">Pink</option>
                        <option value="black">Black</option>
                        <option value="black">White</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="item_price" id="item_price_id" placeholder="Kshs. 1000.00 - Price" autocomplete="off" required/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="item_quantity" id="item_quantity_id" placeholder="Quantity - 10, 20" autocomplete="off" required/>
                </div>
                <div class="form-group item-cosmetics" style="display:none;">
                    <select class="form-control" name="item_size" id="item_size_id">
                        <option value="50" selected>50ml</option>
                        <option value="100">100ml</option>
                        <option value="250">250ml</option>
                        <option value="500">500ml</option>
                        <option value="750">750ml</option>
                        <option value="1000">1000ml</option>
                    </select>
                </div>
                <div class="form-group item-clothes">
                    <select class="form-control" name="item_size" id="item_size_id">
                        <option value="XS" selected>XS</option>
                        <option value="S">S</option>
                        <option value="M">M</option>
                        <option value="L">L</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Item Description" name="item_desc" id="item_desc_id" style="resize: none;"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" rows="5" placeholder="Additional Information" name="add_info" id="add_info_id" style="resize: none;"></textarea>
                </div>
                <div class="form-group">
                        <input type="file" name="item_image" id="item_image_id" class="form-control" hidden/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control" type="submit" id="add_item_btn">Add Item</button>
                </div>
            </form>
            <div class="alert alert-info fade in alert-dismissible error-display-access" style="display: none;">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span class="error-display">This is an error display</span>
            </div>
        </div>
    </div>

</div>
    </div>
</div>

