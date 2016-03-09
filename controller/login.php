<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './model/User.php';
include_once './model/Alarm.php';
include_once './model/Shares.php';;




$includes = array();



if (isset($_POST['email']) && isset($_POST['pass'])) {


    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $user = new User();
    $us = $user->search_email($email);


    if ($us == NULL) {
        echo 'Email .found please rgister';
    } else {
        if ($us['password'] === $pass) {
            
            $alarm = new Alarm();
            $share = new Shares();
            
            $shares = $share->listshares();
            
            
            $alarms = $alarm->list_alarms($us['user_id']);
            //var_dump($alarms);
            $includes[0] = "alert";
            
            
            
            
        } 
        else
            {
            
        }
    }
}
