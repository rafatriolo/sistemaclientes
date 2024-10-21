<?php require './functions/clients.php'?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Clientes</h1>
                <p class="mb-4">Esta é a página de manutenção de clientes.</p>
                  <form action="/functions/clients.php" class="form-inline mb-4" method="post">
                     <div class="form-group mr-2">
                        <input class="form-control" type="text" name="name" placeholder="Insira seu nome">
                     </div>
                     <div class="form-group mr-2">
                        <input class="form-control" type="text" name="age" placeholder="Insira sua idade">
                     </div>
                     <input class="btn btn-primary" type="submit" value="Enviar">
                  </form>
            
              

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Cadastro de Clientes</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <th>ID</th>
                                 <th>Nome</th>
                                 <th>Idade</th>
                                 <th>Ações</th>
                              </thead>
                                <tbody>
                                 <?php foreach(selectClients() as $clients):?>
                                       <tr>
                                          <td><?php echo $clients['client_id']?></td>
                                          <td><?php echo $clients['name']?></td>
                                          <td><?php echo $clients['age']?> anos</td>
                                          <td>
                                             <a href="/?p=edit_clients&id=<?php echo $clients['client_id']?>" rel="noopener noreferrer">Editar</a>
                                             <a href="/functions/clients.php?deletar=1&id=<?php echo $clients['client_id']?>" rel="noopener noreferrer">Deletar</a>
                                          </td>
                                       </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>