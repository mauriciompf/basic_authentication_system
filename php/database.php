<?php

function createConnection()
{
    $servername = getenv("localhost");
    $username = getenv("root");
    $password = getenv("");
    $dbname = getenv("test");

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $conn->query("USE test");
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: {$e->getMessage()}<br>";
    }
}
