<?php

require_once '../vendor/autoload.php';
$login = new Login();
$login->check_logged_in();
$db = new DbConnection('products');
$conn = $db->connect_db();
$adder = new ProductAdder();
$adder->set_connection($conn);
$adder->add_product();
