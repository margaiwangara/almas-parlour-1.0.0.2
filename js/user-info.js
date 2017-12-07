$(document).ready(function()
{
   $.ajax({
       url:'../almas-parlour/user-details.php',
       dataType:'json',

       success:function(data)
       {
           ad_name = data.ad_name;
           ad = data.ad;
           city = data.county;
           name = data.name;
           surname = data.surname;

           //add the values to display area
           $('.ad-name').val(ad_name);
           $('.addr').val(ad);
           $('.name').val(name)
           $('.surname').val(surname);
           $('.user_cities').val(city);

        },
       error:function(xhr, ajaxOptions, thrownError)
       {
           alert(xhr.status);
       }

   });

    $("#update-submit").on('click',function(e)
    {
        e.preventDefault();
        $.ajax({
            url:'../almas-parlour/account-details.php',
            type:'GET',
            dataType:'html',
            data:$("#update-form").serialize(),

            success: function (data)
            {
                alert(data);

            },
            error:function(xhr, ajaxOptions, thrownError)
            {
                alert(xhr.status);
            }
        });
    });
});