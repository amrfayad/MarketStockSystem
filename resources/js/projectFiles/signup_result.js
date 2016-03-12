(function ($){ //"#signup_result"   
    $("#sign_up").click(function (e)
    {
        var name = $("#name").val();
        var n = /^[a-zA-Z]+$/;
        if (!n.test(name))
        {           
           $(".error_fname").show();
           $("#one").addClass("has-error");
        }
        else{
            $("#one").removeClass("has-error");
            $("#one").addClass("has-success");
            $("#one").removeClass("has-error");
            $(".error_fname").hide();
        }
        
        var remail = $("#remail").val();
        var valid =/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!valid.test(remail))
        {            
            $(".error_remail").show();
            $("#two").addClass("has-error");
        }
        else
        {
            $("#two").removeClass("has-error");            
            $("#two").addClass("has-success");
            $(".error_remail").hide();
        }
        var passwd = $("#Password").val().length;
        if (passwd < 5)
        {
            $(".error_password").show();
            $("#three").addClass("has-error");
            //e.preventDefault();
        }
        else
        {
            $("#three").removeClass("has-error");
            $("#three").addClass("has-success");
            $(".error_password").hide();            
        }
        var p=$("#rePassword").val().length;
        if (p < 5)
        {
            $(".error_repassword").show();
            $("#four").addClass("has-error");
            //e.preventDefault();    
        }
        else
        {
            $("#four").removeClass("has-error");
            $("#four").addClass("has-success");
            $(".error_repassword").hide();
        }
        var url     = "./controller/register.php";
        var data    = {
                reg_name:$("#name").val(),
                reg_email:$("#remail").val(),
                reg_passwd:$("#Password").val(),
                reg_repasswd:$("#rePassword").val()
            };
        $.ajax({
            method: "POST",
            url: url,
            data: data,
            async:"true",
            success:function(resp){
                alert(resp);
                 $("#signup_result").html(
                 "You Registed Successfully :)<br>Now You can Login.");
            },
                   
            false:function(resp){
                alert("hiiiiiii"+resp);
                 $("#signup_result").html(
                    "Your Registration Failed :(<br>Please,Try again.");
            },
        });
        
    });
})(jQuery);
