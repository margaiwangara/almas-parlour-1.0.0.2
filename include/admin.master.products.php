<?php
//include view products backend
include_once 'view-products-backend.php';

//include main file
include_once __DIR__.'/../include/admin.master.inc.php';
?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-7">
        <table class="table table-condensed link_scroll">
            <thead style="font-family: Cambria;font-weight:bolder;font-size: 25px;">
            <tr>
                <td><a href="../admin/dresses-product.php" class="dresses-view">Dresses</a></td>
                <td><a href="../admin/ng-product.php" class="ng-view">Nightgowns</a></td>
                <td><a href="../admin/cosm-products.php" class="cosmetics-view">Cosmetics</a></td>
                <td style="border-right: none;"><a href="../admin/js-product.php" class="jumpsuits-view">Jumpsuits</a></td>
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
    <tr>
        <th>
            <a href="../admin/view-products.php#add-item">
                <div class="btn btn-primary" type="button">
                    <span class="glyphicon glyphicon-plus"></span> Add Item
                </div>
            </a>
            <!--
            <a href="#">
                <div class="btn btn-primary" type="button">
                    <span class="glyphicon glyphicon-minus"></span> Delete Item
                </div>
            </a>
            -->
        </th>
        <th></th><th></th>
        <th></th><th></th>
        <th>
            <div class="input-group" style="z-index: -1;">
                <input type="text" name="search_item" class="form-control" placeholder="Search Item"/>
                <div class="input-group-btn">
                    <button class="btn btn-primary form-control" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </th>
    </tr>
    </thead>
</table>
