<?php
session_start();
function __autoload($classe){
  require('sys/'.$classe.'.class.php');
}

BD::conn();

$carrinho = new Carrinho();

if(isset($_POST['acao']) && $_POST['acao'] == 'add'){
  $id_produto = (int)$_POST['id'];
  $qtd = (int)$_POST['qtd'];
  $forma = (isset($_POST['forma'])) ? $_POST['forma'] : null;

  $carrinho->adicionarProduto($id_produto, $qtd, $forma);
  var_dump($carrinho);
}

if(isset($_POST['atualizar'])){
  $qtd = $_POST['qtd'];

  foreach($qtd as $indice => $valor){
    $carrinho->alterarQtd($indice, $valor);
  }
}

if(isset($_GET['acao']) && $_GET['acao'] == 'del'){
  $id = $_GET['id'];
  $carrinho->excluirProduto($id);
}

$produtos = $carrinho->listarProdutos();
$total = $carrinho->valorTotal();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Carrinho com php oo - Carrrinho (cart)</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="container">
    <table class="carrinho" border="1" cellppading="0" cellspacing="0">
      <caption>Carrinho de compras</caption>
      <thead>
        <tr>
          <td>Produto</td>
          <td>Quantidade</td>
          <td>Preço</td>
          <td>Subtotal</td>
          <td>Remover</td>
        </tr>
      </thead>
      <form action="" method="post">
        <tfoot>
          <tr>
            <td colspan="4">Valor Total:</td>
            <td>R$ <?php echo number_format($total, 2, ',','.');?></td>
          </tr>
          <tr>
            <td><input class="btn reload" type="submit" name="atualizar" value="Atualizar Carrinho"></td>
            <td><a class="btn" href="index.php">Continuar Comprando</a></td>
          </tr>
        </tfoot>

        <tbody>
         <?php
          $contarProdutos = count($produtos);
          if($contarProdutos == 0){
            echo'<tr><td colspan="5">Não existem produtos no carrinho!</td></tr>';
          }else{
            foreach($produtos as $indice => $produto):
         ?>
          <tr>
            <td><?php echo $produto['titulo'];?></td>
            <td><input type="text" size="3" name="qtd[<?php echo $indice;?>]" value="<?php echo $produto['qtd'];?>"></td>
            <td>R$ <?php echo number_format($produto['preco'], 2,',','.');?></td>
            <td>R$ <?php echo number_format($produto['subtotal'], 2,',','.');?></td>
            <td><a class="btn" href="?acao=del&id=<?php echo $indice;?>">Remover</a></td>
          </tr>
            <?php endforeach; }?>
         
        </tbody>
      </form>

    </table>
  </div>
</body>
</html>