(function ($){
    var n;
    $(".container-fluid").on("click",".delete",function (){
        var action = confirm("Are youe sure you want to delete this alarm?")
        if(action == true){
            n= $(this).parent().parent().children("#alarm_id").val();
            alert(n);
            var setting = {
                    type:"POST",
                    data: {"alarm_id":n} , 
                    url:"./controller/deleteAlarm.php",
                    success:function(response){
                            }  
                        };
                 $.ajax(setting);
            $(this).parent().parent().remove();
        }
    });
})(jQuery);