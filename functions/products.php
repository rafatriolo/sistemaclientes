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
      setProducts($name, $age, $id);
   }else{
      insertProducts($name, $age);
   } 
}

if(!empty($deletar) && !empty($delete_id)){
   deleteProducts($delete_id);
}

function selectProducts(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM products");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
 }
 
 function insertProducts($name, $age){
    $db = connect();
    $query = $db->prepare("INSERT INTO products (name, age) VALUES ('$name', $age)");
    $query->execute();
    header("location: ../?p=Products");
 }

 function getProducts($id){
    $db = connect();
    $query = $db->prepare("SELECT * FROM products WHERE id = $id");
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
 }
 
 function setProducts($name, $age, $id){
   $db = connect();
   $query = $db->prepare("UPDATE products SET name='$name', age=$age WHERE id = $id");
   $query->execute();
   header("location: ../?p=Products");
 }

 function deleteProducts($id){
   $db = connect();
   $query = $db->prepare("DELETE FROM products WHERE id = $id");
   $query->execute();
   header("location: ../?p=Products");
 }