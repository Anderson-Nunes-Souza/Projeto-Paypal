<?php
// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
//require("./createBillingToken.php");
//echo $atoken;

use LDAP\Result;

session_start();
$atoken = $_SESSION['atoken'];
$token = $_GET["token"];
$ba_token = $_GET["ba_token"];
//echo $atoken. "<br/>";
//echo $token . "<br/>";
//echo $ba_token. ".<br/>";

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/billing-agreements/agreements');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "{  
    \"token_id\": \"$ba_token\"
}"
);

$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer '. $atoken;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$result = json_decode($result);

//print_r($result);
//print $result->id . "<br/>";
$_SESSION['ba_id'] = $result->id;

require("./makePayment.php");
?>