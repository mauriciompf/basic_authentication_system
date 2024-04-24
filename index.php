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

    $server_name = "localhost";
    $username = "root";
    $password = "";
    $db_name = "forms_db";

    // create connection
    $conn = new mysqli($server_name, $username, $password, $db_name);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: {$conn->connect_error} <br>");
    }

    // $sql = "
    //     create table form (
    //         id int auto_increment primary key,
    //         username varchar(50),
    //         email varchar(50) NOT NULL,
    //         password char(56) NOT NULL
    //     );
    // ";

    

    // is post?
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // validate inputs
        $username = isset($_POST["username"]) ? trim($_POST["username"]) : null;
        $email = isset($_POST["email"]) ? trim($_POST["email"]) : null;
        $password = isset($_POST["password"]) ? trim($_POST["password"]) : null;

        echo "Connected successfully";

        // check if someone is empty
        $errorMessage = "";
        
        if (empty($username)) {
            $errorMessage .= "Username can't be empty <br>";
        }

        if (empty($email)) {
            $errorMessage .= "Email can't be empty <br>";
        }

        if (empty($password)) {
            $errorMessage .= "password can't be empty <br>";
        }

        if (!empty($errorMessage)) {
            echo $errorMessage;
        }

        // Saniteze inputs
        $username = htmlspecialchars($username);
        $email = htmlspecialchars($email);
        $password = htmlspecialchars($password); 

        // hash password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT, ["cost" => 12]);

        $stmt = $conn->prepare("INSERT INTO form (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        if ($stmt->execute()) {
            echo "Query created succefully <br>";
        } else {
            echo "Error creating query: {$stmt->error} <br>";
        }
    
        // end connection
        $stmt->close();
        $conn->close();

    } else {
        echo "Invalid requested method";
    }

    // foreach($database as $key => $value) {
    //     echo "{$key} : {$value} <br>";
    // }

?>