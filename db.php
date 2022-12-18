<?php
    global $pdo;
    $host = 'localhost';
    $dbname = 'rundt';
    $username = 'root';
    $password = '';
    try {
        $pdo= new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    } catch (Exception $pe) {
        echo "Ошибка";
    }
?>