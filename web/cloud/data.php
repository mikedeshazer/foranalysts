<?php


header('Access-Control-Allow-Methods: GET, POST'); 


header('Access-Control-Allow-Origin: *');


$theResp = file_get_contents('https://graphs2.coinmarketcap.com/currencies/ethereum/1438958970000/1519283054000/');

echo($theResp);



?>