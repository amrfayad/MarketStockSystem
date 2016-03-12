(function ($){   
    $("#l").click(function (e){
       
        var email = $("#email").val();
        var valid =/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!valid.test(email)) {            
            $(".error_email").show();
            $("#first").addClass("has-error");

            //e.preventDefault();
        }else{
            $("#first").removeClass("has-error");            
            $("#first").addClass("has-success");

            $(".error_email").hide();
        }
        var passwd = $("#inputPassword").val().length;
        if (passwd < 8){
            $(".error_passwd").show();
            $("#second").addClass("has-error");
            //e.preventDefault();
        }else{
            $("#second").removeClass("has-error");
            $("#second").addClass("has-success");
            $(".error_passwd").hide();            
        }
     
        var url     = "./index.php?do=login";
        var data    = {
                
                email:$("#email").val(),
                pass:$("#pass").val(),
                
            };
        $.ajax({
            method: "POST",
            url: url,
            data: data,
            async:"true",
         //   success:function(data){
           //     alert("welcome");
            //},
            //false:
        });
        
    });
})(jQuery);
