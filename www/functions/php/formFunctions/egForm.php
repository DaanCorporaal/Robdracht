<?php

session_start();
require_once ('../config/databaseConfig.php');
require_once ('../config/databaseConnect.php');

$pdo = ConnectDB();
if($_SESSION['login'] == true){
    if(isset($_POST['submit'])){

        $fName = $_POST['fName'];
        $prefix = $_POST['prefix'];
        $lName = $_POST['lName'];
        $email = $_POST['Email'];
        $class = $_POST['class'];
        $group = $_POST['group'];
        $internComp = $_POST['internComp'];
        $internLead = $_POST['internLead'];
        $internPlace = $_POST['internPlace'];
        $internTeacher = $_POST['internTeacher'];

        $parameters = array(':fName' => $fName, ':lName' => $lName , ':prefix'=>$prefix , ':email' => $email ,
                            ':class' => $class , ':group' => $group , ':internC' => $internComp ,
                            ':internL' => $internLead , ':internP' => $internPlace , 'internT' => $internTeacher,
                            ':id' => $_SESSION['userId']);
        $sth = $pdo->prepare('UPDATE `personal_details` SET
                                      `firstname` = :fName,
                                      `prefix` = :prefix,
                                      `lastname` = :lName,
                                      `email` = :email,
                                      `classname` = :class,
                                      `school_class` = :group,
                                      `bpv_name` = :internC,
                                      `bpv_city` = :internP,
                                      `bpv_teacher` = :internT,
                                      `bpv_coach` = :internL 
                                      WHERE person_id = :id');

        $sth->execute($parameters);

        header('Refresh: 0');

    }else {
        $parameters = array(':userid' => $_SESSION['userId']);
        $sth = $pdo->prepare('SELECT email FROM personal_details WHERE person_id = :userid');
        $sth->execute($parameters);

        if($row = $sth->fetch()){
            $Email = $row['email'];
        }
        require ('../forms/Eigengegevens/egForm.php');
    }
}else {
    header('Location: ../login');
}

























?>