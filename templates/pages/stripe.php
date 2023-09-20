<?php $title = "Stripe"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div>
            <h2>Payment Stripe</h2>
            <p>Payment for Stripe</p>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
