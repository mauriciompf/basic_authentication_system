<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $first_name = isset($_POST["f_name"]) ? trim($_POST["f_name"]) : null;
    $last_name = isset($_POST["l_name"]) ? trim($_POST["l_name"]) : null;
    $r_email = isset($_POST["r_email"]) ? trim($_POST["r_email"]) : null;
    $r_password = isset($_POST["r_passwod"]) ? trim($_POST["r_password"]) : null;
    $confirm_pass = isset($_POST["confirm_pass"]) ? trim($_POST["confirm_pass"]) : null;

    echo $first_name;
} else {
    echo "error";
}
