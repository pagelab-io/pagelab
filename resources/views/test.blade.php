<?php
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com");
var_dump(curl_exec($ch));