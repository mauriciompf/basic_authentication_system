<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">
    <title>Basic Authentication System</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="wrapper">
        <main class="main">
            <h1 class="wellcome">Wellcome.</h1>
            <div class="wrapper-form_login">
                <h2 class="heading">Sign-in</h1>
                    <form class="form" action="index.php" method="POST">
                        <div class="input_email input">
                            <label for="my_email">Email</label>
                            <input type="text" name="email" id="my_email">
                        </div>
                        <div class="input_password input">
                            <label for="my_password">Password</label>
                            <input type="text" name="email" id="my_password">
                        </div>

                        <div class="form_buttons">
                            <button type="submit" class="btn btn-enter">Enter</button>
                            <button type="button" class="btn btn-register">Register new account</button>
                        </div>
                    </form>
            </div>

            <div class="wrapper-form_register active">
                <p>hello</p>
            </div>
        </main>
    </div>
    <script type="module" src="app.js"></script>
</body>

</html>