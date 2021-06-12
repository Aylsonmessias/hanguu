<!DOCTYPE html>
<html lang="en">

<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require "Model/conexao.php";
require "Model/Pedidos.php";
include "_includes/header.php"; 




?>

<body>

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Recebos o seu Pedido!</h4>
  <p>Aêêê! Em breve ele será entregue para você!</p>
  <hr>
  
</div>

<?php foreach(getPedidos() as $p): ?>
    <div>
        <h6>Pedido cód: <?php echo $p['id'];?></h6>
        <a  class="btn btn-outline-warning btn-sm" href="p.php?pedido=<?php echo $p['id']; ?> ">Ver detalhes</a>
       
    </div>
<?php endforeach;?>

</body>

<?php
  include"_includes/footer.php"
  ?>
