<?php

try {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

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

        // Escape HTML Characters && Sanitize inputs
        $first_name = htmlspecialchars($first_name, ENT_QUOTES);
        $last_name = htmlspecialchars($last_name, ENT_QUOTES);
        $r_email = filter_var($r_email, FILTER_SANITIZE_EMAIL);

        // Hash password
        $hashed_r_password = password_hash($r_password, PASSWORD_BCRYPT);
        $hashed_confirm_pass = password_hash($confirm_pass, PASSWORD_BCRYPT);
    }
} catch (ErrorException $error) {
    echo "Error: {$error->getMessage()}";
}
