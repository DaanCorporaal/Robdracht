<?php
session_start();
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
            <p class="login-input">Email</p>
            <div class="email-wrap">
                <input type="text" autocomplete="off" autofocus required spellcheck="false" name="username" id="email-input">
                <input type="text" required spellcheck="false" id="email-standard">
            </div>
            <p class="login-input">Wachtwoord</p>
            <input type="password" autocomplete="off" autofocus required name="password" class="password">
            <button type="submit" name="login" class="btn-main">login</button>
            <p class="register">Geen account? Registreer <a href="registratie">hier!</a></p>
        </div>
    </form>
    <script>
        $("#email-input").on({
            keydown: function(e) {
                if (e.which === 32)
                    return false;
            },
            change: function() {
                this.value = this.value.replace(/\s/g, "");
            }
        });
        $("#email-standard").val('@rocdeleijgraaf.nl');
    </script>
</body>
</html>