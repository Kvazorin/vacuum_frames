<?php
    global $pdo;
    $host = 'localhost';
    $dbname = 'rundt';
    $username = 'root';
    $password = '';
    try {
        $pdo= new PDO("mysql:host=$host;dbname=$dbname", $username, $password,'utf8');
    } catch (Exception $pe) {
        echo "Ошибка";
    }
?>