<?php
include('loginFunct.php');

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $fPassword = $_POST['password'];

    $Salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));

    //hash het paswoord met de Salt
    $fPassword = hash('sha512', $fPassword . $Salt);


} else {
    require ('../../../forms/registerForm.html');
}