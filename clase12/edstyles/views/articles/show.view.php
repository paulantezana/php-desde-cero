<?php include APP_PATH . '/views/partials/head.view.php' ?>
<?php include APP_PATH . '/views/partials/header.view.php' ?>

    <div class="l-main ed-container">
        <div class="ed-item">
            <h1>Polo Escuela Digital Clásico</h1>
            <div class="ed-container product__page">
                <div class="ed-item tablet-50"><img src="<?= PUBLIC_PATH . '/img/' . $article->image ?>" class="product__page__img"/></div>
                <div class="ed-item tablet-50 product__page__description">
                    <p><?= $article->description ?></p>
                    <div class="ed-container product__page__data">

                        <div class="ed-item main-center">
                            <h3 class="product__page__size">
                                Precio: <span><?= $article->priceFloat ?> USD</span>
                            </h3>
                        </div>

                        <form class="ed-item main-center" name="_xclick" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                            <input type="hidden" name="cmd" value="_cart">
                            <input type="hidden" name="business" value="edstyles-colombia@outlook.com">
                            <input type="hidden" name="currency_code" value="USD">
                            <input type="hidden" name="item_name" value="<?= $article->name ?>">
                            <input type="hidden" name="amount" value="<?= $article->priceFloat ?>">
                            <?php //<input type="image" src="http://www.paypal.com/es_ES/i/btn/sc-but-01.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">?>
                            <input type="hidden" name="add" value="1">
                            <input type="hidden" name="charset" value="utf-8">
                            <input type="hidden" name="on0" value="Talla">

                            <?php if (!$article->sizes->isEmpty()): ?>
                                <div class="ed-item main-center">
                                    <h3 class="product__page__size">
                                        <label for="os0">Talla:</label>
                                        <select name="os0" id="os0">
                                            <?php foreach ($article->sizes as $size): ?>
                                                <option value="<?= $size->name ?>">
                                                    <?= $size->name ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </h3>
                                </div>
                            <?php endif; ?>

                            <button type="submit" class="boton icon-cart espacio product__page__buy">
                                Añadir al carrito
                            </button>
                        </form>

                        <div class="ed-item main-center product__page__share">
                            <div class="sociales"><a href="http://facebook.com" class="icon-facebook"></a><a
                                    href="http://twitter.com" class="icon-twitter"></a><a href="http://instagram.com"
                                                                                          class="icon-instagram"></a><a
                                    href="http://pinterest.com" class="icon-pinterest"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include APP_PATH . '/views/partials/foot.view.php' ?>