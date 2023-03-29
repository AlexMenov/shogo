<?php
require_once "../vendor/autoload.php";
$db = new DbConnection("products");
$conn = $db->connect_db();
$pr = new Product($conn);
$id = $_GET['id'];
$pr->get_product($id);

$product = $pr->product;

?>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<div class="product-card">
    <div class="product-image">
        <img src="<?= $product[0]['url']?>" alt="<?= $product[0]['name']?>">
    </div>
    <div class="product-details">
        <h2 class="product-name"><?= $product[0]['name']?></h2>
        <div class="product-price"><?= $product[0]['price']?> RUB</div>
        <p class="product-description"><?= $product[0]['content']?></p>
        <div class="product-meta">
            <span class="product-articul">Артикул: <?= $product[0]['articul']?></span>
            <span class="product-remarks"><?= $product[0]['notice']?></span>
        </div>
    </div>
</div>