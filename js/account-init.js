$(document).ready(function()
{

    $("div#reset_button").on('click',function(e)
    {
        e.preventDefault();

        $.ajax({
            url: 'forgot-password-reset.php',
            type: 'POST',
            dataType: 'html',
            data: $('form#reset_pass_form').serialize(),

            success: function (data) {
                if (data != '0') {
                    $('.show-errors').show();
                    $('.error-text').html(data);
                }
                else
                    alert('Password reset successful. Redirecting...');
                setTimeout(
                    function () {
                        window.location.replace('access-account-face.php')
                    }, 3000);
            }
        });

    });
});

