<?php

require ('../../../config/loginConfig.php');

function ConnectDB()
{
    try{
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME,USERNAME,PASSWORD);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    return $pdo;
}
// werkt nog niet moet eerst de database gemaakt zijn en de login fucntie
function LoginCheck($pdo)
{
    if (isset($_SESSION['user_id'], $_SESSION['user_name'],$_SESSION['login_string']))
    {
        $user_id = $_SESSION['user_id'];
        $Login_String = $_SESSION['login_string'];
        $Username = $_SESSION['user_name'];

        $user_browser = $_SERVER['HTTP_USER_AGENT'];

        $parameters = array(':rOSuser_id'=>$rOSuser_id);
        $sth = $pdo->prepare('SELECT password FROM app_users WHERE rOSuser_id = :KlantID LIMIT 1');

        $sth->execute($parameters);

        if ($sth->rowCount() == 1)
        {
            $row = $sth->fetch();

            $Login_Check = hash('sha512', $row['user_password'] . $user_browser);

            if ($Login_Check == $Login_String)
                return true;
            else
                return false;
        } else
            return false;
    } else
        return false;
}

