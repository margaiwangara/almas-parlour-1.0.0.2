<?php

//include master file
include_once __DIR__."/include/master.inc.php";

//include the index background
include_once 'index-backend.php';

?>

<title>Alma's Parlour - Beauty Products, Shoes, Clothing</title>

<div class="items-list container">
    <div class="table table-condensed">
        <table class="table items-new-arrivals">
            <thead>
            <tr>
                <th>New Arrivals</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach($new_arrivals_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=new-arrival-<?php echo $new_arrivals_id[$key];?>">
                        <img src="<?php echo $new_arrivals_image[$key];?>" alt="newarr-image-<?php echo ($key+1);?>" height="150" width="150"/>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
                <!--<td><img src="images/image-test.JPG" alt="item-image1" height="150" width="150"/></td>-->
            </tr>
            <tr>
                <?php foreach ($new_arrivals_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=new-arrival-<?php echo $new_arrivals_id[$key];?>">
                       <?php echo $new_arrivals_name[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($new_arrivals_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=new-arrival-<?php echo $new_arrivals_id[$key];?>">
                        Kshs. <?php echo $new_arrivals_price[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            </tbody>
        </table>
        <!--
        <table class="table table-condensed items-most-sold">
            <thead>
            <tr>
                <th>Most Sold Items</th>
            </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        -->
        <table class="table table-condensed items-cosmetics">
            <thead>
            <tr>
                <th>Cosmetics</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach($cosmetics_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-cosmetics-<?php echo $cosmetics_id[$key];?>">
                        <img src="<?php echo $cosmetics_image[$key];?>" alt="cosmetics-image-<?php echo ($key+1);?>" height="150" width="150"/>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($cosmetics_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-cosmetics-<?php echo $cosmetics_id[$key];?>">
                        <?php echo $cosmetics_name[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($cosmetics_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-cosmetics-<?php echo $cosmetics_id[$key];?>">
                        Kshs. <?php echo $cosmetics_price[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            </tbody>
        </table>
        <table class="table table-condensed items-nightwear">
            <thead>
            <tr>
                <th>Nightgowns</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach($nightgowns_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-ng-<?php echo $nightgowns_id[$key];?>">
                        <img src="<?php echo $nightgowns_image[$key];?>" alt="nightgown-image-<?php echo ($key+1);?>" height="150" width="150"/>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach ($nightgowns_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-ng-<?php echo $nightgowns_id[$key];?>">
                        <?php echo $nightgowns_name[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($nightgowns_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-ng-<?php echo $nightgowns_id[$key];?>">
                        Kshs. <?php echo $nightgowns_price[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            </tbody>
        </table>
        <table class="table table-condensed items-jumpsuits">
            <thead>
            <tr>
                <th>Jumpsuits</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach($jumpsuits_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-js-<?php echo $jumpsuits_id[$key];?>">
                        <img src="<?php echo $jumpsuits_image[$key];?>" alt="jumpsuit-image-<?php echo ($key+1);?>" height="150" width="150"/>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($jumpsuits_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-js-<?php echo $jumpsuits_id[$key];?>">
                        <?php echo $jumpsuits_name[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($jumpsuits_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-js-<?php echo $jumpsuits_id[$key];?>">
                        Kshs. <?php echo $jumpsuits_price[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            </tbody>
        </table>
        <table class="table table-condensed items-dresses">
            <thead>
            <tr>
                <th>Dresses</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php foreach($dresses_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-dress-<?php echo $dresses_id[$key];?>">
                        <img src="<?php echo $dresses_image[$key];?>" alt="dress-image-<?php echo ($key+1);?>" height="150" width="150"/>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($dresses_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-dress-<?php echo $dresses_id[$key];?>">
                        <?php echo $dresses_name[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            <tr>
                <?php foreach($dresses_id as $key=>$value):?>
                <td>
                    <a href="display-item.php?item_id=item-dress-<?php echo $dresses_id[$key];?>">
                        Kshs. <?php echo $dresses_price[$key];?>
                    </a>
                </td>
                <?php endforeach;?>
            </tr>
            </tbody>
        </table>
    </div>
</div>






