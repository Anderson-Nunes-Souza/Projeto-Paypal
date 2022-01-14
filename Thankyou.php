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
        <p>Your Transaction ID: <?php echo $_GET["TransactionId"];?></p>
        <hr>
        <p>
            Having trouble? <a href="">Contact us</a>
        </p>
        <p class="lead">
            <a class="btn btn-primary btn-sm" href="http://projetopaypalanderson-online.preview-domain.com/" role="button">Continue to homepage</a>
        </p>
    </div>

</body>

</html>