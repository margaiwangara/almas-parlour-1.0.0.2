<?php
//include login page
include_once 'access-account.php';

include_once __DIR__ . '/include/master-account-init.inc.php';

?>
<title>Alma's Parlour - Access Account</title>
<div class="col-md-4">
    <div class="panel panel-default account-init-panel">
        <div class="panel-heading">
            <div class="account-init-logo text-center">
                Access Account
            </div>
        </div>
        <div class="panel-body">
            <?php
                if($error_message != '0')
                    echo
                    '<div class="alert alert-danger fade in alert-dismissible error-display-access">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <span class="error-display">'.$error_message.'</span>
                    </div>';
            ?>
            <form id="access-form-id" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="someone@example.com" name="access_username_name" id="access-username-id" autocomplete="off" required/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="access_password_name" id="access-password-id" required/>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <div class="checkbox">
                            <label><input type="checkbox" name="access_rememberuser_name" id="access-rememberuser-id"> Remember Me</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="input-group-btn">
                            <a href="forgot-password-email-face.php" target="_blank"><button type="button" class="btn btn-default btn-sm">
                                <i class="fa fa-key" style="font-size: 17px;"></i> Forgot Password?</a>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn-success" value="Access Account" name="access_submit_name" id="access-submit-id"/>
                </div>
            </form>
        </div>
        <div class="panel-footer">
            <div class="form-group">
                <button type="button" class="btn btn-default form-control">
                    <a href="create-account-face.php"><div class="create-access-btn">Create Account</div></a>
                </button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary form-control disabled">
                    <div class="access-facebook-btn">Access With Facebook</div>
                </button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger form-control disabled">
                    <div class="access-codepiphany-btn">Access With Codepiphany</div>
                </button>
            </div>

        </div>
    </div>
</div>