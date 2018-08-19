<?php

    $servername = "localhost";
    $username = "admin";
    $password = "1234";
    $msg = "Работает";
    try {
        $conn = new PDO("mysql:host = $servername; dbname=learn", $username, $password);
    }
    catch (PDOException $e) {
        echo "Не работает: " .$e->getMessage();
    }

?>