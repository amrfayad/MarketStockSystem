<?php

include_once './model/Alarm.php';


$alarm = new Alarm();
if(isset($_POST['share'])  && isset($_POST['optradio'])  && isset($_POST['price'])  )
{
    $user_id = intval($_POST['user_id']);
    $sh_id = $_POST['share'];
    $direction = intval($_POST['optradio']);
    $price = $_POST['price'];
    $alarm ->add($sh_id, $user_id, $direction, $price);
}


