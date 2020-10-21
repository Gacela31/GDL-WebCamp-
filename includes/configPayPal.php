<?php

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost/gdlwebcam%20proyecto/');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        //ClienteID
        'ASz3OhS0emS6fG8L_B4nXODMqtvOH6c9mPq8wTPOPl-sOZqZM1VXWQYJH88Fgcps95qjdwFTd3MOKhNK',
        //Secret
        'ELNBEdw6uKC9qrkkgLTZeuivqypke82p8lYLRkThVck7zdAHya_er2LvhPjis8ESM20fw_FZJd0Sxu2E'
    )
);

