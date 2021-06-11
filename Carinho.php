<?php


include "_includes/header.php";
require 'Model/conexao.php';
require "Model/Produtos.php";

$produtos = getProdutos( $_SESSION['pedidos']);

?>

<html>
<body>
    
    
  <!-- Page Heading -->
  <div class="col-lg-9 mb-4">
      
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="assets/img/tpedido.png" alt="" width="72" height="72">
        <h2>Carrinho de pedidos</h2>
      
        
    </div>
  </div>
  <!-- /.row -->

  

  <!-- Cart Table -->
  
  <div class="container" style="align: center">
  
    <div class="col-lg-9 mb-4">
      <form id="cart-update-form" method="post" action="/cart/update">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Produto</th>
                <th class="mob-hide"></th>
                <th class="mob-hide">Preço</th>
                <th class="mob-hide">Quantidade</th>
                <th>Subtotal</th>
                <th>Remover</th>
                <th></th>
              </tr>
            </thead>
            
            <?php if(!empty($_SESSION['pedidos'])):?>
                <?php foreach($produtos as $produto):?>
                
             
            
          </thead>
            <tr>
                  
                <td><h3><?php echo $produto['titulo'];?></h3></td>

                    <td class="mob-hide">
                  
                <td><span class="valor">R$ <?php echo $produto['preco'];?></span></td> 
                <td><span class="quantidade"> <?php echo count($_SESSION['pedidos'])?></span></td> 
                <td><span class="subtotal">R$ 6.99</span></td>
                  
                <td class="text-right"> <a href="/cart/remove_product/66109638" class="cart-product-remove" 
                title="Remove Product"><i class="fas fa-times-circle"></i></a></td> 
                      <?php endforeach;?>
                      <?php else: ?>

                      <h1>Voce nao tem pedidos</h1>
                      <?php endif; ?>

                      <div class="col-12 cart-totals">
                      <table class="table table-striped">

            
              <td colspan="1" class="text-left"><strong>Total</strong></td>
              <td colspan="1" class="text-right"><strong>R$ 100.000</strong></td>    

            </tr>
          </thead>
            
          </table>
        
            
            <a href="pedido.php" 
            class="btn btn-primary btn-block" title="Proceed to Checkout">Fazer Checkout</a>
            </div>
      </form>

            <td><a class="btn btn-secondary btn-sm"  href="#">Atualizar</a></td>            
            <td><a class="btn btn-outline-warning btn-sm"  href="cardapio.php">Continuar Comprando</a></td>     

            </div>
          </div>
        </div>
        
      </div>
    </div>

   
</form>
</bode>
</html>
    <?php
  include"_includes/footer.php"
  ?>

