<?php

session_start();
ob_start();
require ('../../../config/databaseConfig.php');
require ('loginFunct.php');

$pdo = ConnectDB();

function login($Username , $Password , $pdo)
{
    $parameter = array(':name'=>$Username);
    $sth = $pdo->prepare('SELECT * FROM personal_details WHERE email = :name');

    $sth->execute($parameter);

    if ($sth->rowCount() == 1)
    {
        // POST variable with query
        $row = $sth->fetch();

        $ogpass = $Password;
        // has to variable
        $Password = hash('sha512', $ogpass . $row['salt']);

        if ( $row['password'] == $Password)
        {
            $user_browser = $_SERVER['HTTP_USER_AGENT'];
            $_SESSION['userId'] = $row['person_id'];
            $_SESSION['session_code'] = $row['confirm_code'];
            $_SESSION['login'] = true;

             return true;

        }
        else
        {
            // password wrong
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
                header('Location: ../../../home');
    }
    else
    {
        // login false
       header('Location: ../../../login');

    }
}
else{
    // login page
    echo 'login not set';
   // header('../../../login');
}

?>