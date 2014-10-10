<?php

require 'vendor/autoload.php';

$key = "SECRET_KEY";
$token = array(
    "client" => "CLIENT_ID", // define this if token is for a client
    "channel" => "CHANNEL_NAME",
    "permissions" => array(
        ".*" => array(
            "publish" => false,
            "subscribe" => false
        ),
        "^main-room$" => array(
            "publish" => false,
            "subscribe" => true
        )
    ),
    "exp" => time() + 1000 * 3
);

$jwt = JWT::encode($token, $key);
print_r($jwt);

?>
