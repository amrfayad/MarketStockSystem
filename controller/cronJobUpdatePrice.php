<?php
require_once('../model/class.stockMarketAPI.php');
require_once('../model/Shares.php');
$StockMarketAPI = new StockMarketAPI();
$share = new Shares();
$shares = $share->listshares();
for ($i = 0; $i < count($shares); $i++) {
    $StockMarketAPI->symbol = $shares[$i]['sh_symbol'];
    $symbol_array = $StockMarketAPI->getData();
    $price = $symbol_array[$shares[$i]['sh_symbol']]['price'];
    if ($price != $shares[$i]['sh_price']) {
        $share->updatePrice($shares[$i]['sh_id'], $price);
    }
}