<?php
require_once 'init.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Peelor - Recebedores</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/lib/animate.css" >
    <link rel="stylesheet" href="/css/main.css" >

</head>
<body>

<?php include 'html/nav.html'?>

<section class="container">
    <div class="col s12 right-align">
        <a id="makePayable" class="btn btn-primary modal-trigger" data-target="makePayable" href="#makePayable">
            <i class="fa fa-plus"></i> Cadastrar Novo Payable
        </a>

    </div>

    <div id="payable_cards" class="row">

    </div>
</section>

<section class="container hide" id="processando">
    <div class="center-align">
        <h3 class="animated infinite flash">Procesando ...</h3>
    </div>
</section>

<section class="container" >
    <div id="makePayable">
        <h2>Cadastrar novo recebível</h2>
        <form>
            <div class="row">

                <div class="input-field col s3">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="number_bank" type="text" class="validate" value="001">
                    <label for="number_bank">Codigo do Banco: </label>
                </div>
                <div class="input-field col s5">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="name_bank" type="text" class="validate" value="CONTA TESTE">
                    <label for="name_bank">Nome da Conta: </label>
                </div>
                <div class="input-field col s4">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="document_bank" type="text" class="validate" value="09823095620">
                    <label for="document_bank">Documento Atrelado a conta: </label>
                </div>
                <div class="input-field col s4">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="agency_bank" type="text" class="validate" value="03964">
                    <label for="agency_bank">Agencia: </label>
                </div>
                <div class="input-field col s2">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="agency_dv_bank" type="text" class="validate" value="4">
                    <label for="agency_dv_bank">Digito: </label>
                </div>
                <div class="input-field col s4">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="acount_bank" type="text" class="validate" value="21488">
                    <label for="acount_bank">Nº Conta: </label>
                </div>
                <div class="input-field col s2">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="acount_dv_bank" type="text" class="validate" value="4">
                    <label for="acount_dv_bank">Digito: </label>
                </div>

                <div class="input-field col s8">
                    <i class="fa fa-credit-card prefix"></i>
                    <input id="legal_name_bank" type="text" class="validate" value="LUIZ FELIPE EVARISTO BARBOSA">
                    <label for="legal_name_bank">Razão Social: </label>
                </div>
                <div class="input-field col s4">
                    <i class="fa fa-credit-card prefix"></i>
                    <select name="type_bank" id="type_bank">
                        <option value="" disabled selected>Tipo de Conta</option>
                        <option value="conta_corrente">Conta Corrente</option>
                        <option value="conta_poupanca">Conta Poupança</option>
                        <option value="conta_corrente_conjunta">Conta Corrente Conjunta</option>
                        <option value="conta_poupanca_conjunta">Conta Poupança Conjunta</option>
                    </select>
                    <label>Tipo de Conta</label>
                </div>

            </div>
            <div class="center-align">
                <button type="button" class="waves-effect waves-light btn btn-large btn-primary" id="confirm-recebedor">Efetuar Cobrança</button>
            </div>
        </form>
    </div>
</section>



<span data-api="<?= getenv('API_KEY') ?>" id="apikey"></span>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/js/lib/visibility.js"></script>
<script src="https://assets.pagar.me/pagarme-js/3.1/pagarme.min.js"></script>
<script src="/js/pagarme.js"></script>
<script src="/js/main.js"></script>
<script src="/js/build-payables.js"></script>
<script>
    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
</body>
</html>
