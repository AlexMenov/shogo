<?php

class Product
{
    private $conn;
    public $product;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function get_product($id)
    {
        $sql = "SELECT * FROM `product` WHERE `id` = $id";
        $query = mysqli_query($this->conn, $sql);
        $this->product = mysqli_fetch_all($query, MYSQLI_ASSOC) ?: die("Ошибка получения данных товара");
        mysqli_close($this->conn);
    }
}