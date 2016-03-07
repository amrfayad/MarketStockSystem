<?php
class database{
	
 static function connect()
  {
    return mysqli_connect("localhost","root","root","stock_market");
    
  }
 
}