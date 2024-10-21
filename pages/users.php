<?php 
require './functions/users.php';
require './functions/roles.php';
?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Usuários</h1>
                <p class="mb-4">Esta é a página de manutenção de usuarios.</p>
                  <form action="/functions/users.php" class="form-inline mb-4" method="post">
                     <div class="form-group mr-2">
                        <input class="form-control" type="text" name="name" placeholder="Insira seu nome">
                     </div>
                     <div class="form-group mr-2">
                        <input class="form-control" type="email" name="email" placeholder="Insira seu E-mail">
                     </div>
                     <div class="form-group mr-2">
                        <select name="role_id" class="form-control">
                           <option value="">Selecione uma permissão</option>
                           <?php foreach (selectRoles() as $role): ?>
                              <option value="<?php echo $role['role_id'] ?>"><?php echo $role['role_name']?></option>
                           <?php endforeach; ?>
                        </select>
                     </div>
                     <div class="form-group mr-2">
                        <input class="form-control" type="password" name="password" placeholder="Digite uma senha">
                     </div>
                     <input class="btn btn-primary" type="submit" value="Enviar">
                  </form>
            
              

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Cadastro de Usuários</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <th>ID</th>
                                 <th>Nome</th>
                                 <th>E-mail</th>
                                 <th>Permissões</th>
                                 <th>Ações</th>
                              </thead>
                                <tbody>
                                 <?php foreach(selectUsers() as $users):?>
                                       <tr>
                                          <td><?php echo $users['id']?></td>
                                          <td><?php echo $users['name']?></td>
                                          <td><?php echo $users['email']?></td>
                                          <td><?php echo $users['role_name']?></td>
                                          <td>
                                             <a href="/?p=edit_users&id=<?php echo $users['id']?>" rel="noopener noreferrer">Editar</a>
                                             <a href="/functions/users.php?deletar=1&id=<?php echo $users['id']?>" rel="noopener noreferrer">Deletar</a>
                                          </td>
                                       </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>