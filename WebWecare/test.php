<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="container">
        <form action="insert.php" method="post">
          <h1>Register</h1>
            <form>
                <label>Username</label>\
                <br>
                <input type="text" name="username">
                <br>
                <label>Email</label>
                <br>
                <input type="text" name="email">
                <br>
                <label>Password</label>
                <br>
                <input type="password" name="password">
                <br>
                <button>Register</button>
                <p> Sudah punya akun?
                  <a href="Login.php">Login di sini</a>
                </p>
            </form>
        </div>
    </body>
</html>