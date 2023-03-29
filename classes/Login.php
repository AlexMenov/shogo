<?php

class Login
{

    public function check_logged_in()
    {
        session_start();
        if ($_SESSION['logged_in'] !== 'yes') {
            header("Location: ../auth.php");
            return;
        };
    }

    public function check_user($conn)
    {
        $user_name = $_POST['username'];
        $user_password = $_POST['password'];
        $login = $user_name;
        $password = $user_password;
        $sql = "SELECT * FROM users WHERE user_login = '$login' AND user_password = '$password'";
        $user = mysqli_query($conn, $sql);
        if (mysqli_num_rows($user) === 1) {
            session_start();
            $_SESSION['logged_in'] = 'yes';
            $_SESSION['login'] = $user_name;
            header("Location: ../add_product.php");
        }
    }

    public function logout()
    {
        session_start();
        $_SESSION['logged_in'] = null;
        $_SESSION['login'] = null;
        session_unset();
        header("Location: /");
    }

}