
<?php
class validate
{

    // checking only for strings
    public function check_string($str)
    {
        if (preg_match('/[^A-Za-z ]/', $str)) { // '/[^a-z\d]/i' should also work.
            return -1;
        } else {
            return 1;
        }
    }


    // checking only for numbers
    public function check_number($num)
    {
        if (preg_match("/[^0-9 +]/", $num)) {
            return -1;
        } else {
            return 1;
        }
    }

    public static function is_email($mail)
    {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL) === false) {
            return 0;
        } else {
            return 1;
        }
    }
}
