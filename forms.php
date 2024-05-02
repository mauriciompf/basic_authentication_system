<?php

function createConnection()
{
    try {
        $servername = "localhost";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: {connect_error} <br>");
        }

        echo "Connected succesfully <br>";

        // create database

        $sql = "CREATE DATABASE register_form";

        if ($conn->query($sql) === true) {
            echo "Database created sucessfully";
        } else {
            echo "Error creating database {$conn->error}";
        }

        $conn->close();
    } catch (Exception $e) {
        throw new Exception("Connection failed: {$e->getMessage()}");
    }
}


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
    } catch (Exception $e) {
        echo "Error: {$e->getMessage()}";
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
