

<?php 
@session_start();



if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
require './../Model/conexao.php';
require './../Model/UsuarioDao.php';
require './../Model/Pedidos.php';



$pedidos = all();

$l = allLucro();

?>


<h1>Lucro : <?php echo array_sum(array_column($l, 'total'));?></h1>

<?php foreach($pedidos as $p): ?>

    <div>

        Situaçao <?php
        
        
        if ($p['andamento'] == 0) {
            echo "para entregar";
            echo "<a href=entregar.php?id=".$p['id'].">Entregar</a>";
        } else {
            echo "Pedido entregue";
        }
        
        
        
        ?>
    </div>
<?php endforeach; ?>



<a href="sair.php">Sair</a>







