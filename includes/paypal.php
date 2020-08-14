<?php 

//url aquispe
define('URL_SITIO', 'http://localhost/Proyecto-Web-Conferencias');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AaACrTtHHxOdG_aCs8XdV7L-ZRsqtDZLWouaEZTJVB0ShCfqwKQ7YarfCdC1eTMPbLCmU5b0HIqTqJjl',     // ClientID
        'ELDT5_pF-Mv08J8bnisr6XU_luqcQ6-67mhjh467_sfkqS5o1J_jLKBInUnLUhlch-lyjdUDCyFN6rba'      // ClientSecret
    )
);

