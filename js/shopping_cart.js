//Essa função calcular o preço total do Produto multiplicando o valor unitário com a quantidaoe
//Depois chama a função para calcular o total dos produtos na tela (funcção "totalProds").
function CalcularProd(qtdProd, unitProd, prodTotal) {
    var prod1Qtd = document.getElementById(qtdProd).value;
    var prod1Unit = document.getElementById(unitProd).innerHTML;
    document.getElementById(prodTotal).innerHTML = (prod1Qtd * prod1Unit).toFixed(2);
    totalProds();
}

function totalProds() {

    document.getElementById("totais").innerHTML = (+document.getElementById("prod1Total").innerHTML +
        +document.getElementById("prod2Total").innerHTML).toFixed(2);
}