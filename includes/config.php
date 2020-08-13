<?php 

//url aquispe
define('URL_SITIO', '');

require 'paypal/autoload.php';

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AUCZA5YWgpwYGh7PDTzVyAa7TdfOUG-M8GIq8gv_SyJ0zdbDH725rtq7zfWeyJuou6VHiVxCMuvc1ywV',     // ClientID
        'EEgvmLB2yii-H81MF4KHsuJihzGqfRqeMzhTK_7KntuMk88_h6qMfOvUwt9uQywAJ2wRruaHHec6nfl3'      // ClientSecret
    )
);

