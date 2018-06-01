<?php

session_start();
ob_start();

require ('loginFunct.php');

$pdo = ConnectDB();

function login($Username , $Password , $pdo)
{
    $parameter = array(':name'=>$Username);
    $sth = $pdo->prepare('SELECT * FROM users WHERE user_name = :name');

    $sth->execute($parameter);

    if ($sth->rowCount() == 1)
    {
        // get variable with query
        $row = $sth->fetch();

        // has to variable
        $Password = hash('sha512', $Password);

        if ($row['user_password'] == $Password)
        {
            $user_browser = $_SERVER['HTTP_USER_AGENT'];

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['user_name'] = $row['user_name'];

            // Login success.
            return true;
        }
        else
        {
            // password wrong
            echo $Password;
            return false;
        }
    }
    else
    {
        // username does not exist
        return false;
    }
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $check = login($username,$password,$pdo);

    if($check){
        // login true
        header('Location: ../');
    }
    else{
        // login false
        header('Location: ../');

    }
}
else{
    // login page
    header('');
}

?>