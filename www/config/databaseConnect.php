<?php

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
?>