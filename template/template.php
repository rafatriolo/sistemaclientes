<?php 
(isset($_GET['p']) ? $page = $_GET['p'] : $page = 'home');
include_once './components/header.php'
?>


<!-- Begin Page Content -->
<div class="container-fluid">

<?php 
if(file_exists('./pages/' . $page . '.php')){
    include_once('./pages/' . $page . '.php');
}else{
    include_once('./pages/home.php');
}

?>

</div>
<!-- /.container-fluid -->

      
<?php include_once './components/footer.php'?>    