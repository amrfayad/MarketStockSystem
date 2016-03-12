<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
       
        #icon
           {
          font-size:50px;
            }
        th 
            {
            background-color:  #4682B4;
            color: white;
            }

        </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>borsa</title>
        <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
        <!--<link rel="stylesheet" href="./resources/css/datepicker.css">-->
    </head>
    <body
        <form class="form">  
            <div class="container-fluid">







                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#dashboard">dashboard</a></li>
                    <li><a data-toggle="tab" href="#profile">my profile</a></li>
                </ul>

                <div class="form-group ">

                    <div class=" pull-right btn-sm RbtnMargin">
                        <button type="submit" class="btn btn-primary">sign out</button>
                    </div>
                </div>

              <br>  


<div class="col-lg-12">
   <div class="col-lg-3"> </div>
   <div class="col-lg-6">
      <img src="x.jpg" alt="Chania" id="b" class="img-circle img-responsive">
</div>
    </div>

                <div class="tab-content">
                    <div id="dashboard" class="tab-pane fade in active " >
                        <h3   style="font-family:verdana; color:#4682B4;" >your alerts</h3>
                        <br>
                        <div class= " row table-responsive">
                           <table class="table table-striped  table-bordered table-hover  col-sm-12 ">
                                <thead>
                                    <tr>
                                        <th> </th>
                                        <th>share</th>
                                        <th>Last price</th>
                                        <th>alert</th>
                                        <th>Last triggered</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i = 0; $i < count($alarms); $i++) { ?>
                                        <tr class="info">
                                            <input type="hidden" id="alarm_id" name="alarm_id" value="<?php echo $alarms[$i]['alarm_id'];?>">
                                            <td scope="row">
                                                <div class="checkbox">

                                                    <?php if ($alarms[$i]['is_enabled'] == 1) { ?>
                                                    <label><input type="checkbox" class="checkbx" value="" checked></label>
                                                    <?php } else {
                                                        ?>
                                                        <label><input type="checkbox" class="checkbx" value="" ></label>
                                                    <?php } ?>
                                                </div> 
                                            </td>
                                            <td><?php echo $alarms[$i]['sh_symbol'] . "  (" . $alarms[$i]['sh_desc'] . ") "; ?></td>
                                            <td>  <?php echo $alarms[$i]['sh_price']; ?> </td>
                                            <td>
                                                <?php
                                                $dir = $alarms[$i]['direction'];
                                                $txt = '';
                                                if ($dir == 0) {
                                                    $txt .="Drops Below " . $alarms[$i]['price'];
                                                } else {
                                                    $txt .="Goes Up " . $alarms[$i]['price'];
                                                }
                                                echo $txt;
                                                ?>

                                            </td>
                                            <td> <?php
                                                if ($alarms[$i]['last_trigered'] == NULL)
                                                    echo 'Never';
                                                else
                                                    echo $alarms[$i]['last_trigered'];
                                                ?> 


                                            </td>
                                            <td>
                                                <button class="btn btn-link delete" role="link" type="submit"  name="delete" value="Link 2">delete</button>
                                            </td>
                                            
                                        </tr>
                                            <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <br><br><br>
                        <h3  style="font-family:verdana; color:#4682B4;">Add Alert</h3>
                        <br>
                        <form method="post" action="index.php?do=addAlarm" id="update">





                            <div class="col-xs-6">
                                <select name= "share" class="form-control">
                                    <option>Select Share</option>
                                    <?php for ($i = 0; $i < count($shares); $i++) { ?>
                                        <option value="<?php echo $shares[$i]['sh_id']; ?>"><?php echo $shares[$i]['sh_symbol'] . "  (" . $shares[$i]['sh_desc'] . ") "; ?></option>
                                    <?php } ?>
                                </select>
                                <input type="hidden" name="user_id" value="<?php echo $us['user_id'];?>">
                            </div>
                            <br><br>
                            <br><br>
                            <div class="col-xs-2">
                                <label class="radio-inline"  style="font-family:verdana; color:#4682B4;"><input type="radio" name="optradio" value="0" >drops below</label>
                            </div>

                            <div class="col-xs-2">
                                <label class="radio-inline"  style="font-family:verdana; color:#4682B4;"><input type="radio" name="optradio" value="1">goes above</label>
                            </div>

                            <div class="col-xs-4">
                                <input type="number" name="price" step="any">
                                <br> <br>
                                <br> <br>
                                <div>
                                    <div  class="col-xs-6">
                                        <button type="submit" class="btn btn-success btn-lg">ok   </button></div>
                                    <div class="col-xs-6">

                                        <button type="reset" class="btn btn-danger btn-lg">cancel</button></div>
                                </div>

                            </div>



                        </form>


                    </div>



                    <div id="profile" class="tab-pane fade">
                        <h3  style="font-family:verdana; color:#4682B4;">your profile</h3>



                        <div class="bs-example ">
                            <form class="form-horizontal" method="post" id="x" >

<!--"index.php?do=updateUser"-->




                                <div class="form-group " id="first" >
                                    <label for="name" class="control-label col-xs-4" >name</label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" id="name" placeholder="name" value="<?php echo $us['user_name'];?>" name="u_name">
                                        <label class="error_fname" hidden="true">
                                            name must be Letters only.
                                        </label>
                                    </div>
                                </div>



                                <div class="form-group " id="third" >
                                    <label for="email" class="control-label col-xs-4" >email</label>
                                    <div class="col-xs-6">
                                        <input type="text" class="form-control" id="email" placeholder="email" value="<?php echo $email;?>" name="u_email">
                                        <input type="hidden" class="form-control" id="email" placeholder="email" value="<?php echo $email;?>" name="old_email">
                                        
                                        <label class="error_email" hidden="true">
                                            email must be like xxxxx@xxxx.com.
                                        </label>
                                    </div>
                                </div>




                                <div class="form-group" id="old">
                                    <div class="col-xs-7">
                                        <label class="control-label col-xs-6"  style="font-family:verdana; color:#4682B4;">change password ?</label>
                                    </div>

                                </div>



                                <div class="form-group " id="second">
                                    <label for="inputPassword" class="control-label col-xs-4">new Password</label>
                                    <div class="col-xs-6">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password"name="u_password">
                                        <label class="error_passwd" hidden="true">
                                            password must be at least 8 digits 
                                        </label>
                                    </div>
                                </div>



                                <div class="form-group " id="fourth">
                                    <label for="rePassword" class="control-label col-xs-4">re-Password</label>
                                    <div class="col-xs-6">
                                        <input type="password" class="form-control" id="rePassword" placeholder="re-Password" name="u_rpassword">
                                        <label class="error_password" hidden="true">
                                            password must be at least 8 digits 
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-offset-4 col-xs-4">
                                        <button type="submit" class="btn btn-primary">update profile</button>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>



                <script src="./resources/js/jquery.min.js"></script> 
                <script src="./resources/js/bootstrap.min.js"></script>
                <script src="./resources/js/projectFiles/deleteAlert.js"></script>
                <script src="./resources/js/projectFiles/enableAlert.js"></script>
                <script type="text/javascript">
$(document).ready(function(){
    $("#x").submit(function(e){
   
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
    
   
    
    var passwd = 0;//$("#Password").val().length;
    $("#rePassword").blur(function(e){
        passwd = $("#rePassword").val().length;
        if (passwd < 5){
            $(".error_password").show();
            $("#fourth").addClass("has-error");
            //e.preventDefault();
        }else{
            $("#fourth").removeClass("has-error");
            $("#fourth").addClass("has-success");
            $(".error_password").hide();            
        }
    });
    
 
});

  

</script>
                </body>
                </html>