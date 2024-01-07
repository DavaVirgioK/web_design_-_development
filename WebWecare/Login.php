<!DOCTYPE HTML>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
        <form action="checklogin.php" method="post">
            <div class = "Login">
                <h1>Login</h1>
            </div>
            <form>
                <label>Username</label>
                    <br>
                    <input type="text" name="username">
                    <br>
                <label>Password</label><br>
                    <input type="password" name="password"><br>
                    <button>
                    <input type="submit" value="login">    
                    </button>          
                <p> Belum punya akun?
                  <a href="test.php">Register di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>