<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">

    <title>Basic authentication system</title>
    <!-- <meta name="description" content=""> -->

    <link href="index.css" rel="stylesheet">

    <script defer src="index.css"></script>
</head>

<body>
    <div>
        <h1>Basic authentication system</h1>

        <form action="index.php" method="POST">
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email">
            </div>
            
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>

            <input type="submit" value="Enter">
        </form>
    </div>
</body>
</html>

<?php

    function get_info() {

        // is post?
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // validate inputs
            $username = isset($_POST["username"]) ? trim($_POST["username"]) : null;
            $email = isset($_POST["email"]) ? trim($_POST["email"]) : null;
            $password = isset($_POST["password"]) ? trim($_POST["password"]) : null;


            // check if someone is empty
            $errorMessage = "";
            
            if (empty($username)) {
                $errorMessage .= "Username can't be empty <br>";
            }

            if (empty($email)) {
                $errorMessage .= "Username can't be empty <br>";
            }

            if (empty($password)) {
                $errorMessage .= "password can't be empty <br>";
            }

            if (!empty($errorMessage)) {
                return $errorMessage;
            }

            // Saniteze inputs
            $username = htmlspecialchars($username);
            $email = htmlspecialchars($email);
            $password = htmlspecialchars($password); 

            $array_info = [
                "username" => $username,
                "email" => $email,
                "password" => $password
            ];

            foreach($array_info as $key => $value) {
                echo "{$key} : {$value} <br>";
            }

            return $array_info;
        }
        
        return "Invalid requested method";

    }

    get_info();



    // print_r(get_info());
?>