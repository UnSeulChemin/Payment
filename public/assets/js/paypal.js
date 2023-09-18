paypal.Buttons({

    // order
    createOrder: function(data, actions)
    {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '0.01'
                }
            }]
        });
    },

    // approve
    onApprove: function(data, actions)
    {
        return actions.order.capture().then(function(details)
        {
            alert('Transcation done : ' +details.payer.name.given_name);
        })
    },

    // error
    onError: function(e)
    {
        console.error('Payment error :', e);
        alert('Payment failed.'); 
    }   

}).render("#paypal-button-container");
