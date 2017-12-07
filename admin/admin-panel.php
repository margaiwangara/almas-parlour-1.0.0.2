<?php

//include master file
include_once __DIR__.'/../include/admin.master.inc.php';

//include view products backend
include_once 'view-products-backend.php';

?>
<title>Alma's Parlour - Admin Panel</title>

<div class="row">
    <div class="col-md-10">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Admin Id</th>
                <th>Username</th>
                <th>Date Created</th>
                <th>Login Status</th>
                <th>Log Data</th>
                <th>
                    <div class="input_group">
                        <button type="button" class="btn btn-primary" disabled>
                            <span class="glyphicon glyphicon-add"></span> Add Admin
                        </button>
                    </div>
                </th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1234</td>
                <td>admin1234</td>
                <td>12-10-2017 12:32:45</td>
                <td>Logged In</td>
                <td>Last Log In: 2secs ago</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-10">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Item Code</th>
                <th>Type</th>
                <th>In Stock</th>
                <th>T.Price</th>
                <th>Sold</th>
                <th>T.Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>APDR</td>
                <td>Dresses</td>
                <td><?php echo $dr_quan;?></td>
                <td><?php echo "Kshs. ".$dr_price;?></td>
                <td>20</td>
                <td>Kshs. 50000</td>
            </tr>
            <tr>
                <td>APNG</td>
                <td>Nightgowns</td>
                <td><?php echo $ng_quant;?></td>
                <td><?php echo "Kshs. ".$ng_price;?></td>
                <td>20</td>
                <td>Kshs. 50000</td>
            </tr>
            <tr>
                <td>APCS</td>
                <td>Cosmetics</td>
                <td><?php echo $cs_quant;?></td>
                <td><?php echo "Kshs. ".$cs_price;?></td>
                <td>20</td>
                <td>Kshs. 50000</td>
            </tr>
            <tr>
                <td>APJS</td>
                <td>Jumpsuits</td>
                <td><?php echo $js_quant;?></td>
                <td><?php echo "Kshs. ".$js_price;?></td>
                <td>20</td>
                <td>Kshs. 50000</td>
            </tr>
            <tr style="font-weight: bolder;">
                <td></td>
                <td>Totals</td>
                <td><?php echo $totals = $js_quant+$dr_quan+$ng_quant+$cs_quant;?></td>
                <td><?php echo "Kshs. ".number_format($totals = $js_price+$dr_price+$ng_price+$cs_price,2);?></td>
                <td>20</td>
                <td>Kshs. 50000</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="jumbotron">
            <div class="row">
                <div class="col-md-6" >
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                <div class="input-group " style="width: 78%;">
                                    <input type="text" class="form-control" placeholder="Search Messages..."/>
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-default form-control">
                                            <i class="glyphicon glyphicon-search"></i>
                                        </button>
                                        <button class="btn btn-default">
                                            Unread
                                            <span class="badge">2</span>
                                        </button>
                                    </div>
                                </div>

                            </th>
                        </tr>
                        </thead>
                    </table>
                    <div class="converge-area" style="max-height: 70%;overflow-y: auto;">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6" style="border-left: groove grey 2px;">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Sender's Name</th>
                        </tr>
                        </thead>
                    </table>
                    <div class="display-area" style="max-height: 70%;overflow-y: auto;">
                        <table class="table table-bordered">
                            <tbody>
                            <tr>
                                <td>I have a new Sweater</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            <tr>
                                <td><strong>Admin</strong><br>New sweater? Awesome, so what was the problem, I hope you didn't buy it from another store.</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                    <table class="table table-bordered">
                        <tbody>
                        <tr>
                            <td>
                                <form action="" method="get">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="5" placeholder="Write Message..." style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">
                                            Send Message
                                        </button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
