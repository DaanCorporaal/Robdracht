<?php
    session_start();
    ob_start();

    if($_SESSION['login'] == true) {
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="styles/css/main.css" rel="stylesheet">
        <script src="functions/js/jquery.js"></script>
        <script src="functions/js/jquery-ui.js"></script>
        <script src="functions/js/homeScript.js"></script>
    </head>
    <body>
        <div class="wrapperHome">
            <a href="eigengegevens">Eigen gegevens</a>
            <span id="notify" style="color: red; display: none;">*</span>
            <br>
            <a href="lesvoorbereiding">Les voorbereiding</a>
            <br>
            <a href="evaluatieformulier">Evaluatie</a>
            <br>
            <a href="#">Invertarisatie</a>
        </div>
    </body>
<?php
    }
    else {
        header('Location: login');
    }
?>