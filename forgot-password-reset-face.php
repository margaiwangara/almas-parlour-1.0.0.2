<?php

//include account init master
include_once __DIR__.'/include/master-account-init.inc.php';

//include db
include_once __DIR__.'/include/connect-db.inc.php';

//get values from URL
$get_email = clean_input($_GET['email']);
$get_code = clean_input($_GET['reset_code']);


?>
<title>Alma's Parlour - Forgot Password?</title>
<div class="col-md-4">
    <div class="panel panel-default account-init-panel">
        <div class="panel-heading">
            <div class="panel-heading">
                <div class="account-init-logo text-center">
                    Reset Password
                </div>
            </div>
        </div>
        <div class="panel-body">
            <div class="alert alert-danger alert-dismissible fade in show-errors" style="display: none;">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <span class="error-display error-text"></span>
            </div>
            <form action="" method="post" id="reset_pass_form">
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="pass_reset" id="pass_reset_id"/>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="pass_conf_reset" id="pass_conf_reset_id"/>
                </div>
                <input type="hidden" name="user_email" value="<?php echo $get_email;?>" id="hidden_name"/>
                <input type="hidden" name="user_code" value="<?php echo $get_code;?>" id="hidden_code"/>
                <div class="form-group">
                    <button class="btn btn-primary form-control" type="submit" name="pass_reset_submit" id="pass_reset_button">
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
<script type="text/javascript">
    $(document).ready(function()
    {
        var name_user = $('#hidden_name').val();
        var code_user = $('#hidden_code').val();

        //alert(name_user+"&"+code_user);
        $('#pass_reset_button').on('click',function (e)
        {
            e.preventDefault();

            $.ajax({
                url:'forgot-password-reset.php',
                type:'POST',
                dataType:'html',
                data:$('form#reset_pass_form').serialize() + '&user_email=name_user&user_code=code_user',

                success:function(data)
                {
                    alert(data);
                    if(data != '0')
                    {
                        $('.show-errors').show();
                        $('.error-text').html(data);
                    }
                    else
                        alert('Password reset successful. Redirecting...');
                }
            });

        });
    });
</script>
