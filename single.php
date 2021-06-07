<?php
function __autoload($classe){
  require('sys/'.$classe.'.class.php');
}
BD::conn();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carrinho com php oo - Produto</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
  <?php
  $id_produto = (int)$_GET['produto_id'];
  $produto_single = BD::conn()->prepare("SELECT * FROM `produtos` WHERE id = ?");
  $produto_single->execute(array($id_produto));

  while($dados_produto = $produto_single->fetchObject()){

  ?>  
    <div class="produto_single">
    
      <span><?php echo $dados_produto->titulo;?></span>
      <span class="valor">R$ <?php echo number_format($dados_produto->preco, 2, ',', '.');?></span>

      <div class="box">
        <form action="carrinho.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="qtd" value="1" size="3">
          <input type="hidden" name="id" value="<?php echo $id_produto;?>">
          <input type="hidden" name="acao" value="add">
          <input type="submit" name="comprar" value="Adicionar ao carrinho">
        </form>
    </div>
    </div>
    <?php
    }
    ?>
  </div>
</body>
</html>