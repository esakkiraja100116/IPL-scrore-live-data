
<?php
include "db/user.class.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    $db = new users();
    $result = $db->login($name, md5($pass));
    if ($result == 1) {
        echo "Valid user";
    } else {
        echo "Sorry authentication failed";
    }
}
