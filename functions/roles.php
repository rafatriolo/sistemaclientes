<?php 

function selectRoles(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM roles");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
 }

//  function insertUsers($name, $email, $pass){
//     $db = connect();
//     $query = $db->prepare("INSERT INTO usuarios (name, email, password) VALUES ('$name', '$email', '$pass')");
//     $query->execute();
//     header("location: ../?p=users");
//  }

//  function getUsers($id){
//     $db = connect();
//     $query = $db->prepare("SELECT * FROM usuarios WHERE id = $id");
//     $query->execute();
//     $result = $query->fetch(PDO::FETCH_ASSOC);
//     return $result;
//  }
 
//  function setUsers($name, $email, $pass, $id){
//    $db = connect();
//    $query = $db->prepare("UPDATE usuarios SET name='$name', email='$email', password='$pass' WHERE id = $id");
//    $query->execute();
//    header("location: ../?p=users");
//  }

//  function deleteUsers($id){
//    $db = connect();
//    $query = $db->prepare("DELETE FROM usuarios WHERE id = $id");
//    $query->execute();
//    header("location: ../?p=users");
//  }