<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <form action="ceklogin.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">BALI KAPUTRA</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="user" id="username">
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="pass" id="password">
            </div>
            <div class="input-group">
                <button name="submit" class="btn">Log in</button>
                <button name="submit" class="btn"> <a href="signup.php">Sign Up</a> </button>
            </div>
        </form>
    </div>
</body>

</html>