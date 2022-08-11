<?php

//echo $atoken; //exibindo token 
//echo $ba_token; //exibindo 

// Generated by curl-to-PHP: http://incarnate.github.io/curl-to-php/
$invoice_id = uniqid();
//echo $invoice_id;


$ba_id = $_SESSION['ba_id'];
//echo $ba_id. "<br/>";
$atoken= $_SESSION['atoken'];

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
                            \"billing_agreement_id\": \"$ba_id\"      
                        }    
                    }
                    ]  
                },  
                \"transactions\": [  
                    {    
                        \"amount\":    {      
                            \"currency\": \"BRL\",      
                            \"total\": \"1.00\"    
                        },
                            \"description\": \"Payment transaction.\",
                                \"custom\": \"Payment custom field.\",
                                    \"note_to_payee\": \"Note to payee field.\",
                                        \"invoice_number\": \"$invoice_id\",
                                            \"item_list\":    {
                                                      \"items\": [
                                                              {        
                                                                \"sku\": \"skuitemNo1\",
                                                                        \"name\": \"ItemNo1\",
                                                                                \"description\": \"The item description.\",
                                                                                        \"quantity\": \"1\",
                                                                                                \"price\": \"1.00\",
                                                                                                        \"currency\": \"BRL\",
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
//echo(gettype($result));
//print_r($result);
//echo $result->id;// Exibe o Payid

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Thank you Page</title>
</head>

<body>
    <div class="jumbotron text-center">
        <h1 class="display-3">Thank You For Your purchase!</h1>
        <!-- Transaction id -->
        <p>Your Transaction ID: <?php echo $result->id; ?></p>
        <hr>
        <p>
            Having trouble? <a href="">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="http://localhost/Projeto-Paypal/index.php" role="button">Continue to homepage</a>
        </p>
    </div>

</body>

</html>

