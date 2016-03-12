<?php
class Database{
 static function connect()
  {
    return mysqli_connect("localhost","root","123","stock_market");
  }
}