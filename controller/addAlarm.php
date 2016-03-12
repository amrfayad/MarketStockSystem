<?php

include_once '../model/Alarm.php';
//include_once '../model/Alarm.php';

//var_dump($_POST);
//die();
$alarm = new Alarm();
if(isset($_POST['user_id'])  )
{
    $user_id = intval($_POST['user_id']);
    $sh_id = $_POST['sh_id'];
    $direction = intval($_POST['direction']);
    $price = $_POST['price'];
    $alarm ->add($sh_id, $user_id, $direction, $price);
    $data = $alarm->select_last();
    echo json_encode($data);
}
 else {
    echo 'Test';
}


