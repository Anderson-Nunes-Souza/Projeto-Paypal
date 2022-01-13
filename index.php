<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>shopping cart - Bootdey.com</title>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="./js/shopping_cart.js"></script>
    <!-- header paypal sdk-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title> PayPal Checkout Integration | Server Demo </title>
    <!-- Fim header paypal SDK-->
</head>

<body>
    <div class="container bootstrap snippets bootdey">
        <div class="col-md-9 col-sm-8 content">
            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Cart</li>
                    </ol>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-info panel-shadow">
                        <div class="panel-heading">
                            <h3>
                                <img class="img-circle img-thumbnail" src="https://bootdey.com/img/Content/user_3.jpg"> Matew darfkmoun
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Description</th>
                                            <th>Qty</th>
                                            <th>Price</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><img src="https://via.placeholder.com/400x200/FFB6C1/000000" class="img-cart"></td>
                                            <td><strong>Product 1</strong>
                                                <p>Size : 26</p>
                                            </td>
                                            <td>
                                                <form class="form-inline">
                                                    <input class="form-control" type="number" value="1" id="prod1Qtd" min="1" max="99" onchange="CalcularProd('prod1Qtd', 'prod1Unit','prod1Total')">
                                                    <a href="#" class="btn btn-primary"><i class="fa fa-trash-o"></i></a>
                                                </form>
                                            </td>
                                            <td>$<span id="prod1Unit">54.00</span></td>
                                            <td>$<span id="prod1Total">54.00</span></td>
                                        </tr>
                                        <tr>
                                            <td><img src="https://via.placeholder.com/400x200/87CEFA/000000" class="img-cart"></td>
                                            <td><strong>Product 2</strong>
                                                <p>Size : M</p>
                                            </td>
                                            <td>
                                                <form class="form-inline">
                                                    <input class="form-control" type="number" value="1" id="prod2Qtd" min="1" max="99" onchange="CalcularProd('prod2Qtd', 'prod2Unit', 'prod2Total')">
                                                    <a href="#" class="btn btn-primary" rel="tooltip"><i class="fa fa-trash-o"></i></a>
                                                </form>
                                            </td>
                                            <td>$<span id="prod2Unit">16.00</span></td>
                                            <td>$<span id="prod2Total">16.00</td></span>
                                        </tr>
                                        <tr>
                                            <td colspan="6">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Total Products</td>
                                            <td>$<span id="totais">70.00</span></td>
                                            </form>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right">Total Shipping</td>
                                            <td>$2.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="text-right"><strong>Total</strong></td>
                                            <td>$<span>72.00</span></td>
                                        </tr>
                                    </tbody>
                                    <t>
                                </table>
                                <!-- Campos de Cliente-->
                                <form>
                                    <div class="mb-3">
                                        <label for="text" class="form-label">First Name</label>
                                        <input type="text" class="form-control" id="buyerFirstName" value="Anderson">
                                    </div>
                                    <div class="mb-3">
                                        <label for="text" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="buyerLastName" value="Souza">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control" id="buyerEmail" aria-describedby="emailHelp" value="andersonbuyer@paypal.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="number" class="form-label">Phone Number</label>
                                        <input type="tel" class="form-control" id="buyerPhone">
                                    </div>
                                    <div>
                                        <label for="address" class="form-label">Address</label>
                                        <input type="tel" class="form-control" id="buyerAddres">
                                    </div>
                                    <div>
                                        <label for="Country" class="form-label">Country</label>
                                        <input type="country" class="form-control" id="buyerCountry" aria-describedby="PhoneHelp" value="">
                                    </div>
                                    <div>
                                        <label for="State" class="form-label">State</label>
                                        <input type="" class="form-control" id="buyerState" aria-describedby="StateHelp" value="">
                                    </div>
                                    <div>
                                        <label for="ZipCode" class="form-label">ZipCode</label>
                                        <input type="number" class="form-control" id="buyerNumber" aria-describedby="" value="01203000">
                                    </div>
                                    <div>
                                        <label for="Street" class="form-label">Street</label>
                                        <input type="tel" class="form-control" id="buyerCountry" aria-describedby="PhoneHelp" value="">
                                    </div>
                                </form>
                                <!--utilizando br para pular linha-->
                                <br>
                                <center>
                                    <!--Fim campos de cliente -->

                                    <!-- botão Paypal -->
                                    <!-- Set up a container element for the button -->
                                    <div id="paypal-button-container"></div>

                                    <!-- Include the PayPal JavaScript SDK -->
                                    <script src="https://www.paypal.com/sdk/js?client-id=AUGmAdOyjusVsx_rh4vhf0P-zaAE1S2HpFH9u9F8SMfQNS6EFDrG9C5mkL7gfgCyTbgeSf621VRgZRSe&currency=USD"></script>

                                    <script>
                                        // Render the PayPal button into #paypal-button-container
                                        var idOrder;
                                        var aToken;
                                       
                                        paypal.Buttons({
                                            createOrder: async () => {
                                                var response = await fetch("./phps/aTokenCreate.php")
                                                aToken = await response.text();
                                                response = await fetch("./phps/createOrder.php?atoken=" + aToken);
                                                idOrder = await response.text()
                                                return idOrder;
                                            },
                                             onApprove: async () => {
                                                const response = await fetch("./phps/captureOrder.php?atoken=" + aToken + "&idOrder=" + idOrder);
                                                const data = await response.text();
                                                window.location.href="./Thankyou.php?TransactionId=" + data;
                                            }
                                        }).render('#paypal-button-container');
                                    </script>
                                    <!--fim codigo paypal-->
                                </center>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style type="text/css">
        .img-cart {
            display: block;
            max-width: 50px;
            height: auto;
            margin-left: auto;
            margin-right: auto;
        }

        table tr td {
            border: 1px solid #FFFFFF;
        }

        table tr th {
            background: #eee;
        }

        .panel-shadow {
            box-shadow: rgba(0, 0, 0, 0.3) 7px 7px 7px;
        }
    </style>

    <script type="text/javascript">
    </script>
</body>

</html>