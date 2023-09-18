<?php $title = "Paypal"; ?>

<?php ob_start(); ?>
<main>

    <section class="section-default">

        <div>
            <h2>Payment Paypal</h2>
            <p>Payment for Paypal</p>
        </div>

    </section>

    <section>

        <div>
            <div id="paypal-button-container"></div>

            <script src="https://www.paypal.com/sdk/js?client-id=AcgumP5G-PD3ndVrPUd5SM19OXXsfQGPOMiMIfIZuDvBInA26IjVTuz6z1w2QiemoFWOlt4obbpaKckO&currency=EUR"></script>
        </div>

    </section>

</main>
<?php $content = ob_get_clean(); ?>

<?php require('templates/base.php') ?>
