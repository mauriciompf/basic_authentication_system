<?php

try {
    session_start();
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        // Check CSRF token
        if (!isset($_POST["token"]) || $_POST["token"] !== $_SESSION["token"]) {
            throw new ErrorException("CSRF token mismatch");
        }

        // Generate new token after sucessful processing
        $_SESSION["token"] = bin2hex(random_bytes(32));

        // Disallow whitespace
        $first_name = isset($_POST["fname"]) ? trim($_POST["fname"]) : null;
        $last_name = isset($_POST["lname"]) ? trim($_POST["lname"]) : null;
        $r_email = isset($_POST["r_email"]) ? trim($_POST["r_email"]) : null;
        $r_password = isset($_POST["r_password"]) ? trim($_POST["r_password"]) : null;
        $confirm_pass = isset($_POST["confirm_pass"]) ? trim($_POST["confirm_pass"]) : null;

        // Prevent empty inputs
        if (empty($first_name)) {
            throw new ErrorException("The first name input is empty");
        } else if (empty($r_email)) {
            throw new ErrorException("The email input is empty");
        } else if (empty($r_password)) {
            throw new ErrorException("The password input is empty");
        } else if (empty($confirm_pass)) {
            throw new ErrorException("The confirm_pass input is empty");
        }

        // Escape HTML Characters
        $first_name = htmlspecialchars($first_name, ENT_QUOTES);
        $last_name = htmlspecialchars($last_name, ENT_QUOTES);
        $r_email = htmlspecialchars($r_email, ENT_QUOTES);
        $r_password = htmlspecialchars($r_password, ENT_QUOTES);
        $confirm_pass = htmlspecialchars($confirm_pass, ENT_QUOTES);


        // Check for invalid email
        if (!filter_var($r_email, FILTER_VALIDATE_EMAIL)) {
            throw new ErrorException("email is incorrect in validatio");
        }
        $r_email = filter_var($r_email, FILTER_SANITIZE_EMAIL);

        // Check password matching
        if ($r_password !== $confirm_pass) {
            throw new ErrorException("passwords don't match");
        }
        // Hash password
        $hashed_r_password = password_hash($r_password, PASSWORD_BCRYPT);
        $hashed_confirm_pass = password_hash($confirm_pass, PASSWORD_BCRYPT);

        // Add session regeneration for added security
        session_regenerate_id(true);
    }

    // Display the CSRF token
    $token = $_SESSION["token"];
} catch (ErrorException $error) {
    echo "<strong style='text-align: center'>Error: {$error->getMessage()}</strong>";
}
