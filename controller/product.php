<?php
$ArticleId = $_GET['id'];
$article = getArticle($ArticleId);
require_once './views/product_view.php';
