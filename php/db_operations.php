<?php

function insertUser($conn, $firstName, $lastName, $email, $hashedPassword)
{
    try {
        $conn->query("USE forms");

        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $emailCount = $stmt->fetchColumn();

        if ($emailCount > 0) {
            throw new Exception("Email address already exists.");
        }

        $sql = "
        INSERT INTO users (first_name, last_name, email, password)
        VALUES (
                ?, ?, ?, ?
            )";


        $stmt = $conn->prepare($sql);

        $stmt->execute([$firstName, $lastName, $email, $hashedPassword]);
        echo "User inserted succefully";
    } catch (PDOException $e) {
        echo "Error inserting user: {$e->getMessage()}";
    }
}
