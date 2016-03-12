<?php
class Database{
 static function connect()
  {
    return mysqli_connect("localhost","root","ROOT","stocks_market");
  }
}