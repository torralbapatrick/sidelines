<?php
    if (isset($_POST["submitButton"])) {
        echo "Form was submitted";
    }
?>
<!DOCTYPE html>
<html>
    <head>
	    <link rel="stylesheet" type="text/css" href="css/style.css">
        <title>Sidelines - Watch Basketball Highlights</title>
    </head>
    <body>
        <div class="sign-up-container">
            <div class="column">
                <div class="header">
                    <img src="images/logo.png" alt="Site Logo" />
                    <h3>Sign In</h3>
                    <span>to continue to Sidelines</span>
                </div>

                <form method="POST">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="submit" name="submitButton" value="Submit">
                </form>

                <a href="register.php" class="sign-in-message">Need an account? Sign up here!</a>
            </div>
        </div>
    </body>
</html>