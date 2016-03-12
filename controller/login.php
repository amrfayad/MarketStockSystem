<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once './model/User.php';
include_once './model/Alarm.php';
include_once './model/Shares.php';
;
$includes = array();
if (isset($_SESSION['user_name'])) {

    $alarm = new Alarm();
    $share = new Shares();
    $user = new User();
    $email = $_SESSION['user_email'];
    $us = $user->search_email($email);
    $shares = $share->listshares();
    $alarms = $alarm->list_alarms(intval($_SESSION['user_id']));
    $includes[0] = "alert";
} else {
    if (isset($_POST['email']) && isset($_POST['pass'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $user = new User();
        $us = $user->search_email($email);
        if ($us == NULL) {
            header('location:./index.php');
        } else {
            if ($us['password'] === $pass) {
                $_SESSION['user_name'] = $us['user_name'];
                $_SESSION['user_id'] = $us['user_id'];
                $_SESSION['user_email'] = $email;
                $alarm = new Alarm();
                $share = new Shares();
                $shares = $share->listshares();
                $alarms = $alarm->list_alarms($us['user_id']);
                $includes[0] = "alert";
            } else {
                header('location:./index.php');
            }
        }
    } else {
        header('location:./index.php');
    }
}
    