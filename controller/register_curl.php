<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once './model/User.php';

$includes = array();
if(isset($_POST['user_id']))
{
    $user_id = $_POST['user_id'];
    $reg_name = $_POST['reg_name'];
    $reg_email = $_POST['reg_email'];
    $reg_passwd = $_POST['reg_passwd'];
    $reg_repasswd = $_POST['reg_repasswd'];
    $user_reg = new User();
    if($user_reg->search_email($reg_email) == NULL)
    {
        $user_reg->add_user_with_id($user_id,$reg_name, $reg_passwd, $reg_email);
        echo 'User Registerd';
    }
}
else if (isset($_POST['reg_name']) && isset($_POST['reg_email']) && isset($_POST['reg_passwd']) && isset($_POST['reg_repasswd']))
    {
    $reg_name = $_POST['reg_name'];
    $reg_email = $_POST['reg_email'];
    $reg_passwd = $_POST['reg_passwd'];
    $reg_repasswd = $_POST['reg_repasswd'];
    $pattern_email = '/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
    $pattern_name = '/^[a-zA-Z]+$/';
    if(preg_match($pattern_email, $reg_email)){//if email valid
        $user_reg = new User();//create obj of user
        if ($user_reg->search_email($reg_email) == NULL)
            {//if email registed in database 
            if(preg_match($pattern_name, $reg_name)){//if name valid
                if($reg_passwd===$reg_repasswd && strlen($reg_passwd)>=5)
                    {//if passwd matched 
                    //echo 'all good';
                    if($user_reg->add_user($reg_name, $reg_passwd, $reg_email))
                    {
                        $result="You Registed Successfully :)<br>Now You can Login.";
                        //echo 'You Registed Successfully :)';
                        //echo '<br>Now You can Login.';
                    }
                    else
                    {
                        $result =  'error in adding user in database.';                        
                    }
                    
                }
                else
                {//if passwd not matched
                    $result =  'Password not matched';
                }                
            }
            else
            {//if name invalid
                $result =  'Name Invalid';
            }
            //echo 'Email not found in database';
            //echo "good new email";
        }
        else
        {
            //email already registed in database
            $result =  'Email already exist please login';        
        }//end else of search mail 
    }
    else
    {//if email invalid
        $result =  'Email Invalid';
    }//end if email validation    
    $json['result']=$result;
    echo json_encode($json);
                        
}//end if isset
