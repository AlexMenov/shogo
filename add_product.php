<?php require "controllers/check_logged_in.php"; ?>

<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>

<?php require 'templates/logout.php' ?>

<form method="POST" action="controllers/adder.php" class="product-form">
    <label for="position_product_id">Position:</label>
    <input type="number" name="position" class="form-input" value="<?= rand(1111111, 99999999)?>">

    <label for="url">URL:</label>
    <input type="text" name="url" class="form-input" required>

    <label for="name">Name:</label>
    <input type="text" name="name" class="form-input" required>

    <label for="articul">Articul:</label>
    <input type="text" name="articul" class="form-input" required>

    <label for="price">Price:</label>
    <input type="number" name="price" class="form-input" required>

    <label for="price_old">Old Price:</label>
    <input type="number" name="price_old" class="form-input" value="0">

    <label for="notice">Notice:</label>
    <input type="text" name="notice" class="form-input" required>

    <label for="content">Content:</label>
    <textarea name="content" class="form-input" required></textarea>

    <label for="visible">Visible:</label>
    <input type="number" name="visible" class="form-input" value="1">

    <label for="type">Type:</label>
    <input type="text" name="type" class="form-input" value="smartphones" required>

    <label for="section">Section:</label>
    <input type="text" name="section" class="form-input" value="electronics" required>

    <label for="currency_id">Currency ID:</label>
    <input type="number" name="currency_id" class="form-input" value="643" required>

    <label for="params">Params</label>
    <input type="text" name="params" class="form-input" value="color: ['blue', 'red']" required>

    <input type="submit" value="Добавить товар" class="form-submit">
</form>
