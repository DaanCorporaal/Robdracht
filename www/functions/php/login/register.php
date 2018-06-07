<?php
include('loginFunct.php');
$pdo = ConnectDB();
ob_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fPassword = $_POST['password'];

    $Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

    //hash het paswoord met de Salt
    $fPassword = hash('sha512', $fPassword . $Salt);


    // Create confirm_code



    //  $confirm_code = *code generated ^^^ *


    $parameters = array(':email' => $email, ':pw' => $fPassword , ':salt' => $Salt);
    $sth = $pdo->prepare('INSERT INTO personal_details (email , password , salt) VALUES (:email , :pw , :salt)');
    $sth->execute($parameters);

    header('Location: ../');
} else {
    require ('../../forms/login/registerForm.html');
}