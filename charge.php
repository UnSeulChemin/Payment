<?php

require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_51NsTx2LuOR7BT49XMjL0Pdg9rH8gbXBEh6oiyvd9g7IxXeJC9MOcnN7hifbu6pHtmJ2C7Ng9A7BaJXjZpZDigyV800uT07aht2');

$response = ['payment' => 'error', 'amount' => 0];

if (isset($_POST['stripeToken'], $_POST['amount'], $_POST['firstname'], $_POST['lastname']))
{
    $token = $_POST['stripeToken'];
    $amount = $_POST['amount'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    if ($amount > 0)
    {
         // passer en centime
        $amount = $amount * 100;

        try
        {
            $charge = \Stripe\Charge::create(
                [
                    'amount' => $amount,
                    'currency' => 'eur',
                    'description' => 'Payment test',
                    'source' => $token,
                    'metadata' => [
                        'firstname' => $firstname,
                        'lastname' => $lastname
                    ]
                ]
            );

            $response['message'] ='success';
            $response['amount'] = $amount / 100;

            // BDD ou Redirect
            echo 'Paiement test réussie';
        }
        
        catch (\Stripe\Exception\CardException $e)
        {
            $response['message'] = $e->getMessage();
        }

        catch (Exception $e)
        {
            $response['message'] = $e->getMessage();
        }
    }
}

echo json_encode($response);

?>
