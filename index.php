<?php
require_once 'init.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Solutions</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/lib/animate.css" >
    <link rel="stylesheet" href="/css/main.css" >

</head>
<body>

<?php include 'html/nav.html'?>

<section class="container" id="card-container">
    <div class="row">
        <div class="col s6" id="credit_card_form">
            <?php include 'html/card.html'?>
        </div>
        <div class="col s6" id="credit_card_img">
            <img src="images/stock-card.png" class="img-card">
        </div>
    </div>
</section>

<section class="container hide" id="processando">
    <div class="center-align">
        <h3 class="animated infinite flash">Procesando ...</h3>
    </div>
</section>

<section class="container hide" id="responseTransaction">
    <div class="center-align"></div>
    <a href="/" class="btn btn-primary mt">Efetuar Nova Transação</a>
</section>



<span data-api="<?= getenv('API_KEY') ?>" id="apikey"></span>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="/js/lib/visibility.js"></script>
<script src="https://assets.pagar.me/pagarme-js/3.1/pagarme.min.js"></script>
<script src="/js/pagarme.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
