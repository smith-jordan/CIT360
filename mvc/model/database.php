<?php
    $dsn = 'mysql:host=localhost;dbname=eastida4_my_guitar_shop1';
    $username = 'eastida4_iClient';
    $password = '6810611Byui$';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>