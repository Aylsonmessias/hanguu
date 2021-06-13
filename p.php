<!DOCTYPE html>
<html lang="en">

<?php
require 'Model/conexao.php';
require "Model/Produtos.php";
require "Model/UsuarioDao.php";
require "Model/Pedidos.php";
include "_includes/header.php"; 

if (empty($_GET['pedido'])) {
echo "pedido não encontrado";
    return;
}

$pedido = getPedidoId($_GET['pedido']);


if (empty($pedido)) {
    echo "Pedido não encontrado";
    return;
}

?>

<body>
<div id="layoutSidenav_content">

        
        <div class="container-fluid">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Detalhes do <b>Pedido</b></h2></div>
                    <div class="col-sm-4">
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered ">
                <thead>
                    <tr>
                        
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Valor</th>
                        <th>Subtotal</th>
                        <th>Status</th>
                    </tr>    
                </thead>
                <tbody> 
        
    <?php foreach ($pedido as $p): ?>
        
            <?php 
            
            $situacao = $p['andamento'];
            
            ?>
        <tr>
            <td><?php echo $p['titulo'];?></td>
            <td><?php echo $p['quantidade'];?></td>
            <td>R$ <?php echo $p['preco'];?></td>
            <td>R$ <?php echo $p['total'];?></td>
            <td><?php if ($situacao == 0) {
                    echo "Aguardando entrega";
                } else {
                    echo "Entregue";
                }

                ?>
        </tr> 
        <?php endforeach; ?>

             
             <table class="table table-striped">
    
              <td colspan="1" class="text-left"><strong>Total do pedido </strong></td>
              <td colspan="1" class="text-right"><strong>R$ <?php echo array_sum(array_column($pedido, 'total'));?></strong></td>    

            </tr>
            </thead>
            </table>

   







</body>
</html>

<?php
  include"_includes/footer.php"
  ?>



