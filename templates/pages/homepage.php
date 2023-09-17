<?php $title = "Homepage"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">
        
        <div>
            <h2>Payment Checkout Demo</h2>
            <p>Payment Checkout Paypal & Stripe</p>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
