<?php

//extract data from the post
//set POST variables
$url = 'http://localhost/MarketStockSystem/index.php';




$fields = array(
    'do'=>  urlencode("login"),
    'email' => urlencode("aya@yahoo.com"), //$_POST['firstname']),
    'pass' => urlencode("12345"), //$_POST['lastname'])//,
);
$fields_string = null;
foreach ($fields as $key => $value)
{
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
echo $result;
//close connection
curl_close($ch);
 echo "User Name ".$_SESSION['user_name'];