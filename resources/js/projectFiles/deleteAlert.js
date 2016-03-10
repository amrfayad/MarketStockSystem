(function ($){
    var n;
    $(".delete").on("click",function (){
        n= $(this).parent().parent().children("#alarm_id").val();
        alert($(this).parent().parent().children("#alarm_id").val());
        var setting = {
                type:"POST",
                data: {"alarm_id":n} , 
                url:"http://localhost/php-project/MarketStockSystem/controller/deleteAlarm.php",
                success:function(response){
                    	}  
                    };
             $.ajax(setting);
        $(this).parent().parent().remove();
    });
})(jQuery);