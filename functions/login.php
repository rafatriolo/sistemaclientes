<?php 
session_start();
require 'connect.php';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$pass = isset($_POST['password']) ? md5($_POST['password']) : '';

if(!empty($email) &&!empty($pass)){
    getUsers($email, $pass);
}

function getUsers($email, $pass){
    $db = connect();
    $query = $db->prepare("SELECT * FROM usuarios WHERE email = '$email' AND password = '$pass'");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if($result){
        unset($result['password']);
        $_SESSION['user'] = $result;
        header("location:/");
    }else{
        header("location:/");
    }
 }