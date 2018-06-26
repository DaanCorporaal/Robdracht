<?php

require ('../../../config/databaseConfig.php');
require ('../../../config/databaseConnect.php');
$pdo = ConnectDB();

if(isset($_POST['email'])){
    $userEmail = $_POST['email'];

    $parameters =  array(':email' => $userEmail);

    $sth = $pdo->prepare('SELECT * FROM personal_details WHERE email = :email');

    $sth->execute($parameters);

    if($row = $sth->fetch()){
        $_SESSION['dbSalt'] = $row['salt'];
        $_SESSION['dbPass'] = $row['password'];
        echo json_encode($row);
    }else {
        echo 'error';
    }
}






?>