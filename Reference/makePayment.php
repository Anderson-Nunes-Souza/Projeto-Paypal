<?php

$atoken = require("./aTokenCreate.php");

$token = $_GET["token"];
$ba_token = $_GET["ba_token"];
//echo $atoken; //exibindo token 
//echo $ba_token; //exibindo 

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v1/payments/payment');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt(
    $ch,
    CURLOPT_POSTFIELDS,
    "{
        \"intent\": \"sale\",
          \"payer\":  {
                \"payment_method\": \"PAYPAL\",
                \"funding_instruments\": [
                    {
                          \"billing\":      {        
                            \"billing_agreement_id\": \"$ba_token\"      
                        }    
                    }
                    ]  
                },  
                \"transactions\": [  
                    {    
                        \"amount\":    {      
                            \"currency\": \"USD\",      
                            \"total\": \"1.00\"    
                        },
                            \"description\": \"Payment transaction.\",
                                \"custom\": \"Payment custom field.\",
                                    \"note_to_payee\": \"Note to payee field.\",
                                        \"invoice_number\": \"GDAGDS5754YEK\",
                                            \"item_list\":    {
                                                      \"items\": [
                                                              {        
                                                                \"sku\": \"skuitemNo1\",
                                                                        \"name\": \"ItemNo1\",
                                                                                \"description\": \"The item description.\",
                                                                                        \"quantity\": \"1\",
                                                                                                \"price\": \"1.00\",
                                                                                                        \"currency\": \"USD\",
                                                                                                                \"tax\": \"0\",
                                                                                                                        \"url\": \"https://example.com/\"      
                                                                                                                    }
                                                                                                                    ]
                                                                                                                    }
                                                                                                                  }
                                                                                                                ],
                                                                                                                  \"redirect_urls\":  {
                                                                                                                        \"return_url\": \"https://example.com/return\",
                                                                                                                            \"cancel_url\": \"https://example.com/cancel\"  
                                                                                                                        }
                                                                                                                    }"
);


$headers = array();
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Bearer ' . $atoken;
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

$result = json_decode($result);
print_r($result);
