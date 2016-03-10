<?php
if(isset($_POST['alarm_id']))
{
include_once 'Alarm.php';

$alarm = new Alarm();
$alarm_id = $_POST['alarm_id'];
$alarm ->delete($alarm_id);
}



