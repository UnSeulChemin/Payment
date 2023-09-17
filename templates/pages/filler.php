<?php $title = "Paypal"; ?>

<?php ob_start(); ?>
<main>

    <section>

        <div>
            <h2>Paypal Checkout</h2>
            <p>Paypal Checkout Page.</p>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
