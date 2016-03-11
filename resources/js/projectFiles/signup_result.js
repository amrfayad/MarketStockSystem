(function ($){ //"#signup_result"   
    $("#sign_up").click(function (e){
        var url     = "http://localhost/MarketStockSystem/index.php?do=register";
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
            success:$("#signup_result").html(
                    "You Registed Successfully :)<br>Now You can Login."),
            false:$("#signup_result").html(
                    "Your Registration Failed :(<br>Please,Try again.")
        });
        
    });
})(jQuery);
