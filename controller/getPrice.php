<?php


require_once('./model/class.stockMarketAPI.php'); 
$StockMarketAPI = new StockMarketAPI();
$symbol = $_POST['symbol'];
$StockMarketAPI->symbol = $symbol;
$symbol_array = $StockMarketAPI->getData();
$includes[0] = 'show';

