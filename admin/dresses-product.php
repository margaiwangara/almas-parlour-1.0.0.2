<?php

//include file
include_once __DIR__.'/../include/admin.master.products.php';
?>

<title>Alma's Palour - Dresses</title>
<table class="table table-condensed">
    <thead>
    <tr>
        <th></th>
        <th>Prod. Code</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Upload Date</th>
        <th></th>
        <th>Admin Action</th>
    </tr>
    </thead>
    <form action="admin-delete.php" method="get">
        <tbody class="admin_items_view">
        <tr><?php foreach($products_id as $key=>$value):if($products_type[$key] == 'dress'):?></tr>
        <td><img src="../<?php echo $products_img[$key];?>" alt="image-dress-<?php echo $products_id[$key];?>" height="40" width="40"/></td>
        <td><?php echo $products_code[$key];?></td>
        <td><?php echo $products_name[$key];?></td>
        <td><?php echo $products_descr[$key];?></td>
        <td><?php echo $products_price[$key];?></td>
        <td><?php echo $products_date[$key];?></td>
        <td><input type="hidden" value="<?php echo $products_id[$key]?>"/></td>
        <td>
            <div class="input-group-btn">
                <a href='admin-delete.php?content_id=<?php echo $products_id[$key];?>'>
                <div class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-minus"></span> Delete
                </div>
                </a>
            </div>
            <div class="input-group-btn">
                <a href='edit-product.php?product_id=<?php echo $products_id[$key];?>'>
                <div class="btn btn-default" type="button" data-toggle="modal" data-target="product-edit-modal">
                    <span class="glyphicon glyphicon-edit"></span> Edit
                </div>
                </a>
            </div>
            <div class="input-group-btn">
                <a href='../display-item.php?item_id=view-product-<?php echo $products_id[$key];?>' target ='_blank'>
                    <div class="btn btn-default" type="button">
                        <span class="fa fa-eye"></span> View
                    </div>
                </a>
            </div>
        </td>
        <tr><?php endif;endforeach;?></tr>
        </tbody>
    </form>
</table>
<div id="product-edit-modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="text-center" style="font-family: Cambria;font-size: 30px;color: brown;font-weight: bolder;">
                    Edit Product
                </div>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">

                    </div>
                </div>
                <div class="modal-footer">

                </div>
            </form>
        </div>
    </div>

</div>
</div>
