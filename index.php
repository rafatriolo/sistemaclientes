<?php

$logout = isset($_POST['logout']) ? $_POST['logout'] : '';
session_start();
if(!empty($logout)){
    session_destroy();
    header("Location:/");
    exit;
}
if(isset($_SESSION['user'])){
    require './template/template.php';
}else{
    require './template/login-template.php';
}
?>