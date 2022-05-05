<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/main.css">
    <link rel="stylesheet" href="./style/product.css">
    <link rel="stylesheet" href="./style/navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Dashboard</title>
</head>

<body>
<?php include './include/navbar.php'; ?>

    <!-- Print data -->

    <div class="container">
        <div class="product-info">
        <p> NOMBRE DE VENTE AUJOURD'HUI : <?= $today ?> </p>
        <p> NOMBRE DE VENTE HIER : <?= $yesterday ?> </p>    
                        
</body>
</html>