<?php 
require './functions/clients.php';

$id = $_GET['id'];

$client = getClients($id);
?>

<form action="/functions/clients.php" class="form-inline mb-4" method="post">
      <div class="form-group mr-2">
            <input class="form-control" type="text" name="name" placeholder="Insira seu nome" value="<?php echo $client['name']?>">
      </div>
      <div class="form-group mr-2">
            <input class="form-control" type="text" name="age" placeholder="Insira sua idade" value="<?php echo $client['age']?>">
      </div>
      <input type="hidden" name="update" value="1">
      <input type="hidden" name="id" value="<?php echo $id?>">
      <input class="btn btn-primary" type="submit" value="Enviar">
</form>