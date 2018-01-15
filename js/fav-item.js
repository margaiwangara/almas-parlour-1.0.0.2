$(document).ready(function()
{
    //get_favs();

   $("#fav-link").on('click',function (e)
   {
       e.preventDefault();

       item_id = $("#fav_item_id").val();

       if(item_id != false)
       {
           $.ajax({
               url:'../almas-parlour/behind-scenes/set-delete-favs.php',
               type:'GET',
               dataType:'html',
               data:{'fav_item_id':item_id},

               success: function(data)
               {
                   alert(data);
                   //$('#fav-link').html("<span class='glyphicon glyphicon-heart'></span>Remove from cart");

               },
               error:function(xhr, ajaxOptions, thrownError)
               {
                   alert(xhr.status);
               }

           })
       }
   });

});