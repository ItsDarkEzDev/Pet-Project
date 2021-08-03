<?php
$date = [
    'host' => 'localhost',
    'login' => 'root',
    'password' => 'root',
    'database' => 'order',
    'port' => 3306
    ];

$mysqli = @new mysqli($date['host'], $date['login'], $date['password'], $date['database']);
if($mysqli->connect_errno) return exit('MySQL error!');
$mysqli->set_charset("utf8");

?>
