<?php
include "verify.php";
include "db/user.class.php";


if (isset($_POST['name']) && isset($_POST['phone_number']) && isset($_POST['password']) && isset($_POST['mail_id'])) {
    $name = $_POST['name'];
    $number = $_POST['phone_number'];
    $pass = $_POST['password'];
    $mail = $_POST['mail_id'];

    $verify = new validate();
    $check_name = $verify->check_string($name);
    $check_number = $verify->check_number($number);
    $check_mail = $verify->is_email($mail);

    $db = new users();

    if ($check_number == 1) {
        if ($check_name == 1) {
            if ($check_mail == 1) {
                $value = $db->register($name, $mail, $number, md5($pass));
                if ($value == 1) {
                    echo "Values are saved";
                } else {
                    echo "Problem in inserting";
                }
            } else {
                echo "Give the correct mail ID";
            }
        } else {
            echo "Please check the name";
        }
    } else {
        echo "Provide the correct number";
    }
}
