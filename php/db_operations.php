<?php

function insertUser($conn, $firstName, $lastName, $email, $hashedPassword)
{

    $sql = "
        INSERT INTO users (first_name, last_name, email, password)
        VALUES (
                ?, ?, ?, ?
            )";

    $stmt = $conn->prepare($sql);

    try {

        $stmt->execute([$firstName, $lastName, $email, $hashedPassword]);
        echo "User inserted succefully";
    } catch (PDOException $e) {
        echo "Error inserting user: {$e->getMessage()}";
    }
}
