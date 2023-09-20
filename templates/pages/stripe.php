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

        <form action="charge.php" method="post" id="payment-form">

            <div>
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" required>
            </div>

            <div>
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname" required>
            </div>

            <input type="hidden" name="amount" value="10.00">

            <div id="card-element">

            </div>

            <div id="card-error" role="alert">

            </div>

            <button type="submit">Payer</button>

        </form>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
