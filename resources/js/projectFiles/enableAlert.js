(function ($){
    var n,dt;
    $(".container-fluid").on("click",".checkbx",function (){
        n= $(this).is(":checked");
        dt = $(this).parent().parent().parent().parent().children("#alarm_id").val();
        var setting = {
                type:"POST",
                data: {"alarm_id":dt,"alarm_flag":n} , 
               url:"./controller/enable_disable.php",
                success:function(response){
                        }  
                    };
             $.ajax(setting);
    });
})(jQuery);

