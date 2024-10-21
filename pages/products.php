<?php require './functions/products.php'?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Produtos</h1>
                <p class="mb-4">Esta é a página de manutenção de produtos.</p>
                  <form action="/functions/products.php" class="form-inline mb-4" method="post">
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
                        <h6 class="m-0 font-weight-bold text-primary">Cadastro de Produtos</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <th>ID</th>
                                 <th>Título</th>
                                 <th>Valor</th>
                                 <th>Ações</th>
                              </thead>
                                <tbody>
                                 <?php foreach(selectProducts() as $products):?>
                                       <tr>
                                          <td><?php echo $products['product_id']?></td>
                                          <td><?php echo $products['product_name']?></td>
                                          <td>R$ <?php echo number_format($products['product_price'], 2, ',', '.')?></td>
                                          <td>
                                             <a href="/?p=edit_products&id=<?php echo $products['product_id']?>" rel="noopener noreferrer">Editar</a>
                                             <a href="/functions/products.php?deletar=1&id=<?php echo $products['product_id']?>" rel="noopener noreferrer">Deletar</a>
                                          </td>
                                       </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>