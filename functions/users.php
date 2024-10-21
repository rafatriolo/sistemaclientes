<?php 

require 'connect.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$update = isset($_POST['update']) ? $_POST['update'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$role_id = isset($_POST['role_id']) ? $_POST['role_id'] : '';
$deletar = isset($_GET['deletar']) ? $_GET['deletar'] : '';
$delete_id = isset($_GET['id']) ? $_GET['id'] : '';

if(!empty($name) && !empty($email)){
    if(!empty($update) && !empty($id)){
        $user = getUsers($id);
        $pass = (!empty($_POST['password'])) ? md5($_POST['password']) : $user['password'];
        setUsers($name, $email, $pass, $id);
    }else{
        $pass = isset($_POST['password']) ? md5($_POST['password']) : '';
        insertUsers($name, $email, $pass, $role_id);
    } 
 }
 
 if(!empty($deletar) && !empty($delete_id)){
    deleteUsers($delete_id);
 }

function selectUsers(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM usuarios AS u JOIN roles AS r WHERE u.role_id = r.role_id");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
 }

 function insertUsers($name, $email, $pass, $role_id){
    $db = connect();
    $query = $db->prepare("INSERT INTO usuarios (name, email, password, role_id) VALUES ('$name', '$email', '$pass', '$role_id')");
    $query->execute();
    header("location: ../?p=users");
 }

 function getUsers($id){
    $db = connect();
    $query = $db->prepare("SELECT * FROM usuarios WHERE id = $id");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
 }
 
 function setUsers($name, $email, $pass, $id){
   $db = connect();
   $query = $db->prepare("UPDATE usuarios SET name='$name', email='$email', password='$pass' WHERE id = $id");
   $query->execute();
   header("location: ../?p=users");
 }

 function deleteUsers($id){
   $db = connect();
   $query = $db->prepare("DELETE FROM usuarios WHERE id = $id");
   $query->execute();
   header("location: ../?p=users");
 }

 function getAttributes(){
   $db = connect();
   $query = $db->prepare("SELECT * FROM usuarios AS u JOIN attributes AS attr WHERE u.id = attr.user_id AND u.id =" . $_SESSION['user']['id']);
   $query->execute();
   $result = $query->fetchAll(PDO::FETCH_ASSOC);
   return $result;
 }