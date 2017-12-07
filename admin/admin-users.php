<?php
//include backend
include 'admin-users-backend.php';

//include master page
include_once __DIR__.'/../include/admin.master.inc.php';


?>
<title>Alma's Parlour - Manage Users</title>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>User-ID</th>
                <th>Email</th>
                <th>Name</th>
                <th>Address</th>
                <th>Reg. Date</th>
                <th>Acc. Status</th>
                <th>Admin Action</th>
            </tr>
            </thead>
            <tbody>
            <tr><?php foreach($user_id as $key=>$value):?></tr>
                <td><?php echo $user_id[$key];?></td>
                <td><?php echo $user_email[$key];?></td>
                <td>Margai</td>
                <td>64 - 50102 Mumias, Kenya</td>
                <td><?php echo $reg_date[$key];?></td>
                <td>
                    <?php
                        if($accnt_conf[$key] == '1')
                            echo "<strong>C</strong>";
                        else if($accnt_conf[$key] == '0')
                            echo "<strong>NC</strong>";
                    ?>
                </td>
                <td>
                    <div class="input-group-btn">
                        <a href='admin-delete-user.php?content_id=<?php echo $user_id[$key];?>'>
                        <div class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-minus"></span> Delete
                        </div>
                        </a>
                    </div>
                </td>
            <tr><?php endforeach;?></tr>
            </tbody>
        </table>
    </div>
</div>