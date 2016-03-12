<?php
include_once '../model/User.php';
include_once '../model/Alarm.php';
include_once '../model/Shares.php';;

$alarm = new Alarm();
$allalarms = $alarm->list_all_alarms();
$today = date('Y-m-d');

for($i=0; $i<count($allalarms); $i++)
{
    if($allalarms[$i]['is_enabled'] == 1)
    {
        if($today != $allalarms[$i]['last_trigered'])
        {
            if($allalarms[$i]['direction'] == 1 )
            {
                if($allalarms[$i]['sh_price'] >= $allalarms[$i]['price'])
                {
                    echo 'Send Email';
                    $alarm->update_date($allalarms[$i]['alarm_id']);
                    echo '<br>';
                }
            }
            else
            {
                if($allalarms[$i]['sh_price'] <= $allalarms[$i]['price'])
                {
                    echo 'Send Email';
                    $alarm->update_date($allalarms[$i]['alarm_id']);
                    echo '<br>';
                }
            }
        }
    }
}



