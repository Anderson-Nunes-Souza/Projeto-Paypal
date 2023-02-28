<?php
// Chamada para gerar Acess Token

session_start();

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/oauth2/token');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");
curl_setopt($ch, CURLOPT_USERPWD, 'AUGmAdOyjusVsx_rh4vhf0P-zaAE1S2HpFH9u9F8SMfQNS6EFDrG9C5mkL7gfgCyTbgeSf621VRgZRSe:ENzUImC0YGNnnyrFCoVpDM3RP6EhzpV818OD5JqYnGfu6blot8dyEbrwDZNZ1sqzKixGxb05es--XiSl');

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Accept-Language: en_US';
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);

//Converter todo o retorno em somente o acess token
$result = json_decode($result);
$atoken = $result->access_token;

$_SESSION['atoken'] = $atoken;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
echo $atoken;

return $atoken; // deixar como return para o createBilling Token funcionar

?>