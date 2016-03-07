<?php

include_once 'database.php';

class user {

    function add_user($name, $password, $email) {
        $conection = database::connect();
        $query = "insert into user (user_name,email,password) " . " values ('$name','$password','$email')";
        $excutet = mysqli_query($conection, $query);
        if (!$excutet) {
            echo "<br>";
            echo "not inserted";
        } else {
            echo "<br>";
            echo "inserted ";
        }
    }
    // Log In Not Used
    function login($email, $password) {
        $conection = database::connect();
        $query = "SELECT * FROM user where user_name='$name' and password='$password'";
        $result =  mysqli_query($conection, $query);
        
        if ($result->num_rows > 0) {
            while ($row = mysqli_fetch_array($result)) {

                if (!$row['user_name']) {
                    echo "The User Name and Password Is Not Right !";
                } else {
                    echo $row['user_name'];
                    echo "The User Name and Password Is Right !";
                }
            }
        } else {
            echo "the user name or password not right!";
        }
    }

    function search_email($email)
    {
        $conection = database::connect();
        $query = "SELECT user_id,user_name FROM user where email='$email'";
        $excute1 = mysqli_query($conection, $query);
        $result = $conection->query($query);
        $row = mysqli_fetch_array($result);
        return $row;
      
    }

    function update($id, $new_name, $new_password, $new_email) {
        $conection = database::connect();
        $query = "update user set  user_name='$new_name' ,password='$new_password'"
                . " ,email='$new_email' where user_id=$id";
        $excute = mysqli_query($conection, $query);
        return $excute;
    }
}

$user = new user();
//$user->add_user("Ahmed", "ahmed@yahoo.com", "1234");
//$user->update(2, "ali", "567", "aliali@yahoo.com");
//echo ($user->search_email("ali@yahoo.com")['user_name']);
//$user->login("aliaaa", "567");
$user->search_email($email);