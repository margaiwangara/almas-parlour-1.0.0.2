<?php

//include master file
include_once __DIR__."/include/master.inc.php";

//include the index background
include_once 'index-backend.php';

?>

<title>Alma's Parlour - Beauty Products, Shoes, Clothing</title>

<div class="items-list container">
    <div class="table-responsive">
        <table class="table items-new-arrivals">
            <thead>
            <tr>
                <th>New Arrivals</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                    for($i=0;$i<$new_arrivals_rows;$i++)
                        echo "<td><a href='display-item.php?item_id=new-arrival-".$new_arrivals_id [$i]."' target='_blank'><img src='".$new_arrivals_image[$i]."'alt='newarr-image-".($i+1)."'height='150' width='150'/></a></td>";

                ?>
                <!--<td><img src="images/image-test.JPG" alt="item-image1" height="150" width="150"/></td>-->
            </tr>
            <tr class="font-weight-bold">
                <?php
                    for($i=0;$i<$new_arrivals_rows;$i++)
                        echo "<td><a href='display-item.php?item_id=new-arrival-".$new_arrivals_id [$i]."' target ='_blank'>".$new_arrivals_name[$i]."</a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                    for($i=0;$i<$new_arrivals_rows;$i++)
                        echo "<td><a href='display-item.php?item_id=new-arrival-".$new_arrivals_id [$i]."' target='_blank'> Kshs. ".$new_arrivals_price[$i]."</a></td>";

                ?>
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
                <?php
                    for($i=0;$i<$cosmetics_row;$i++)
                        echo "<td><a href='display-item.php?item_id=item-cosmetics-".$cosmetics_id [$i]."' target='_blank'><img src='".$cosmetics_image[$i]."'alt='cosmetics-image-".($i+1)."'height='150' width='150'/></a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                    for($i=0;$i<$cosmetics_row;$i++)
                        echo "<td><a href='display-item.php?item_id=item-cosmetics-".$cosmetics_id [$i]."' target='_blank'>".$cosmetics_name[$i]."</a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                    for($i=0;$i<$cosmetics_row;$i++)
                        echo "<td><a href='display-item.php?item_id=item-cosmetics-".$cosmetics_id [$i]."' target='_blank'>Kshs. ".$cosmetics_price[$i]."</a></td>";

                ?>
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
                <?php
                    for($i=0;$i<$nightgowns_row;$i++)
                        echo "<td><a href='display-item.php?item_id=new-arrival-".$nightgowns_id [$i]."' target='_blank'><img src='".$nightgowns_image[$i]."'alt='nightgown-image-".($i+1)."'height='150' width='150'/></a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                    for($i=0;$i<$nightgowns_row;$i++)
                        echo "<td><a href='display-item.php?item_id=new-arrival-".$nightgowns_id [$i]."' target='_blank'>".$nightgowns_name[$i]."</a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                for($i=0;$i<$nightgowns_row;$i++)
                    echo "<td><a href='display-item.php?item_id=new-arrival-".$nightgowns_id [$i]."' target='_blank'>Kshs. ".$nightgowns_price[$i]."</a></td>";

                ?>
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
                <?php
                for($i=0;$i<$jumpsuits_row;$i++)
                    echo "<td><a href='display-item.php?item_id=new-arrival-".$jumpsuits_id [$i]."' target='_blank'><img src='".$jumpsuits_image[$i]."'alt='jumpsuit-image-".($i+1)."'height='150' width='150'/></a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                for($i=0;$i<$jumpsuits_row;$i++)
                    echo "<td><a href='display-item.php?item_id=new-arrival-".$jumpsuits_id [$i]."' target='_blank'>".$jumpsuits_name[$i]."</a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                for($i=0;$i<$jumpsuits_row;$i++)
                    echo "<td><a href='display-item.php?item_id=new-arrival-".$jumpsuits_id [$i]."' target='_blank'>Kshs. ".$jumpsuits_price[$i]."</a></td>";

                ?>
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
                <?php
                for($i=0;$i<$dresses_row;$i++)
                    echo "<td><a href='display-item.php?item_id=item-dress-".$dresses_id [$i]."' target='_blank'><img src='".$dresses_image[$i]."'alt='dress-image-".($i+1)."'height='150' width='150'/></a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                for($i=0;$i<$dresses_row;$i++)
                    echo "<td><a href='display-item.php?item_id=item-dress-".$dresses_id [$i]."' target='_blank'>".$dresses_name[$i]."</a></td>";

                ?>
            </tr>
            <tr class="font-weight-bold">
                <?php
                for($i=0;$i<$dresses_row;$i++)
                    echo "<td><a href='display-item.php?item_id=item-dress-".$dresses_id [$i]."' target='_blank'>Kshs. ".$dresses_price[$i]."</a></td>";

                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>






