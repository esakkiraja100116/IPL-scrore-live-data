<?php
// Provide your server details here before start 
$server_name = "mariadb.selfmade.ninja"; // servername eg(localhost or ip)
$username = "esakkiraja"; // username of the database  
$password = "Esakkiraja@098"; // password 
$data_base_name = "esakkiraja_IPL"; // database name

/*$server_name = "localhost"; // servername eg(localhost or ip)
$username = "root"; // username of the database
$password = ""; // password
$data_base_name = "wf_profit"; // database name*/

define("DB_HOST", $server_name);
define("DB_UNAME", $username);
define("DB_PASS", $password);
define("DB_NAME", $data_base_name);
