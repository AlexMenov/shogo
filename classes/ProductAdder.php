<?php


class ProductAdder
{
    private $product_param_name;
    private $product_param_variant;
    private $product_section;
    private $product_type;
    private $conn;

    public function set_connection($conn)
    {
        $this->conn = $conn;
    }

    private function get_product_param_name()
    {
        $sql = "SELECT * FROM `product_param_name`";
        $this->product_param_name = mysqli_fetch_all(mysqli_query($this->conn, $sql), MYSQLI_ASSOC) ?: die("Ошибка запроса в базе данных");
    }

    private function get_product_param_variant()
    {
        $sql = "SELECT * FROM `product_param_variant`";
        $this->product_param_variant = mysqli_fetch_all(mysqli_query($this->conn, $sql), MYSQLI_ASSOC) ?: die("Ошибка запроса в базе данных");
    }

    private function get_product_type()
    {
        $sql = "SELECT * FROM `product_type`";
        $this->product_type = mysqli_fetch_all(mysqli_query($this->conn, $sql), MYSQLI_ASSOC) ?: die("Ошибка запроса в базе данных");
    }

    private function get_product_section()
    {
        $sql = "SELECT * FROM `product_section`";
        $this->product_section = mysqli_fetch_all(mysqli_query($this->conn, $sql), MYSQLI_ASSOC) ?: die("Ошибка запроса в базе данных");
    }

    public function add_product()
    {
        $this->get_product_param_name();
        $this->get_product_param_variant();
        $this->get_product_section();
        $this->get_product_type();

        $position_product_id = $_POST['position'];
        $product_url = $_POST['url'];
        $product_name = $_POST['name'];
        $product_articul = $_POST['articul'];
        $product_price = $_POST['price'];
        $product_price_old = $_POST['price_old'];
        $product_notice = $_POST['notice'];
        $product_content = $_POST['content'];
        $product_visible = $_POST['visible'];
        $product_type = $_POST['type'];
        $product_section = $_POST['section'];
        $product_currency_id = $_POST['currency_id'];
        $product_section_id_position = null;
        $product_type_id = null;
        $product_param_name_position = null;
        $product_param_variant_position = null;
        $product_name_escaped = mysqli_real_escape_string($this->conn, $product_name);
        $product_content_escaped = mysqli_real_escape_string($this->conn, $product_content);

        foreach ($this->product_section as $item) {
            if ($item['name'] === $product_section) {
                $product_section_id_position = $item['position'];
                break;
            }
        };
        foreach ($this->product_type as $item) {
            if ($item['name'] === $product_type) {
                $product_type_id = $item['id'];
                break;
            }
        }
        var_dump($_POST);
        $sql_product = "INSERT INTO `product` (`id`, `position`, `url`, `name`, `articul`, `price`, `currency_id`, `price_old`, `notice`, `content`, `visible`) 
                VALUES (NULL, '$position_product_id', '$product_url', '$product_name_escaped', '$product_articul', '$product_price', '$product_currency_id', '$product_price_old', '$product_notice', '$product_content_escaped', '$product_visible')";
        $sql_product_assignment = "INSERT INTO `product_assignment` (`id`, `product_id`, `section_id`, `type_id`, `visible`) VALUES (NULL, '$position_product_id', '$product_section_id_position', '$product_type_id', '$product_visible')";

        $result = mysqli_query($this->conn, $sql_product);
        if (!$result) {
            die('Ошибка выполнения запроса: ' . mysqli_error($this->conn));
        }
        $result = mysqli_query($this->conn, $sql_product_assignment);
        if (!$result) {
            die('Ошибка выполнения запроса: ' . mysqli_error($this->conn));
        }

        // ниже код, который добавляет варианты товаров
/*        foreach ($this->product_param_name as $item) {
            $param_name = $_POST[$item['name']];
            if (is_array($param_name)) {
                $product_param_name_position = $item['position'];
                foreach ($param_name as $value) {
                    $filtered_product_param_variant = array_filter($this->product_param_variant, function ($item) use ($value) {
                        return $item['name'] === $value;
                    });
                    if ($filtered_product_param_variant) {
                        $product_param_variant_position = reset($filtered_product_param_variant)['param_id'];
                        $sql_product_param_value = "INSERT INTO `product_param_value` (`id`, `product_id`, `product_param_name_position`, `product_param_variant_position`) VALUES (NULL, '$position_product_id', '$product_param_name_position', '$product_param_variant_position')";
                        $result = mysqli_query($this->conn, $sql_product_param_value);
                        if (!$result) {
                            die('Ошибка выполнения запроса: ' . mysqli_error($this->conn));
                        }
                    }
                }
            }
        }*/
        header("Location: /");
        mysqli_close($this->conn);

    }
}
