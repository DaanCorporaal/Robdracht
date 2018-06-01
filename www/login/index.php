<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="../styles/css/main.css" rel="stylesheet">
    <script src="../functions/js/jquery.js"></script>
    <script src="../functions/js/jquery-ui.js"></script>
</head>

<body class="overflow-hidden">
    <form method="post" action="../functions/php/login/login.php" class="formLogin">
        <img src="../styles/resources/media/loginForm.svg" class="loginFormImg" draggable="false">
        <div class="login-wrap">
            <h1>Login</h1>
            <input type="text" autocomplete="off" autofocus required spellcheck="false" name="username" placeholder=""><br>
            <input type="password" autocomplete="off" autofocus required name="password" placeholder=""><br>
            <button type="submit" name="login" class="btn-main">login</button>
        </div>
    </form>
</body>
</html>