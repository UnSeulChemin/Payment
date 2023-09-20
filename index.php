<?php

// require
require_once('src/Controllers/HomepageController.php');
require_once('src/Controllers/PaypalController.php');
require_once('src/Controllers/StripeController.php');

// router
try
{
	if (isset($_GET['page']) && !empty($_GET['page']))
	{
        if ($_GET['page'] === 'paypal')
        {
			paypal();
        }

        else if ($_GET['page'] === 'stripe')
        {
			stripe();
        }

		else
		{
			throw new Exception("La page que vous recherchez n'existe pas.");
		}
	}

	else
	{
		homepage();
	}
}

catch (Exception $exception)
{
	header('Location: ./');
}
