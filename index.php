<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
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
            <div class="wrapper-form_login active">
                <h2 class="heading">Sign-in</h1>
                    <form class="form" action="index.php" method="POST">
                        <div class="input_email input">
                            <label for="my_email">Email</label>
                            <input type="email" name="l_email" id="my_email" aria-label="Email" required>
                        </div>
                        <div class="input_password input">
                            <label for="my_password">Password</label>
                            <input type="password" name="l_password" id="my_password" aria-label="Password" required>
                        </div>

                        <div class="form_buttons">
                            <button type="submit" class="btn btn-enter" aria-describedby="Enter with your account">Enter</button>
                            <button type="button" class="btn btn-register" aria-describedby="Go to Register form">Register new account</button>
                        </div>
                    </form>
            </div>

            <div class="wrapper-form_register wrapper-form_login">
                <h2 class="heading">Sign-up</h2>
                <form action="index.php" method="POST" class="form">
                    <input type="hidden" name="token" value="<?php echo $token; ?>">

                    <div class="input">
                        <label for="f_name">First Name*</label>
                        <input type="text" name="fname" id="f_name" aria-label="First Name">
                    </div>
                    <div class="input">
                        <label for="l_name">Last Name</label>
                        <input type="text" name="lname" id="l_name" aria-label="Last Name">
                    </div>
                    <div class="input">
                        <label for="r_email">Email*</label>
                        <input type="email" name="r_email" id="r_email" aria-label="Email">
                    </div>
                    <div class="input">
                        <label for="r_password">Password*</label>
                        <input type="password" name="r_password" id="r_password" aria-label="Password">
                    </div>
                    <div class="input">
                        <label for="confirm_pass">Confirm Password*</label>
                        <input type="password" name="confirm_pass" id="confirm_pass" aria-label="Confirm Password">
                    </div>
                    <div class="form_buttons">
                        <button type="submit" class="btn btn-enter" aria-describedby="Enter with your account">Enter</button>
                        <button type="button" class="btn btn-login" aria-describedby="Go to Login form">Already have a account</button>
                    </div>
                </form>
            </div>
        </main>
        <?php require "forms.php"; ?>
    </div>
    <script type="module" src="app.js"></script>
</body>

</html>