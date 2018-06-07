<?php
session_start();
ob_start();
if($_SESSION['login'] == true){

}else{
    header('Location: ../login');
}