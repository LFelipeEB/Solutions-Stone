apiKey = $("#apikey").attr('data-api');
recebiveis = [];

function makeTransaction() {
    pagarme.client.connect({api_key: apiKey})
        .then(client => client.transactions.create({
            'amount': $("#amount_card").val()*100,
            'card_number': $("#number_card").val(),
            'card_cvv': $("#cvv_card").val(),
            'card_expiration_date': $("#date_card").val(),
            'card_holder_name': $("#name_card").val(),
            'split_rules':[
                {
                    'recipient_id': $("#95percents").val(),
                    'percentage': 95,
                },
                {
                    'recipient_id': $("#5percents").val(),
                    'percentage': 5,
                },
            ]
        }))
        .then(transaction => dispatchEventPagarme(transaction));
}

function dispatchEventPagarme(transaction) {
    var event = new CustomEvent('EventPagarme', {'detail': transaction.id });
    window.dispatchEvent(event);
}

function getRecebivel(tid) {
    pagarme.client.connect({ api_key: apiKey })
        .then(client => client.payables.find({
            transactionId: tid
        }))
        .then(payables => showPayables(payables))
}

function buildPaybles() {
    pagarme.client.connect({ api_key: apiKey })
        .then(client => client.recipients.all())
        .then(recipients => addSelectsPayables(recipients));
}

function addSelectsPayables(recipients) {

    recipients.forEach(function (value) {
        var optionRecepient ='<option value="'+value.id+'">'+value.bank_account.legal_name+'</option>\n';
        $("#95percents").append(optionRecepient);
        $("#5percents").append(optionRecepient);
        recebiveis.push(value);
    });


    $('select').formSelect();
}