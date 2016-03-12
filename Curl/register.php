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

function randomNumber($length = 10) {
    $str = "";
    $characters = array_merge(range('0', '9'));
    $max = count($characters) - 1;
    for ($i = 0; $i < $length; $i++) {
        $rand = mt_rand(0, $max);
        $str .= $characters[$rand];
    }
    return $str;
}

$randomUsers = array();
    //  Sign Up With 10 Random Users 
for ($i = 0; $i < 10; $i++)
{
    $user_id = randomNumber();
    $user_name = randomString();
    $pass = randomPassword();
    $email = randomString() . "@yahoo.com";
    $fields = array(
        'do' => urlencode("register_curl"),
        'user_id' => urlencode($user_id),
        'reg_name' => urlencode($user_name),
        'reg_email' => urlencode($email),
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
    //var_dump($_POST);
    $result = curl_exec($ch);
    //echo $result;
    //close connection
    curl_close($ch);
    
    
    
    //  Log In After Sign Up
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
    $result = curl_exec($ch);
    curl_close($ch);
    
    
    
    // Add 10 Alarms After Logged In
    for ($j = 0; $j < 10; $j++) {
        $price = rand(1, 200);
        $dir = rand(0, 1);
        $sh_id = rand(0, 11);
        $fields = array(
            'do' => urlencode("addalarm_curl"),
            'price' => urlencode($price),
            'direction' => urlencode($dir),
            'user_id' => urlencode($user_id),
            'sh_id'  => urlencode($sh_id),
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
        $result = curl_exec($ch);
        curl_close($ch);
    }
    
     // Log Out After Add 10 Alarms
    $fields = array(
            'do' => urlencode("logout"),
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
        $result = curl_exec($ch);
        curl_close($ch);
    
}