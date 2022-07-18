<!DOCTYPE html>
<html lang="PT_BR">

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
    <script src="https://www.paypalobjects.com/webstatic/ppplusdcc/ppplusdcc.min.js" type="text/javascript"></script>


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
                        <div id="pBody">
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
                                                <td>$<span id="shipping">2.00</span></td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Total</strong></td>
                                                <td>$<span id="vlrTotal">72.00</span></td>
                                            </tr>
                                </div>
                                </tbody>
                                <t>
                                    </table>

                                    <!-- Campos de Cliente-->
                                    <hr color="red">

                                    <form class='form2'>
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
                                            <span style="color: red !important; display: inline; float: none;">*</span>
                                            <input type="number" id="buyerPhone" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required placeholder="123-456-7890">
                                        </div>
                                        <div>
                                            <hr color="red">
                                            <label for="address" class="Address-Tilt">Address</label>
                                        </div>
                                        <div>
                                            <label for="Country" class="form-label">Country</label>
                                            <span style="color: red !important; display: inline; float: none;">*</span>

                                            <select id="buyerCountry" name="country">
                                                <option id="EUA" value="US">United States</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="State" class="form-label">State</label>
                                            <span style="color: red !important; display: inline; float: none;">*</span>
                                            <select id=BuyerState>
                                                <option id="CO" value="CO">Colorado</option>
                                                <!-- <option id="AL" value="AL">Alabama</option>
                                            <option id="AK" value="AK">Alaska</option>
                                            <option id="AZ" value="AZ">Arizona</option>
                                            <option id="AR" value="AR">Arkansas</option>
                                            <option id="Ca" value="CA">California</option>
                                            <option id="CT" value="CT">Connecticut</option>
                                            <option id="DE" value="DE">Delaware</option>
                                            <option id="DC" value="DC">District Of Columbia</option>
                                            <option id="FL" value="FL">Florida</option>
                                            <option id="GA" value="GA">Georgia</option>
                                            <option id="HI" value="HI">Hawaii</option>
                                            <option id="ID" value="ID">Idaho</option>
                                            <option id="IL" value="IL">Illinois</option>
                                            <option id="IN" value="IN">Indiana</option>
                                            <option id="IA" value="IA">Iowa</option>
                                            <option id="KS" value="KS">Kansas</option>
                                            <option id="KY" value="KY">Kentucky</option>
                                            <option id="LA" value="LA">Louisiana</option>
                                            <option id="ME" value="ME">Maine</option>
                                            <option id="MD" value="MD">Maryland</option>
                                            <option id="MA" value="MA">Massachusetts</option>
                                            <option id="MI" value="MI">Michigan</option>
                                            <option id="MN" value="MN">Minnesota</option>
                                            <option id="MS" value="MS">Mississippi</option>
                                            <option id="MO" value="MO">Missouri</option>
                                            <option id="MT" value="MT">Montana</option>
                                            <option id="NE" value="NE">Nebraska</option>
                                            <option id="NV" value="NV">Nevada</option>
                                            <option id="NH" value="NH">New Hampshire</option>
                                            <option id="NJ" value="NJ">New Jersey</option>
                                            <option id="NM" value="NM">New Mexico</option>
                                            <option id="NY" value="NY">New York</option>
                                            <option id="NC" value="NC">North Carolina</option>
                                            <option id="ND" value="ND">North Dakota</option>
                                            <option id="OH" value="OH">Ohio</option>
                                            <option id="OK" value="OK">Oklahoma</option>
                                            <option id="OR" value="OR">Oregon</option>
                                            <option id="PA" value="PA">Pennsylvania</option>
                                            <option id="RI" value="RI">Rhode Island</option>
                                            <option id="SC" value="SC">South Carolina</option>
                                            <option id="SD" value="SD">South Dakota</option>
                                            <option id="TN" value="TN">Tennessee</option>
                                            <option id="TX" value="TX">Texas</option>
                                            <option id="UT" value="UT">Utah</option>
                                            <option id="VT" value="VT">Vermont</option>
                                            <option id="VA" value="VA">Virginia</option>
                                            <option id="WA" value="WA">Washington</option>
                                            <option id="WV" value="WV">West Virginia</option>
                                            <option id="WI" value="WI">Wisconsin</option>
                                            <option id="WY" value="WY">Wyoming</option> -->
                                            </select>
                                        </div>
                                        <div>
                                            <label for="ZipCode" class="form-label">ZipCode</label>
                                            <span style="color: red !important; display: inline; float: none;">*</span>
                                            <input id="BuyerZip" name="zip" type="text" inputmode="numeric" pattern="^(?(^00000(|-0000))|(\d{5}(|-\d{4})))$" value="80440">
                                        </div>
                                        <div>
                                            <label for="Street" class="form-label">Street</label>
                                            <span style="color: red !important; display: inline; float: none;">*</span>
                                            <input id="buyerstreet" name="story" value="610 Front St">
                                            </inout>
                                        </div>
                                        <div>
                                            <label for="Street" class="form-label">City</label>
                                            <span style="color: red !important; display: inline; float: none;">*</span>
                                            <input id="buyerCity" name="story" value="South Park">
                                        </div>
                                        <br>

                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <button class="btn btn-primary col-6" data-toggle="collapse" data-target="#expCheckout"> Express Checkout </button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary col-2" data-toggle="collapse" data-target="#reference">Reference Transaction</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary col-2" data-toggle="collapse" data-target="#ppPlus">PayPal Plus</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary col-2" data-toggle="collapse" data-target="#btDrop">BT Drop-in</button>
                                                </td>
                                                <td>
                                                    <button class="btn btn-primary col-2" data-toggle="collapse" data-target="#btHosted">BT hosted Fields</button>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--Fim campos de cliente -->
                                        <br>
                                        <!-- Express Checkout -->
                                        <hr color="red">
                                        <!-- Set up a container element for the button -->

                                        <!--Botão Next após dados do comprador -->
                                        <div id="expCheckout" class="collapse">

                                            <div id="paypal-button-container"></div>


                                            <!-- Include the PayPal JavaScript SDK -->
                                            <script src="https://www.paypal.com/sdk/js?client-id=AUGmAdOyjusVsx_rh4vhf0P-zaAE1S2HpFH9u9F8SMfQNS6EFDrG9C5mkL7gfgCyTbgeSf621VRgZRSe&currency=BRL"></script>

                                            <script>
                                                // Render the PayPal button into #paypal-button-container
                                                var idOrder;
                                                var aToken;

                                                paypal.Buttons({
                                                    createOrder: async () => {
                                                        var buyerInfo = CriaPessoa();
                                                        var response = await fetch("./EC/aTokenCreate.php")
                                                        aToken = await response.text();
                                                        response = await fetch("./EC/createOrder.php?atoken=" + aToken + "&buyerInfo=" + buyerInfo);
                                                        idOrder = await response.text()
                                                        console.log(idOrder);
                                                        return idOrder;
                                                    },
                                                    onApprove: async () => {
                                                        const response = await fetch("./EC/captureOrder.php?atoken=" + aToken + "&idOrder=" + idOrder);
                                                        const data = await response.text();
                                                        window.location.href = "./Thankyou.php?TransactionId=" + data;
                                                    }
                                                }).render('#paypal-button-container');
                                            </script>
                                        </div>
                                        <!--fim do Express Checkout-->

                                        <!--BOTÕES COLLAPSE -->
                                        <div id="reference" class="collapse">
                                            Reference transaction
                                        </div>
                                        <div id="ppPlus" class="collapse" onclick="ppplusDiv">
                                            PayPal Plus

                                            <div id="ppplusDiv"></div>

                                            <script type="application/javascript">
                                                var url = <?php print_r(strval(require_once('./Plus/CreatePayment.php'))); ?>;
                                                //console.table(url);
                                                var rememberedCards = "customerRememberedCardHash";
                                                //var installments = null;

                                                var ppp = PAYPAL.apps.PPP({
                                                    "approvalUrl": url.links[1].href,
                                                    "placeholder": "ppplusDiv",
                                                    "mode": "sandbox",
                                                    "payerFirstName": "John",
                                                    "payerLastName": "Doe",
                                                    "payerPhone": "5511954854582",
                                                    "payerEmail": "johndoe@email.com",
                                                    "payerTaxId": "19850755806",
                                                    "payerTaxIdType": "BR_CPF",
                                                    "language": "pt_BR",
                                                    "country": "BR",
                                                    "rememberedCards": rememberedCards,
                                                    "enableContinue": "continueButton",
                                                    "iframeHeight": "450",
                                                    "onContinue": () => {
                                                        $.ajax({
                                                            url: "./Plus/paymentExecution.php",
                                                            type: "POST",
                                                            data: {
                                                                field1: payerId, // payerid vai aqui,
                                                                field2: url.links[2].href
                                                            },
                                                            success: function(result) {
                                                                //console.log(typeof(result)); //->String
                                                                console.log(result);
                                                                //console.table(result);
                                                                result = JSON.parse(result);
                                                                //console.log(typeof(result)); //->Object
                                                                console.table(result);
                                                                //console.log(result.id);
                                                                //console.table(result.id);
                                                                //console.table(result.transactions);
                                                                //console.table(result.transactions[0].related_resources[0].sale.id);
                                                                alert("Pagamento Concluído");
                                                                window.location.href = "http://localhost/Plus%20Project/PlusProject/SucessPayment.php?paymentId=" + result.transactions[0].related_resources[0].sale.id;
                                                            },
                                                            error: function() {
                                                                //console.log(error);
                                                                alert("function Error");
                                                                window.location.href = "http://localhost/Plus%20Project/PlusProject/CancelPayment.html"
                                                            }
                                                        })
                                                    },
                                                });

                                                window.addEventListener("message", messageListener, false);

                                                function messageListener(event) {
                                                    var data = JSON.parse(event.data);
                                                    //console.table(data);
                                                    if (data.action == "checkout") {
                                                        payerId = data.result.payer.payer_info.payer_id;
                                                        //console.log(data.result.payer.payer_info.payer_id);
                                                    } else {}
                                                };
                                            </script>
                                            <br>
                                            <button type="submit" id="continueButton" class="btn btn-lg btn-primary btn-block" onclick="ppp.doContinue(); return false ;">
                                                Checkout
                                            </button>

                                        </div>
                                        <div id="btDrop" class="collapse">
                                            Braintree Drop-in
                                        </div>
                                        <div id="btHosted" class="collapse">
                                            Braintree Hosted Fields
                                        </div>

                            </div> <!-- div body-->
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
        function CriaPessoa() {
            const Pessoa = [];
            Pessoa.push(document.getElementById("buyerFirstName").value); //indice 0
            Pessoa.push(document.getElementById("buyerLastName").value); //indice 1
            Pessoa.push(document.getElementById("buyerEmail").value); //indice 2
            Pessoa.push(document.getElementById("buyerPhone").value); //indice 3
            Pessoa.push(document.getElementById("buyerCountry").value); //indice 4 
            Pessoa.push(document.getElementById("BuyerState").value); //indice 5 
            Pessoa.push(document.getElementById("BuyerZip").value); //indice 6
            Pessoa.push(document.getElementById("buyerstreet").value); //indice 7
            Pessoa.push(document.getElementById("vlrTotal").innerHTML); //indice 8
            Pessoa.push(document.getElementById("totais").innerHTML); //indice 9
            Pessoa.push(document.getElementById("shipping").innerHTML); //indice 10
            Pessoa.push(document.getElementById("prod1Qtd").value); //indice 11
            Pessoa.push(document.getElementById("prod2Qtd").value); //indice 12
            Pessoa.push(document.getElementById("buyerCity").value); //indice 13
            return Pessoa;
        }
    </script>

</body>

</html>