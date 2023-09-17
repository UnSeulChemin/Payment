<?php $title = "Paypal"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div>
            <h2>Payment Paypal</h2>
            <p>Payment for Paypal</p>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
