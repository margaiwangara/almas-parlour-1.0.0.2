<?php

include_once __DIR__ . '/include/master-account-init.inc.php';
?>
<title>Alma's Parlour - Create Account</title>
<div class="col-md-4"></div>
<div class="account-face-back">

</div>
<div class="col-md-4 ">
    <div class="panel panel-default account-init-panel">
        <div class="panel-heading">
            <div class="account-init-logo text-center">
                Create Account
            </div>
        </div>
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissible fade in error-display-create">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <span class="error-display">Invalid input</span>
            </div>
            <form id="create-form-id" action="" method="post">
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="someone@example.com" name="create_email_name" id="create-email-id" autocomplete="off"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="create_password_name" id="create-password-id"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="create_cfpassword_name" id="create-cfpassword-id"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="form-control btn-success" value="Create Account" name="create_submit_name" id="create-submit-id"/>
                </div>
            </form>

        </div>
        <div class="panel-footer">
            <div class="form-group">
                <button type="button" class="btn btn-default form-control">
                    <div class="create-access-btn">Access Account</div>
                </button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary form-control">
                    <div class="create-facebook-btn">Create With Facebook</div>
                </button>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-danger form-control disabled">
                    <div class="create-codepiphany-btn">Create With Codepiphany</div>
                </button>
            </div>

        </div>
    </div>
</div>