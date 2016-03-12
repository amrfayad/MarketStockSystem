<?php
include_once '../model/User.php';
include_once '../model/Alarm.php';
include_once '../model/Shares.php';;

$alarm = new Alarm();
$user = new User();
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
                    $user_id = $allalarms[$i]['user_id'];
                    $user_email= $user ->return_email($user_id);
                    echo $user_email['email'];
                    mail($user_email['email'], "borsa notification","your Alert is gone above the limited value ");
                    $alarm->update_date($allalarms[$i]['alarm_id']);
                    echo 'message sent';
                    echo '<br>';
                }
            }
            else
            {
                if($allalarms[$i]['sh_price'] <= $allalarms[$i]['price'])
                {
                    $user_id = $allalarms[$i]['user_id'];
                    $user_email= $user ->return_email($user_id);
                    echo $user_email['email'];
                    mail($user_email['email'], "borsa notification","your Alert is gone down the limited value ");
                    $alarm->update_date($allalarms[$i]['alarm_id']);
                    echo 'message  was sent';
                    echo '<br>';
                }
            }
        }
    }
}



