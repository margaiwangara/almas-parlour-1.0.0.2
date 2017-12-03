<?php

//include admin login page
include_once 'admin-login-backend.php';

//include master file for admin account access
include_once __DIR__.'/../include/admin.account.master.inc.php';

?>
<title>Admin Account Access - Alma's Parlour</title>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="panel panel-default" style="margin-top: 35%; box-shadow: 0 0 5px 5px grey;">
            <div class="panel-heading">
                <div class="text-center admin-logo-text" style="font-family: Cambria;color: brown;font-size: 30px; font-weight:bolder;">
                    Admin Log In
                </div>
            </div>
            <div class="panel-body">
                <?php
                    if($error)
                        echo '<div class="alert alert-danger fade in alert-dismissible error-display-access">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="error-display">'.$error.'</span>
                             </div>';
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" name="admin_username" id="admin-email-id" placeholder="admin@example.com" autocomplete="off" required/>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="admin_pass" id="admin-pass-id" placeholder="Password"  required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control btn-primary" name="admin-submit" value="Log In" id="admin-submit-id"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

