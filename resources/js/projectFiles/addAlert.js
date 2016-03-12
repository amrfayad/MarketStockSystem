(function ($){
    
    
    var sh_id,user_id,direction,price,last_trig,sh_price,txt,trig_txt,al_id;
    $(".optradio").on("click",function (){
        direction = $(this).val();
    });
 
    $("#ok").on("click",function (){
        sh_id = $("#share option:selected").attr("id");
        user_id = $("#user_id").val();
        price = $("#price").val();
        last_trig = $("#alarm_triggered").val();
        sh_price = $("#share option:selected").val();

        if (direction == 0) {
            txt ="Drops Below " + price;
        } else {
            txt ="Goes Up " + price;
        }
        if (!last_trig){
            trig_txt= "Never";
        } else {
            trig_txt= last_trig;
        }
        var setting = {
                type:"POST",
                data: {"user_id":user_id,"sh_id":sh_id,"direction":direction, "price":price} , 
                url:"./controller/addAlarm.php",
                success:function(response){
                    var js = JSON.parse(response);
                    al_id=JSON.stringify(js[0]['alarm_id']);
                    $("#alertTable").append(
                        '<tr  class="info">'+
                            '<input type="hidden" id="alarm_id" name="alarm_id" value='+al_id+'>'+
                            '<input type="hidden" id="alarm_triggered" name="alarm_triggered" value="Never">'+
                            '<td scope="row">'+
                                '<div class="checkbox">'+       
                                    '<label><input type="checkbox" class="checkbx" value="" checked></label>'+
                                '</div>'+
                           '</td>'+
                            '<td>'+$("#share option:selected").text()+'</td>'+
                            '<td>'+sh_price+'</td>'+
                            '<td>'+txt+'</td>'+
                            '<td> '+trig_txt+'</td>'+
                            '<td><button class="btn btn-link delete" role="link" type="submit"  name="delete" value="Link 2">delete</button>\n\
                            </td>'+

                        '</tr>')
                    $("#share").val("Select Share"); 
                    $("#price").val("");
                    $(".optradio").attr("checked",false);
                        }  
                    };
             $.ajax(setting);
            
    });
    
    $("#cancel").on("click",function (){
        $("#share").val("Select Share"); 
        $("#price").val("");
        $(".optradio").attr("checked",false);
    });
})(jQuery);

