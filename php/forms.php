<?php

require_once "database.php";
// require "create_table.php";
require "db_operations.php";

function handleFormSubmission()
{
    try {
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            return;
        }

        $firstName = validateInput($_POST["fname"], "First name");
        $lastName = validateInput($_POST["lname"], "Last name");
        $email = validateInput(validateEmail($_POST["r_email"]), "Email");
        $password = validateInput($_POST["r_password"], "Password");
        $confirmPass = validateInput($_POST["confirm_pass"], "Confirm Password");

        if ($password !== $confirmPass) {
            throw new Exception("Passwords do not match");
        }

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        $conn = createConnection();

        insertUser($conn, $firstName, $lastName, $email, $hashedPassword);

        $conn = null;
    } catch (Exception $e) {
        echo "Error: {$e->getMessage()} <br>";
    }
}

function validateInput($input, $name)
{
    if (empty(trim($input))) {
        throw new Exception("$name cannot be empty");
    }

    return htmlspecialchars(trim($input),  ENT_QUOTES, "UTF-8");
}

function validateEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format");
    }

    return filter_var($email, FILTER_SANITIZE_EMAIL);
}

createConnection();
handleFormSubmission();
