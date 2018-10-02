Visibility.onVisible(function () {
    setTimeout(function () {
        $("#card-container").removeClass('hide');
        $("#card-container").addClass('animated fadeInDown');
    },400);
});


$("#confirm-card").click(function () {

    M.toast({html: 'Aguarde estamos processsando as informações.', classes: 'rounded'});

    $("#card-container").addClass('fadeOutUp');

    setTimeout(function () {
        $("#card-container").addClass('hide');
    }, 2000);
    makeTransaction();

    $("#processando").removeClass('hide');

});

window.addEventListener('EventPagarme', function(event) {
    console.log(event);
    console.log('Consultando recebivel');
    getRecebivel(event.detail)
});

function showPayables(payables) {
    console.log(payables);

    payables.forEach(function (value, key) {
        var recipient = recebiveis.find(function (object){
            return object.id == value.recipient_id;
        });
        console.log(recipient);
        var card_payable ='<div class="col s12 m5">\n' +
            '      <div class="card blue-grey darken-1">\n' +
            '        <div class="card-content white-text">\n' +
            '          <span class="card-title">'+recipient.bank_account.legal_name+'</span>\n' +
            '          <p>Valor: '+parseFloat(value.amount/100).toFixed(2)+'</p>\n' +
            '          <p>Status: '+value.status+'</p>\n' +
            '        </div>\n' +
            '      </div>\n' +
            '    </div>';

        $("#responseTransaction").append(card_payable)
        $("#responseTransaction").removeClass('hide')
        $("#processando").addClass('hide')


    });
}

$(document).ready(function () {
    buildPaybles();

    $('select').formSelect();
});