<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of alarm
 *
 * @author engamrezat
 */
include_once 'Database.php';

class Alarm {

    // `alarm_id`, `sh_id`, `user_id`, `is_enabled`,
    //  `direction`, `price`, `last_trigered`
    public function add($sh_id, $user_id, $direction, $desired_price) {
        
        try{
        
        $conection = Database::connect();
        
        
        $query = "insert into alarm (sh_id,user_id,direction,price) " .
                " values ($sh_id,$user_id,$direction,$desired_price)";
      
        $execute = mysqli_query($conection, $query);
        return $execute;
        }
         
        catch (Exception $e)
        {
          echo $e->getMessage();
        }
        return -1;
    }

    public function list_alarms($user_id) {
        try {
            $conection = Database::connect();
            if (!$conection) {
                die('Error: ' . mysqli_connect_error());
            }
            $query = "select sh_symbol,sh_desc,sh_price,alarm_id,is_enabled,direction,price,last_trigered from alarm as al , shares as sh"
                    . " where al.user_id = $user_id and al.sh_id=sh.sh_id ORDER BY al.alarm_id" ;
            //echo $query;
            $result = mysqli_query($conection, $query);
            $alarm = array();
            $i = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $alarm[$i] = $row;
                $i++;
            }
            return $alarm;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return -1;
    }

    public function enable($alarm_id) {
        $conection = Database::connect();
        $query = "update alarm set  is_enabled=1 where alarm_id=$alarm_id";
        $excute = mysqli_query($conection, $query);
        return $excute;
    }

    public function disable($alarm_id) {
        $conection = Database::connect();
        $query = "update alarm set  is_enabled=0 where alarm_id=$alarm_id";
        //echo $query;
        $excute = mysqli_query($conection, $query);
        return $excute;
    }

    public function update_date($alarm_id) {
        $conection = Database::connect();
        $dt = date('Y-m-d');
        $query = "update alarm set  last_trigered='".$dt."' where alarm_id=$alarm_id";
        $excute = mysqli_query($conection, $query);
        return $excute;
    }

    public function delete($alarm_id) {
        try {

            $conection = Database::connect();
            if (!$conection) {
                die('Error: ' . mysqli_connect_error());
            }
            $query = "delete from alarm where alarm_id =" . $alarm_id;
            echo $query;
            $result = mysqli_query($conection, $query);
            return 1;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return -1;
    }

    public function select($alarm_id) {
        try {
            $conection = Database::connect();
            if (!$conection) {
                die('Error: ' . mysqli_connect_error());
            }
            $query = "select * from alarm where alarm_id ='" . $alarm_id . "'";
            $result = mysqli_query($conection, $query);
            $staff = array();
            $i = 0;
            while ($row = mysqli_fetch_assoc($result))
            {
                $staff[$i] = $row;
                $i++;
            }
            return $staff;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return -1;
    }
}


        // test

//$arm=new alarm();
//$arm->add(1, 1, 1, 100);
//$arm->disable(7);
//$arm->enable(7);
//var_dump($arm->select(77));
//$arm->delete(7);
//$arm->update_date(8);
//var_dump($arm->list_alarms(1));