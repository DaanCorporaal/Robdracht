<?php
session_start();
require_once ('../../../config/databaseConfig.php');
require_once ('../../../config/databaseConnect.php');
$pdo = ConnectDB();
$parameters = array(':id' => $_SESSION['userId']);
$sth = $pdo->prepare('SELECT firstname FROM personal_details WHERE person_id = :id');
$sth->execute($parameters);
if($row = $sth->fetch()){
    if($row['firstname'] == '' || $row['firstname'] == null){
        echo json_encode(true);
    }else {
        echo json_encode(false);
    }
}else {
    echo json_encode('user not logged in');
}
?>