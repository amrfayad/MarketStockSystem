(function ($){
    var n,dt;
    $(".checkbx").change(function (){
        n= $(this).is(":checked");
        dt = $(this).parent().parent().parent().parent().children("#alarm_id").val();
        var setting = {
                type:"POST",
                data: {"alarm_id":dt,"alarm_flag":n} , 
                url:"http://localhost/php-project/MarketStockSystem/controller/enable_disable.php",
                success:function(response){
                        }  
                    };
             $.ajax(setting);
    });
})(jQuery);

