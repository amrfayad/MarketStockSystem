<?php
class Database{
 static function connect()
  {
    return mysqli_connect("localhost","root","1111","stock_market");
    }
}