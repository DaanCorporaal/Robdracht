<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-ui.min.js"></script>
</head>

<body>
    <form method="post" action="login/login.php" class="formLogin">
        <div class="login-wrap">
            <h1>Login</h1>
            <input type="text" autocomplete="off" autofocus required spellcheck="false" name="username" placeholder="username"><br>
            <input type="password" autocomplete="off" autofocus required name="password" placeholder="password"><br>
            <button type="submit" name="login" class="btn-main">login</button>
        </div>
    </form>
</body>
</html>