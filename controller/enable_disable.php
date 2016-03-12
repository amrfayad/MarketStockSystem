<?php
//include 'Alarm.php';
include '../model/Alarm.php';
if(isset($_POST['alarm_id']))
{
    $alarm = new Alarm();
    $alarm_id = $_POST['alarm_id'];
    
    if($_POST['alarm_flag'] === "true"){
        $alarm ->enable($alarm_id);
    }else if($_POST['alarm_flag'] === "false") {
        $alarm ->disable($alarm_id);
    }
}

