<?php require './functions/orders.php'?>
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Pedidos</h1>
                <p class="mb-4">Esta é a página de manutenção de pedidos.</p>
                  <!-- <form action="/functions/clients.php" class="form-inline mb-4" method="post">
                     <div class="form-group mr-2">
                        <input class="form-control" type="text" name="name" placeholder="Insira seu nome">
                     </div>
                     <div class="form-group mr-2">
                        <input class="form-control" type="text" name="age" placeholder="Insira sua idade">
                     </div>
                     <input class="btn btn-primary" type="submit" value="Enviar">
                  </form> -->
            
              

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Relatório de Pedidos</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <th>ID</th>
                                 <th>Cliente</th>
                                 <th>Produto</th>
                                 <th>Valor</th>
                              </thead>
                                <tbody>
                                 <?php foreach(selectOrders() as $orders):?>
                                       <tr>
                                          <td><?php echo $orders['order_id']?></td>
                                          <td><?php echo $orders['name']?></td>
                                          <td><?php echo $orders['product_name']?></td>
                                          <td><?php echo number_format($orders['product_price'], 2, ',', '.')?></td>
                                       </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>