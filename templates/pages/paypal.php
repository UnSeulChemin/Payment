<?php $title = "Paypal"; ?>

<?php $script = '<script src="public/assets/js/paypal.js"></script>'; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div>
            <h2>Payment Paypal</h2>
            <p>Payment for Paypal</p>
        </div>

    </section>

    <section>

        <div class="paypal-flex">
            <div id="paypal-button-container"></div>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
