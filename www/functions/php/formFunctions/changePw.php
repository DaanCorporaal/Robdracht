<?php
if(isset($_POST['oldDBSalt'])){

    $typeOldPw = hash('sha512' , $_POST['oldPw'] . $_POST['oldDBSalt']);

    if($typeOldPw == $_POST['oldDBPw']){
        echo json_encode('success');
    }else {
        echo json_encode('notSameError');
    }


}else{
    echo json_encode('datbase request not done');
}


?>