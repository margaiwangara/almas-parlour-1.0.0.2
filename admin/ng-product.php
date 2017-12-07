<?php

//include file
include_once __DIR__.'/../include/admin.master.products.php';
?>

<title>Alma's Palour - Nightgown</title>
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
    <form action="" method="get">
        <tbody class="admin_items_view">
        <tr><?php foreach($products_id as $key=>$value):if($products_type[$key] == 'nightgown'):?></tr>
        <td><img src="../<?php echo $products_img[$key];?>" alt="image-dress-<?php echo $products_id[$key];?>" height="40" width="40"/></td>
        <td><?php echo $products_code[$key];?></td>
        <td><?php echo $products_name[$key];?></td>
        <td><?php echo $products_descr[$key];?></td>
        <td><?php echo $products_price[$key];?></td>
        <td><?php echo $products_date[$key];?></td>
        <td><input type="hidden" value="<?php echo $products_id[$key]?>"</td>
        <td>
            <div class="input-group-btn">
                <a href='admin-delete.php?content_id=<?php echo $products_id[$key];?>'>
                <div class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-minus"></span> Delete
                </div>
                </a>
            </div>
            <div class="input-group-btn">
                <div class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-edit"></span> Edit
                </div>
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
</div>
