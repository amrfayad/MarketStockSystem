<?php

include_once 'Alarm.php';


$alarm = new Alarm();
if(isset($_POST['user_id'])  )
{
    $user_id = intval($_POST['user_id']);
    $sh_id = $_POST['sh_id'];
    $direction = intval($_POST['direction']);
    $price = $_POST['price'];
    $alarm ->add($sh_id, $user_id, $direction, $price);
}


