<?php
    global $pdo;
    $host = 'localhost';
    $dbname = 'rundt';
    $username = 'root';
    $password = '';
    try {
        $pdo= new PDO("mysql:host=$host;dbname=$dbname;charset=UTF8", $username, $password);
    } catch (Exception $pe) {
        echo "Ошибка";
    }
?>