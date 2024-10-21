<?php 

require 'connect.php';

$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$update = isset($_POST['update']) ? $_POST['update'] : '';
$id = isset($_POST['id']) ? $_POST['id'] : '';
$deletar = isset($_GET['deletar']) ? $_GET['deletar'] : '';
$delete_id = isset($_GET['id']) ? $_GET['id'] : '';

if(!empty($name) && !empty($age)){
   if(!empty($update) && !empty($id)){
      setClients($name, $age, $id);
   }else{
      insertClients($name, $age);
   } 
}

if(!empty($deletar) && !empty($delete_id)){
   deleteClients($delete_id);
}

function selectClients(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM clientes");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
 }
 
 function insertClients($name, $age){
    $db = connect();
    $query = $db->prepare("INSERT INTO clientes (name, age) VALUES ('$name', $age)");
    $query->execute();
    header("location: ../?p=clients");
 }

 function getClients($id){
    $db = connect();
    $query = $db->prepare("SELECT * FROM clientes WHERE id = $id");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
 }
 
 function setClients($name, $age, $id){
   $db = connect();
   $query = $db->prepare("UPDATE clientes SET name='$name', age=$age WHERE id = $id");
   $query->execute();
   header("location: ../?p=clients");
 }

 function deleteClients($id){
   $db = connect();
   $query = $db->prepare("DELETE FROM clientes WHERE id = $id");
   $query->execute();
   header("location: ../?p=clients");
 }