<head>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>

<?php require 'templates/logout.php' ?>

<div class="login-form-wrapper">
    <form class="login-form" action="controllers/login.php" method="post">
        <h2>Вход в систему</h2>
        <?php if (!empty($error_message)) { ?>
            <p class="error-message"><?= $error_message ?></p>
        <?php } ?>
        <label for="username">Логин:</label>
        <input type="text" id="username" name="username" value="menovlex@mail.ru" required>
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" value="menovlex123456" required>
        <button type="submit">Войти</button>
    </form>
</div>
