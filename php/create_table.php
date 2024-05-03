<?php

require_once "database.php";

function createTable()
{
    try {

        $conn = createConnection();

        $sql = "
            CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR(50) NOT NULL,
                last_name VARCHAR(50),
                email VARCHAR(100) NOT NULL UNIQUE,
                password VARCHAR(255) NOT NULL,p
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP    
            )";

        $conn->exec($sql);

        echo "Table 'users' created successfully";

        $conn = null;
    } catch (PDOException $e) {
        echo "Error creating table: {$e->getMessage()}";
    }
}

createTable();
