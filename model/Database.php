<?php
class Database{
 static function connect()
  {
    return mysqli_connect("localhost","root","ROOT","stock_market");
  }
}