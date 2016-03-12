
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        // session_destroy();
        if (isset($_REQUEST['do'])) {
            include './controller/' . $_REQUEST['do'] . '.php';
        } else {
            if (isset($_SESSION['user_name']))
                {
                    include './controller/login.php';
                } 
            else 
            {

                include './view/login_registration.php';
            }
        }
        if (isset($includes)) {
            for ($j = 0; $j < count($includes); $j++) {
                include './view/' . $includes[$j] . '.php';
            }
        } else if (isset($_REQUEST['inc'])) {
            include './view/' . $_REQUEST['inc'] . '.php';
        }
        ?>
    </body>
</html>