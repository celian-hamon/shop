<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Product</title>
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/product.css">
    <link rel="stylesheet" href="./style/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <?php include './include/navbar.php'; ?>
    <?php if ($article != null) { ?>
        <div class="container">
            <div class="product-info">
                <h1><?= $article->ART_NAME ?></h1>
                <p><?= $article->ART_DESCRIPTION ?></p>
                </p>
            </div>
            <img src="https://m.media-amazon.com/images/I/51c35Tx017L._AC_SX679_.jpg" alt="product" class="product">
            <div class="product-form">
                <p>
                    <span><?= $article->ART_PRIX_TTC ?>$</span>
                </p>
                <form>
                    <div class="form-field">
                        <i class="fas fa-tags"></i>
                        <input type="number" min="1" max="<?= $article->ART_QTT ?>" value="1">
                    </div>
                    <button id="submit-button" type="submit"><i class="fas fa-cart-shopping"></i></button>
                </form>
            </div>
        </div>

    <?php } else { ?>
        <div class="container">
            <div class="product-info">
                <h1>Product not found</h1>
            </div>
        </div>
    <?php } ?>
</body>

</html>