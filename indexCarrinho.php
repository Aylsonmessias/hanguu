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
  <title>Carrinho com php oo</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <ul class="lista">
    <?php
      $queryProdutos = BD::conn()->prepare("SELECT * FROM `produtos` ORDER BY id DESC");
      $queryProdutos->execute();
      while($fetchProduto = $queryProdutos->fetchObject()){
    ?>
      <li>
      <img src="imagens/<?php echo $fetchProduto->imagem;?>" alt="" width="150" height="200">
      <span><?php echo $fetchProduto->titulo;?></span>
      <a class="btn" href="single.php?produto_id=<?php echo $fetchProduto->id;?>">Ver Detalhes</a>
      </li>
     <?php
      }
    ?>
      
    </ul>
  </div>
</body>
</html>