<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    b{height:1000px; }
    .carousel-inner > .item > img{ width:1500px; height:300px; }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>borsa</title>
    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body
 <form class="form">  
<div class="container-fluid">




<div class="col-xs-12" >
<div class="col-xs-10">
<div id="myCarousel" class="carousel slide  " data-ride="carousel" >
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->






  <div class="carousel-inner" role="listbox">
    <div class="item active" >
      <img src="120.jpg" alt="Chania" id="a" >
    </div>

    <div class="item">
      <img src="355.jpg" alt="Chania" id="b">
    </div>

    <div class="item">
      <img src="608.jpg" alt="Flower" id="c">
    </div>

    <div class="item">
      <img src="801.jpg" alt="Flower" id="d">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="col-xs-3"></div>
</div>
</div>




<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#login">login</a></li>
  <li><a data-toggle="tab" href="#signup">sign up</a></li>
</ul>
<br/><br/><br/>
<div class="tab-content">
  <div id="login" class="tab-pane fade in active">

<div class="bs-example ">
    <form class="form-horizontal col-xs-9" id="f" method="post" action="index.php?do=login">
        <div class="form-group " id="first" >
            <label for="email" class="control-label col-xs-4 " >email</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" name="email" id="email" placeholder="email">
                <label class="error_email" hidden="true">
                        invalid mail
                        </label>
            </div>
        </div>
        <div class="form-group " id="second">
            <label for="inputPassword" class="control-label col-xs-4">Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" name="pass" id="inputPassword" placeholder="Password">
                <label class="error_passwd" hidden="true">
                       password must be at least 5 digits 
                        </label>
            </div>
        </div>
       
        <div class="form-group">
            <div class="col-xs-offset-4 col-xs-9  ">
                <div class="checkbox">
                    <label><input type="checkbox"> Remember me</label>
                </div>
            </div>
        </div>
 
        <div class="form-group">
            <div class="col-xs-offset-4 col-xs-9">
                <button type="submit" class="btn btn-primary">Login</button>
            </div>
        </div>
    </form>
</div>
  </div>




  <div id="signup" class="tab-pane fade">
<div class="bs-example ">
    <form class="form-horizontal col-xs-9" id="x"><!-- method="post" action="index.php?do=register">-->
        <div class="form-group " id="one" >
            <label for="name" class="control-label col-xs-4" >name</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" id="name" name="reg_name" placeholder="name">
                <label class="error_fname" hidden="true">
                        name must be Letters only.
                </label>
            </div>
        </div>
        
        <div class="form-group " id="two" >
            <label for="remail" class="control-label col-xs-4" >email</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" id="remail" name="reg_email" placeholder="email">
                <label class="error_remail" hidden="true">
                    Invalid Email.
                </label>
            </div>
        </div>

        <div class="form-group " id="three">
            <label for="Password" class="control-label col-xs-4">Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="Password" name="reg_passwd" placeholder="Password">
                <label class="error_password" hidden="true">
                    password must be at least 5 digits 
                </label>
            </div>
        </div>

        <div class="form-group " id="four">
            <label for="rePassword" class="control-label col-xs-4">re-Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="rePassword"  name="reg_repasswd" placeholder="re-Password">
                <label class="error_repassword" hidden="true">
                    re-password must match password 
                </label>
            </div>
        </div>
 
        <div class="form-group">
            <div class="col-xs-offset-4 col-xs-9">
                <button type="button" class="btn btn-primary" id="sign_up">sign up</button>
            </div>
        </div>
    </form>
</div>




  </div>

      <div class="form-group">
            <div class="col-xs-offset-4 col-xs-9" id="signup_result" >
                
            </div>
        </div>
</div>



<script src="./resources/js/jquery.min.js"></script> 
<script src="./resources/js/bootstrap.min.js"></script>
<script src="./resources/js/projectFiles/signup_result.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#f").submit(function(e){
   
        var email = $("#email").val();
        var fvalid = /^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!fvalid.test(email)) {
            
            $(".error_email").show();
            $("#first").addClass("has-error");

            e.preventDefault();
        }else
        {
            $(".error_email").hide();
        }
   

 var passwd = $("#inputPassword").val().length;

        if (passwd < 5){
            $(".error_passwd").show();
     7
 $("#second").addClass("has-error");
            e.preventDefault();
           
            
        }else{
            $(".error_passwd").hide();
       }
    });

    $("#name").blur(function(e){        
        var name = $("#name").val();
        var n = /^[a-zA-Z]+$/;
        if (!n.test(name)) {           
           $(".error_fname").show();
           $("#one").addClass("has-error");
            //e.preventDefault();
        }else{
            $("#one").removeClass("has-error");
            $("#one").addClass("has-success");
            $(".error_fname").hide();
        }
    });
    
    $("#remail").blur(function(e){
   
        var remail = $("#remail").val();
        var valid =/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!valid.test(remail)) {            
            $(".error_remail").show();
            $("#two").addClass("has-error");

            //e.preventDefault();
        }else{
            $("#two").removeClass("has-error");            
            $("#two").addClass("has-success");
            $(".error_remail").hide();
        }
    });
    
    var passwd = 0;//$("#Password").val().length;
    $("#Password").blur(function(e){
        passwd = $("#Password").val().length;
        if (passwd < 5){
            $(".error_password").show();
            $("#three").addClass("has-error");
            //e.preventDefault();
        }else{
            $("#three").removeClass("has-error");
            $("#three").addClass("has-success");
            $(".error_password").hide();            
        }
    });
    
    var p = 0;
    $("#rePassword").blur(function(e){
        p=$("#rePassword").val().length;
        if (p < 5){
            $(".error_repassword").show();
            $("#four").addClass("has-error");
            //e.preventDefault();    
        }else{
            $("#four").removeClass("has-error");
            $("#four").addClass("has-success");
            $(".error_repassword").hide();
        }
    });
});

  

</script>
  </body>
</html>