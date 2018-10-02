pagarme.client.connect({ api_key: apiKey })
    .then(client => client.recipients.all())
    .then(recipients => buildHtmlPayables(recipients));

function buildHtmlPayables(recipients) {
    console.log(recipients);

    recipients.forEach(function (value, key) {
        addPayable(value);
    });

}

function addPayable(value){
    console.log(value);
    var account = value.bank_account;
    var card_payable ='    <div class="col s12 m5">\n' +
        '      <div class="card blue-grey darken-1">\n' +
        '        <div class="card-content white-text">\n' +
        '          <span class="card-title">'+account.legal_name+'</span>\n' +
        '          <p>'+account.document_type.toUpperCase()+': '+account.document_number+'</p>\n' +
        '          <p>Banco: '+account.bank_code+'</p>\n' +
        '          <p>Agência: '+account.agencia+'-'+account.agencia_dv+'</p>\n' +
        '          <p>Conta: '+account.conta+'-'+account.conta_dv+'</p>\n' +
        '        </div>\n' +
        '      </div>\n' +
        '    </div>';

    $("#payable_cards").append(card_payable)
}

$("#confirm-recebedor").click(function () {
    makePaiable();
    M.toast({html: 'Aguarde estamos processsando as informações.', classes: 'rounded'});
    $("#makePayable").addClass('fadeOutUp');

    setTimeout(function () {
        $("#makePayable").addClass('hide');
    }, 2000);
});


function makePaiable() {
    pagarme.client.connect({ api_key: apiKey })
        .then(client => client.recipients.create({
            transfer_interval: 'daily',
            transfer_enabled: true,
            bank_account:{
                bank_code: $("#number_bank").val(),
                agencia: $("#agency_bank").val(),
                agencia_dv: $("#agency_dv_bank").val(),
                conta: $("#acount_bank").val(),
                conta_dv: $("#acount_dv_bank").val(),
                legal_name: $("#legal_name_bank").val(),
                document_number: $("#document_bank").val(),
                type: $("#type_bank").val(),
            }
        }))
        .then(recipient => addPayable(recipient))
}