<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of getPrice
 *
 * @author engamrezat
 */
require_once('./model/class.stockMarketAPI.php'); 
$StockMarketAPI = new StockMarketAPI();
$symbol = $_POST['symbol'];
$StockMarketAPI->symbol = $symbol;
$symbol_array = $StockMarketAPI->getData();

$includes[0] = 'show';

