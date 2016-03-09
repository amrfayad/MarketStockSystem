<!DOCTYPE html>
<html lang="en">
  <head>
  	<style type="text/css">
#icon {
   font-size:50px;
}
  	</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>borsa</title>
    <link href="./resources/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/datepicker.css">
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


<div class="tab-content">
  <div id="dashboard" class="tab-pane fade in active">
  <h3>your alerts</h3>
<br>
<table class="table table-striped  table-bordered">
  <thead>


    <tr>
      <th> </th>
      <th>share</th>
      <th>Last price</th>
      <th>alert</th>
      <th>Last triggle</th>
      <th> </th>
      
    </tr>
  </thead>
  <tbody>
  	
    <tr>
      <th scope="row">
      	<div class="checkbox">
       <label><input type="checkbox" value=""></label>
        </div> 
     </th>
      <td> </td>
      <td> </td>
      <td> </td>
       <td> </td>
      <td> <button class="btn btn-link" role="link" type="submit" name="op" value="Link 2">delete</button></td>
    </tr>
    <tr>
      <th scope="row">

	<div class="checkbox">
       <label><input type="checkbox" value=""></label>
        </div> 
      </th>
      <td>  </td>
      <td>  </td>
      <td>  </td>
       <td>  </td>
      <td> <button class="btn btn-link" role="link" type="submit" name="op" value="Link 2">delete</button></td>
    </tr>
    <tr>
      <th scope="row">
	<div class="checkbox">
       <label><input type="checkbox" value=""></label>
        </div> 
      </th>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td> <button class="btn btn-link" role="link" type="submit" name="op" value="Link 2">delete</button></td>
    </tr>

    <tr>
      <th scope="row">

	<div class="checkbox">
       <label><input type="checkbox" value=""></label>
        </div> 
      </th>
      <td>  </td>
      <td>  </td>
      <td>  </td>
      <td>  </td>
     <td> <button class="btn btn-link" role="link" type="submit" name="op" value="Link 2">delete</button></td>
    </tr>
    <tr>
      <th scope="row">

	<div class="checkbox">
       <label><input type="checkbox" value=""></label>
        </div> 
      </th>
      <td>  </td>
      <td>  </td>
      <td>  </td>
       <td>  </td>
       <td> <button class="btn btn-link" role="link" type="submit" name="op" value="Link 2">delete</button></td>
    </tr>
  </tbody>
</table>

<br><br><br>
<h3>add alert</h3>
<br>
<div class="col-xs-6">
 <select class="form-control">
    <option value="one">One</option>
    <option value="two">Two</option>
    <option value="three">Three</option>
    <option value="four">Four</option>
    <option value="five">Five</option>
</select>
</div>

<br><br>
<br><br>
<div class="col-xs-2">
<label class="radio-inline"><input type="radio" name="optradio">drops below</label>
</div>

<div class="col-xs-2">
<label class="radio-inline"><input type="radio" name="optradio">goes above</label>
</div>

<div class="col-xs-4">
 <select class="form-control">
    <option value="one">One</option>
    <option value="two">Two</option>
    <option value="three">Three</option>
    <option value="four">Four</option>
    <option value="five">Five</option>
</select>
<br> <br>
<br> <br>
<div>
<div  class="col-xs-6">
<button type="button" class="btn btn-success btn-lg">ok   </button></div>
<div class="col-xs-6">

<button type="button" class="btn btn-danger btn-lg">cancel</button></div>
</div>

  </div>

</div>










  <div id="profile" class="tab-pane fade">
  <h3>your profile</h3>



<div class="bs-example ">
    <form class="form-horizontal">






        <div class="form-group " id="first" >
            <label for="name" class="control-label col-xs-4" >name</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" id="name" placeholder="name">
                <label class="error_fname" hidden="true">
                        name must be Letters only.
                        </label>
            </div>
        </div>



  <div class="form-group " id="third" >
            <label for="email" class="control-label col-xs-4" >email</label>
            <div class="col-xs-6">
                <input type="text" class="form-control" id="email" placeholder="email">
                <label class="error_email" hidden="true">
                        email must be Letters only.
                        </label>
            </div>
        </div>




 <div class="form-group" id="old">
   <div class="col-xs-7">
            <label class="control-label col-xs-6">change password ?</label>
        </div>

 </div>



        <div class="form-group " id="second">
            <label for="inputPassword" class="control-label col-xs-4">old-Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                <label class="error_passwd" hidden="true">
                       password must be at least 5 digits 
                        </label>
            </div>
        </div>



   <div class="form-group " id="fourth">
            <label for="rePassword" class="control-label col-xs-4">new-Password</label>
            <div class="col-xs-6">
                <input type="password" class="form-control" id="rePassword" placeholder="re-Password">
                <label class="error_passwd" hidden="true">
                       password must be at least 5 digits 
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









<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
  </body>
</html>