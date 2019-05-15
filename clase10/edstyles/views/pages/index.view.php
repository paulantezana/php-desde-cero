<?php include APP_PATH . '/views/partials/head.view.php' ?>
<?php include APP_PATH . '/views/partials/header.view.php' ?>

<div class="l-slider">
    <div class="ed-container">
        <div class="ed-item"><img src="<?= PUBLIC_PATH ?>/img/banner.jpg"/></div>
    </div>
</div>

<div class="l-main ed-container">
    <div class="ed-item">
        <h2 class="productos__title">Productos destacados</h2>
        <div class="productos-container">
            <div class="productos">
                <div class="producto">
                    <h3 class="producto__title">Polo ED Clásico</h3><a href="polo-ed2.html"><img src="<?= PUBLIC_PATH ?>/img/ed2.jpg" class="producto__img"/></a>
                    <p class="producto__price icon-cart">$12.00</p>
                </div>
                <div class="producto">
                    <h3 class="producto__title">Polo ED Standard</h3><a href="polo-ed1.html"><img src="<?= PUBLIC_PATH ?>/img/ed1.jpg" class="producto__img"/></a>
                    <p class="producto__price icon-cart">$12.00</p>
                </div>
                <div class="producto">
                    <h3 class="producto__title">Polo CSS Desde Cero</h3><a href="polo-css.html"><img src="<?= PUBLIC_PATH ?>/img/css.jpg" class="producto__img"/></a>
                    <p class="producto__price icon-cart">$12.00</p>
                </div>
                <div class="producto">
                    <h3 class="producto__title">Polo HTML5 Desde Cero</h3><a href="polo-html.html"><img src="<?= PUBLIC_PATH ?>/img/html.jpg" class="producto__img"/></a>
                    <p class="producto__price icon-cart">$12.00</p>
                </div>
                <div class="producto">
                    <h3 class="producto__title">Polo JavaScript Desde Cero</h3><a href="polo-js.html"><img src="<?= PUBLIC_PATH ?>/img/js.jpg" class="producto__img"/></a>
                    <p class="producto__price icon-cart">$12.00</p>
                </div>
                <div class="producto">
                    <h3 class="producto__title">Polo PHP Desde Cero</h3><a href="polo-php.html"><img src="<?= PUBLIC_PATH ?>/img/php.jpg" class="producto__img"/></a>
                    <p class="producto__price icon-cart">$12.00</p>
                </div>
            </div>
        </div>
        <?php include APP_PATH . '/views/partials/social.view.php' ?>
    </div>
</div>

<?php include APP_PATH . '/views/partials/foot.view.php' ?>