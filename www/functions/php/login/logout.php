<?php
session_start();
$_SESSION['user_id'] = null;


if($_SESSION['user_id'] == null){
	header('location: ../');
}
