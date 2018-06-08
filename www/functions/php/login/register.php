<?php
require ('../../config/databaseConfig.php');
include('loginFunct.php');
$pdo = ConnectDB();
ob_start();
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fPassword = $_POST['first_password'];

    $Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

    //hash het paswoord met de Salt
    $fPassword = hash('sha512', $fPassword . $Salt);


    // Create confirm_code
    $confirm_code = rand(100000, 999999);


    $parameters = array(':email' => $email, ':pw' => $fPassword , ':salt' => $Salt , ':code' => $confirm_code);
    $sth = $pdo->prepare('INSERT INTO personal_details (email , password , salt , confirm_code) VALUES (:email , :pw , :salt ,:code)');
    $sth->execute($parameters);

    echo $fPassword;
   // header('Location: ../');
} else {
    require ('../../forms/login/registerForm.html');
}