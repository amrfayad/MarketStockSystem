<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>borsa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="css/datepicker.css">
  </head>
  <body
 <form class="form">  
<div class="container-fluid">



<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#login">login</a></li>
  <li><a data-toggle="tab" href="#signup">sign up</a></li>
</ul>
<br/><br/><br/>
<div class="tab-content">
  <div id="login" class="tab-pane fade in active">

<div class="bs-example ">
    <form class="form-horizontal col-xs-9" id="f">
        <div class="form-group " id="first" >
            <label for="email" class="control-label col-xs-4 " >email</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" id="email" placeholder="email">
                <label class="error_email" hidden="true">
                        invalid mail
                        </label>
            </div>
        </div>
        <div class="form-group " id="second">
            <label for="inputPassword" class="control-label col-xs-4">Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
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
    <form class="form-horizontal col-xs-9" id="x">






        <div class="form-group " id="one" >
            <label for="name" class="control-label col-xs-4" >name</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" id="name" placeholder="name">
                <label class="error_fname" hidden="true">
                        name must be Letters only.
                        </label>
            </div>
        </div>



  <div class="form-group " id="two" >
            <label for="remail" class="control-label col-xs-4" >email</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" id="remail" placeholder="email">
                <label class="error_remail" hidden="true">
                        email must be Letters only.
                        </label>
            </div>
        </div>




        <div class="form-group " id="three">
            <label for="Password" class="control-label col-xs-4">Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="Password" placeholder="Password">
                <label class="error_password" hidden="true">
                       password must be at least 5 digits 
                        </label>
            </div>
        </div>



   <div class="form-group " id="four">
            <label for="rePassword" class="control-label col-xs-4">re-Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="rePassword" placeholder="re-Password">
                <label class="error_repassword" hidden="true">
                       password must be at least 5 digits 
                        </label>
            </div>
        </div>
 
        <div class="form-group">
            <div class="col-xs-offset-4 col-xs-9">
                <button type="submit" class="btn btn-primary">sign up</button>
            </div>
        </div>
    </form>
</div>





  </div>
</div>


<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
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


$("#x").submit(function(e){
   
        var remail = $("#remail").val();
        var valid =/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if (!valid.test(remail)) {
            
            $(".error_remail").show();
            $("#two").addClass("has-error");

            e.preventDefault();
        }else
        {
            $(".error_remail").hide();
        }
   
        


    var name = $("#name").val();
        var n = /^[a-zA-Z]+$/;
        if (!n.test(name)) {
            
            $(".error_fname").show();

           $("#one").addClass("has-error");

            e.preventDefault();
        }else
        {
            $(".error_fname").hide();
        }




 var passwd = $("#rePassword").val().length;

        if (passwd < 5){
            $(".error_repassword").show();
     7
 $("#four").addClass("has-error");
            e.preventDefault();
           
            
        }else{
            $(".error_repassword").hide();
       }
    


 var p = $("#Password").val().length;

        if (p < 5){
            $(".error_password").show();
     7
 $("#three").addClass("has-error");
            e.preventDefault();
           
            
        }else{
            $(".error_password").hide();
       }
    });


});

  

</script>
  </body>
</html>