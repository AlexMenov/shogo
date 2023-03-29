<?php

require_once "../vendor/autoload.php";

$db = new DbConnection('products');
$conn = $db->connect_db();
$login = new Login();
$login->check_user($conn);

