<?php
require_once "vendor/autoload.php";

$db = new DbConnection('products');
$conn = $db->connect_db();

$catalog = new Catalog($conn);
$catalog->get_catalog();
$products = $catalog->products;

$_GET['get_all'] === 'yes' ?
    $products = array_slice($products, 0) :
    $products = array_slice($products, 0, 5);

?>

<head>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<div style="display: flex; flex-direction: column; align-items: center">

    <table class="product-table">
        <thead>
        <tr>
            <th class="product-id">id</th>
            <th class="product-position">position</th>
            <th class="product-url">url</th>
            <th class="product-name">name</th>
            <th class="product-articul">articul</th>
            <th class="product-price">price</th>
            <th class="product-currency">currency_id</th>
            <th class="product-price-old">price_old</th>
            <th class="product-notice">notice</th>
            <th class="product-content">content</th>
            <th class="product-visible">visible</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $item): ?>
            <tr>
                <td class="product-id"><a href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['id'] ?></a>
                </td>
                <td class="product-position"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['position'] ?></a></td>
                <td class="product-url"><a href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['url'] ?></a>
                </td>
                <td class="product-name"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['name'] ?></a></td>
                <td class="product-articul"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['articul'] ?></a></td>
                <td class="product-price"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['price'] ?></a></td>
                <td class="product-currency"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['currency_id'] ?></a></td>
                <td class="product-price-old"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['price_old'] ?></a></td>
                <td class="product-notice"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['notice'] ?></a></td>
                <td class="product-content"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['content'] ?></a></td>
                <td class="product-visible"><a
                            href="../templates/product.php?id=<?= $item['id'] ?>"><?= $item['visible'] ?></a></td>
            </tr>
        <? endforeach; ?>
        </tbody>
    </table>

    <a href="?get_all=yes"
       style="display: flex; justify-content: center;background-color: tomato; border-radius: 15px; width: 150px; height: 20px ">Загрузить
        всё</a>

</div>