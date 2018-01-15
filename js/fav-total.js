$(document).ready(function()
{
    var polling = function(){
        $.ajax({
            url:'../almas-parlour/behind-scenes/fav-total.php',
            dataType:'html',

            success:function(data)
            {
                $('.fav-item-count').html(data);
            }

        });

    }

    setInterval(polling,100);
});