<?php

class DbConnection
{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database;

    public function __construct($db_name)
    {
        $this->database = $db_name;
    }

    public function connect_db()
    {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$conn) {
            die("Ошибка подключения к базе данных $this->database: " . mysqli_connect_error());
        }
        return $conn;
    }

}
