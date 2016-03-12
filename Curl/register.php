<?php

//extract data from the post
//set POST variables
$url = 'http://localhost/MarketStockSystem/index.php';

function randomString($length = 10) {
    $str = "";
    $characters = array_merge(range('A', 'Z'), range('a', 'z'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

function randomPassword($length = 10) {
    $str = "";
    $characters = array_merge(range('A', 'Z'), range('a', 'z'), range('0', '9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

$randomUsers = array();

for ($i = 0; $i < 10; $i++) {
    $user_name = randomString();
    $pass = randomPassword();
    $email = randomString() . "@yahoo.com";
    $fields = array(
        'do' => urlencode("register"),
        'reg_name' => urlencode($user_name), //$_POST['firstname']),
        'reg_email' => urlencode($email), //$_POST['lastname'])//,
        'reg_passwd' => urlencode($pass),
        'reg_repasswd' => urlencode($pass)
    );
    $fields_string = null;
    foreach ($fields as $key => $value) {
        $fields_string .= $key . '=' . $value . '&';
    }
    rtrim($fields_string, '&'); //remove any white space in right 
    $ch = curl_init();
    //set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
    //execute post
    $result = curl_exec($ch);
    //echo $result;
    //close connection
    curl_close($ch);

    
    
    
    $fields = array(
        'do' => urlencode("login"),
        'email' => urlencode($email),
        'pass' => urlencode($pass),
    );
    $fields_string = null;
    foreach ($fields as $key => $value) {
        $fields_string .= $key . '=' . $value . '&';
    }
    rtrim($fields_string, '&'); //remove any white space in right 
    $ch = curl_init();
//set the url, number of POST vars, POST data
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);

//execute post
    $result = curl_exec($ch);
    //echo $result;
//close connection
    curl_close($ch);
    

    //echo "User Name ".$_SESSION['user_name'];
}