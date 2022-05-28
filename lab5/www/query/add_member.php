<?php
$id = $_POST['id'];
$user = $_POST['username'];
$pass = $_POST['password'];

try{
    $sql = "INSERT INTO tb_member VALUES ($id,$user,$pass)";
    $mysqli->query($sql);
} catch(Exception $e) {
    echo $e->getMessage();
}
