<?php


include_once './model/User.php';

if (isset($_POST['email']) && isset($_POST['pass'])) {
    
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $user = new User();
    $us = $user->search_email($email);


    if ($us == NULL) {
        echo 'Email not found please register';
    } else {
        if ($us['password'] === $pass) {
            echo 'Passwor match';
          
            
        } 
        else
            {
            echo 'Password Not match';
        }
    }
}
 else {
    echo 'No REquest Send';
}
