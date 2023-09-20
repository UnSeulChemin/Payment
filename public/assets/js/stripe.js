let stripe = Stripe('KEY_PUBLIC');
let elements = stripe.elements();

let card = elements.create('card');
card.mount('#card-element');

card.addEventListener('change', function(event)
{
    let displayError = document.getElementById('card-error');
    if (event.error)
    {
        displayError.textContent = event.error.message;
    }

    else
    {
        displayError.textContent = '';
    }
})
