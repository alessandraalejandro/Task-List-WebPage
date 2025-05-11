<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sample Project</title>
    <link rel="stylesheet" href="assets/css/login.css">

</head>
<body>

    <div class="container">
        <div class="wrapper">
        <h1>Sign In</h1>
            <form action="#" method="post">
                <div class="field">
                    <label for="email">Email Address</label> <br>
                    <input type="email" name="email" id="email" required> <br>
                </div>
                <div class="field">
                    <label for="password">Password</label> <br>
                    <input type="password" name="password" id="password" required> <br>
                </div>
                <a href="forgot-password.php">Forgot password</a> <br>
                <button type="submit" name="btn-signin">Sign in</button>
            </form>
        </div>

        <div class="wrapper">
            <h1>Sign Up</h1>
            <form action="#" method="post">
                <div class="field">
                    <label for="username">Username</label> <br>
                    <input type="text" name="username" id="username" required> <br>
                </div>
                <div class="field">
                    <label for="email">Email Address</label> <br>
                    <input type="email" name="email" id="email" required> <br>
                </div>
                <div class="field">
                    <label for="password">Password</label> <br>
                    <input type="password" name="password" id="password" required><br>
                </div>
                <button type="submit" name="btn-signup">Sign up</button>
                </form>
        </div>
        
    </div>
    
</body>
</html>