<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
//session_start();
session_destroy();
setcookie(session_name(),  session_id(), time()-40000, "/", null,0);
header('location:./index.php');