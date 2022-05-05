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
    <?php foreach ($Articles as $Article) { ?>
        <div class="product">
            <div class="product-img">
                <img src="./images/<?= $Article->ART_IMG ?>" alt="">
            </div>
            <div class="product-info">
                <h3><?= $Article->ART_NAME ?></h3>
                <p><?= $Article->ART_DESCRIPTION ?></p>
                <p>Price: <?= $Article->ART_PRIX_HT ?>€</p>
                <p>Quantity: <?= $Article->ART_QTT ?></p>
                <p>
                    <a href="product.php?id=<?= $Article->ART_ID ?>">
                        <button class="btn">Buy</button>
                    </a>
                </p>
            </div>
        </div>
    <?php } ?>
</body>

</html>