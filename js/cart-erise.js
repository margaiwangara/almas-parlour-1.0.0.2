$(document).ready(function()
{
    //set item quantity to default 1
    $("#item-quantity-id").val('1');

   $("#add-to-cart").on('click',function(e)
   {
       e.preventDefault();

       item_id = $("#item_id").val();
       user_id = $("#user_id").val();
       quantity = $("#item-quantity-id").val();
       price = $("#item_price").val();

       price = quantity*price;

       if(user_id == false)
           alert("You must be logged in to add an item to cart");
       else
       {
           $.ajax({
               url:'../almas-parlour/cart-append.php',
               type:'GET',
               dataType:'html',
               data:{'user_id':user_id,'item_id':item_id,'quantity':quantity,'price':price},

               success:function (data)
               {
                   alert("Breakpoint 2")
                   //add items here
                   if(data == '0')
                   {
                       alert("Item added to cart");
                       $("#item-quantity-id").val('1');
                   }
                   else if(data == '1')
                       alert("Item failed to add to cart");
                   else if(data == '2')
                       alert("You are not a member");
                   else if(data == '3')
                       alert("This item is out of stock.");
                   else
                       alert(data);

               },
               error:function(xhr, ajaxOptions, thrownError)
               {
                   //alert(xhr.status);
               }
           });
       }

   });
});