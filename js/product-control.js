$(document).ready(function()
{
    total_quant = parseInt($("#hidden_quant").val());
    if(total_quant < 10)
    {
        $("#quantity-warning").show().html("Only "+total_quant+" items left");
    }

   $("#quant-add").on('click',function()
   {
       //alert("I work");
       new_num = parseInt($("#item-quantity-id").val());
       if(new_num >= total_quant)
       {
           new_num-=1;

       }else
       {
           new_num+=1;
           $("#item-quantity-id").val(new_num);
       }

   });

    $("#quant-red").on('click',function()
    {
        new_num = parseInt($("#item-quantity-id").val());
        if(new_num > 1)
        {
            new_num-=1;
            $("#item-quantity-id").val(new_num);
        }

    });

});