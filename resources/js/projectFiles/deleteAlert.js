(function ($){
    var n;
    $(".delete").on("click",function (){
        var action = confirm("Are youe sure you want to delete this alarm?")
        if(action == true){
            n= $(this).parent().parent().children("#alarm_id").val();
            var setting = {
                    type:"POST",
                    data: {"alarm_id":n} , 
                    url:"http://localhost/php-project/MarketStockSystem/controller/deleteAlarm.php",
                    success:function(response){
                            }  
                        };
                 $.ajax(setting);
            $(this).parent().parent().remove();
        }
    });
})(jQuery);