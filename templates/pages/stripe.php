<?php $title = "Stripe"; ?>

<?php $script = '<script src="public/assets/js/stripe.js"></script>'; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div>
            <h2>Payment Stripe</h2>
            <p>Payment for Stripe</p>
        </div>

    </section>

    <section>

        <form action="charge" method="post" id="payment-form">

            <div>
                <input type="text" name="firstname" placeholder="Prénom" required>
            </div>

            <div>
                <input type="text" name="lastname" placeholder="Nom" required>
            </div>

            <input type="hidden" name="amount" value="10">

            <div id="card-element"></div>

            <div id="card-error" role="alert"></div>

            <button type="submit">Payer</button>

        </form>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
