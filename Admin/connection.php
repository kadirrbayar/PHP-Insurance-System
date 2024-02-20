<?php
session_start();
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
const BASE_URL = 'http://localhost/PHP-Insurance-System/Admin/';

try{
    $conn = new PDO("mysql:host=localhost;dbname=sigorta;charset=utf8", 'root', '');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo 'Veritabanına bağlanırken hata oluştu.';
    die();
}