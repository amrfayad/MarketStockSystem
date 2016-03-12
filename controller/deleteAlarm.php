<?php
include_once '../model/Alarm.php';
if(isset($_POST['alarm_id']))
{


$alarm = new Alarm();
$alarm_id = $_POST['alarm_id'];
$alarm ->delete($alarm_id);
}



