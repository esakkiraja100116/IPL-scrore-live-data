<?php
include "db.php";

class users
{

    private $conn;
    public function __construct()
    {
        $this->conn = new Database();
    }


    public function register($name, $mail, $num, $pass)
    {
        $query = "INSERT INTO `user-info` (`username`, `mail_id`, `phone_number`, `password`, `login_at`, `deleted_at`)
        VALUES ('$name', '$mail', '$num', '$pass', now(), NULL); ";
        $result = $this->conn->action($query);
        return $result;
    }

    public function login($username, $password)
    {
        $query = "SELECT `username`,`password` FROM `user-info` WHERE username = '$username' and password ='$password';";
        $result = $this->conn->get_all($query);
        if (empty($result)) {
            return 0; // there is no admin like this
        } else {
            return 1; // allow the admin
        }
    }
}
