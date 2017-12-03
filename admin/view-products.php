<?php

//include main file
include_once __DIR__.'/../include/admin.master.inc.php';
?>

<title>Alma's Palour - View Products</title>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-7">
        <table class="table table-condensed link_scroll">
            <thead style="font-family: Cambria;font-weight:bolder;font-size: 25px;">
            <tr>
                <td><a href="#" class="dresses-view">Dresses</a></td>
                <td><a href="#" class="ng-view">Nightgowns</a></td>
                <td><a href="#" class="cosmetics-view">Cosmetics</a></td>
                <td style="border-right: none;"><a href="#" class="jumpsuits-view">Jumpsuits</a></td>
            </tr>
            </thead>
        </table>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="item-dresses">
            <table class="table table-condensed">
                <thead>
                <tr border="0">
                    <th>
                        <a href="#add-item">
                            <div class="btn btn-primary" type="button">
                                <span class="glyphicon glyphicon-plus"></span> Add Item
                            </div>
                        </a>
                    </th>
                    <th>
                        <a href="#">
                            <div class="btn btn-primary" type="button">
                                <span class="glyphicon glyphicon-minus"></span> Delete Item
                            </div>
                        </a>
                    </th>
                    <th></th><th></th>
                    <th></th><th></th>
                    <th>
                        <div class="input-group">
                            <input type="text" name="search_item" class="form-control" placeholder="Search Item"/>
                            <div class="input-group-btn">
                                <button class="btn btn-primary" type="submit">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </div>
                        </div>
                    </th>
                </tr>
                <tr>
                    <th></th>
                    <th>Prod. Code</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Upload Date</th>
                    <th>Admin Action</th>
                </tr>
                </thead>
                <form action="" method="get">
                    <tbody class="admin_items_view">

                    </tbody>
                </form>
            </table>
        </div>
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
                                <option value="dress">Dress</option>
                                <option value="nightgown">Nightgown</option>
                                <option value="cosmetics">Cosmetics</option>
                                <option value="jumpsuits">Jumpsuits</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="item_color" id="item_color_id">
                                <option value="red">Red</option>
                                <option value="purple">Purple</option>
                                <option value="blue">Blue</option>
                                <option value="green">Green</option>
                                <option value="pink">Pink</option>
                                <option value="black">Black</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="item_price" id="item_price_id" placeholder="Kshs. 1000.00 - Price" autocomplete="off" required/>
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

