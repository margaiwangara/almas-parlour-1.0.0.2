$(document).ready(function ()
{
    var create_display = $(".error-display-create");
    var display = $(".error-display");
    var access_display = $(".error-display-access");

    //check if submit is clicked
    $("#create-submit-id").on('click',function (e)
    {
        e.preventDefault();

        //get values for registration
        var email = $("#create-email-id").val();
        var password = $("#create-password-id").val();
        var confirm_password = $("#create-cfpassword-id").val();

        $.ajax({
            url: 'create-account.php',
            type: 'POST',
            dataType: 'html',
            data: $('form#create-form-id').serialize(),

            success:function(data)
            {
                var message_data = data;
                if(message_data != 0)
                    error_shortcut(create_display,display,message_data);
                else
                {
                    message_data = "Registration Successful";
                    error_shortcut(create_display,display,message_data);

                }
            }
        });


    });

    $("#access-submit-id").on('click',function (e)
    {
        e.preventDefault();
        $.ajax({
            url:'access-account.php',
            type: 'POST',
            dataType: 'html',
            data: $('form#access-form-id').serialize(),

            success:function (data) {

                var message_data = data;
                if(message_data != 0)
                    error_shortcut(access_display,display,message_data);
                else
                {
                    alert("Access Successful");
                }
            }
        })
    });
    function error_shortcut(element,another_element,data)
    {
        element.show();
        another_element.html(data);
    }


});