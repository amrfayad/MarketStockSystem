(function ($){   
    $("#update").click(function (e){
         var name = $("#name").val();
        var n = /^[a-zA-Z]+$/;
        if (!n.test(name)) {           
           $(".error_fname").show();
           $("#first").addClass("has-error");
            //e.preventDefault();
        }else{
            $("#first").removeClass("has-error");
            $("#first").addClass("has-success");
            $(".error_fname").hide();
        }
        var email = $("#email").val();
        var valid =/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!valid.test(email)) {            
            $(".error_email").show();
            $("#third").addClass("has-error");

            //e.preventDefault();
        }else{
            $("#third").removeClass("has-error");            
            $("#third").addClass("has-success");
            $(".error_email").hide();
        }
        var passwd = $("#inputPassword").val().length;
        var p1 = $("#inputPassword").val();
        if (passwd < 8){
            $(".error_passwd").show();
            $("#second").addClass("has-error");
            //e.preventDefault();
        }else{
            $("#second").removeClass("has-error");
            $("#second").addClass("has-success");
            $(".error_passwd").hide();            
        }
        var p=$("#rePassword").val().length;
        var p2=$("#rePassword").val();
        if (p < 8){
            $(".error_password").show();
            $("#fourth").addClass("has-error");
            //e.preventDefault();    
        }else{
            $("#fourth").removeClass("has-error");
            $("#fourth").addClass("has-success");
            $(".error_password").hide();
        }

        if(p1===p2){
        var url     = "./index.php?do=updateUser";
        var data    = {
                u_name:$("#name").val(),
                u_email:$("#new_email").val(),
                old_email:$("#old_email").val(),
                u_password:$("#inputPassword").val(),
            };
        $.ajax({
            method: "POST",
            url: url,
            data: data,
            async:"true",
            success:function(response){
                alert("Your Profile Updated successFully");
                //alert(response);
            },
            //false:
        });
        }
    });
})(jQuery);
