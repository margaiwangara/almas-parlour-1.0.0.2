$(document).ready(function()
{
    get_favs();

   $("#fav-link").on('click',function (e)
   {
       e.preventDefault();
   });

   function get_favs()
   {
       $.ajax({
           url:'../almas-parlour/get_favs.php',
           dataType:'json',

           success: function(data)
           {
                total_favs = data.total_favs;

           },
           error:function(xhr, ajaxOptions, thrownError)
           {
               //alert(xhr.status);
           }

       })
   }
});