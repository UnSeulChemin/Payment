<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<main>

    <section>
        
        <div>
            <h2>Payment Checkout</h2>
            <p>Paypal</p>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
