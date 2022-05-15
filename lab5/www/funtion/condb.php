<?php

$host = "mysql";
$user = "root";
$pass = "1234";
$db = "DB_TEST";

try{
    $mysqli = new mysqli($host,$user,$pass,$db);
    $mysqli->query("SET MANE utf8");
} catch(Exception $e) {
    echo $e->getMessage();
}


