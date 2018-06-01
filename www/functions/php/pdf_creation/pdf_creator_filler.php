<?php

if(isset($_POST['pdf-create'])){
    $pdfcontext = $_POST['pdf-context'];


} else {
    include('../../../forms/pdfcreate/pdfcreateform.php');
}
