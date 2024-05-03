<?php

function createConnection()
{
    $servername = getenv("localhost");
    $username = getenv("root@localhost");
    $password = getenv("1947");
    $dbname = getenv("r_form");

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: {$e->getMessage()}";
    }
}
