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


<h1>Pedidos</h1>
<table>
    <tr>
        <td>Produto</td>
        <td>Quantidade</td>
        <td>Valor unitario</td>
        <td>Valor Total</td>

    </tr>


    <?php foreach ($pedido as $p): ?>
        <tr>
        <?php 
        
        $situacao = $p['andamento'];
        
        ?>
        <td><?php echo $p['titulo'];?></td>
        <td><?php echo $p['quantidade'];?></td>
        <td><?php echo $p['preco'];?></td>
        <td><?php echo $p['total'];?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h5>Status: 

<?php 

if ($situacao == 0) {
    echo "Aguardando entrega";
} else {
    echo "Entregue!";
}

?>

</h5>
<h5>Valor Pedido: R$ <?php echo array_sum(array_column($pedido, 'total'));?></h5>

<?php
  include"_includes/footer.php"
  ?>



