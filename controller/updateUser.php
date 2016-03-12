<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './model/User.php';

if(isset($_POST['u_name'])&&isset($_POST['u_email']))
{
  
    $update_user=new User();
    $u_data=$update_user->search_email( $_POST['u_email'])
    if($u_data!=NULL)
    {

      if(preg_match($_POST['u_name'],  $u_data[1]))
      {

      	if(($_POST['u_password'])===($_POST['u_rpassword'] && strlen($_POST['u_password'])>=5)
      	{
      		 //$u_data=$update_user->search_email( $_POST['u_email'])
      		//function update($id, $new_name, $new_password, $new_email) {
      		if($update_user-> update($u_data[0], $_POST['u_name'],$_POST['u_password'],$_POST['u_email'])){
      			echo "user update successful";
      		}
      		else
      		{
      			echo "error in database";
      		}
      	}
      }
      else
      {
           echo"name is false";

      }

    }

    else
    {
    	echo "name and pass not entered";
    }
}


