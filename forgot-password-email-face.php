<?php

//include account init master
include_once __DIR__.'/include/master-account-init.inc.php';

//include email backend
include_once 'forgot-password-email.php';

?>
<title>Alma's Parlour - Forgot Password?</title>
<div class="col-md-4">
    <div class="panel panel-default account-init-panel">
        <div class="panel-heading">
            <div class="panel-heading">
                <div class="account-init-logo text-center">
                    Input E-Mail
                </div>
            </div>
        </div>
        <div class="panel-body">
            <?php
                if($error_message != '0')
                    echo
                        '<div class="alert alert-danger alert-dismissible fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <span class="error-display">'.$error_message.'</span>
                            </div>';

            ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="someone@example.com" name="reset_pass_email" autocomplete="off" required/>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary form-control" type="submit" name="reset_pass_submit">
                        Reset Password
                    </button>
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
