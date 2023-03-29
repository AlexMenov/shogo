<?php


class Catalog
{
    private $conn;
    public $products;

    public function __construct ($conn) {
        $this->conn = $conn;
    }

    public function get_catalog()
    {
        $sql = "SELECT * FROM product";
        $query = mysqli_query($this->conn, $sql);
        $this->products = $query ? mysqli_fetch_all($query, MYSQLI_ASSOC) : die("Ошибка получения списка товаров");
        mysqli_close($this->conn);
    }
}