<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './model/User.php';
$email = $_POST['email'];
$pass = $_POST['pass'];

$user = new User();
$us = $user->search_email($email);


if($us == NULL)
{
    echo 'Email .found please rgister';
}
 else
{
     if($us['password'] === $pass)
     {
         echo 'Loged in';
     }
     else{
         echo 'Invalid password';
     }
}
