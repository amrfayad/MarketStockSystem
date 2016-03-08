<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shares
 *
 * @author engamrezat
 */
include_once './Database.php';
;

class Shares {

    //put your code here
    public function listshares() {
        try {
            $conection = Database::connect();
            if (!$conection) {
                die('Error: ' . mysqli_connect_error());
            }
            $query = "select * from shares";
            $result = mysqli_query($conection, $query);
            $shares = array();
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $shares[$i] = $row;
                $i++;
            }
            return $shares;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return -1;
    }

}

//$sh = new Shares();

//var_dump($sh->listshares());
