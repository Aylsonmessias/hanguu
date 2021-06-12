<!DOCTYPE html>
<html lang="en">

<?php


ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


include "_includes/header.php";
require 'Model/conexao.php';
require "Model/Produtos.php";
require "Model/UsuarioDao.php";
require "Model/Pedidos.php";

$produtos = getProdutos($_SESSION['pedidos']);


$usuario = new UsuarioDao();


$dados_user = $usuario->get($_SESSION['user_login']);

if (isset($_POST['pedido'])) {
    $dados =  [
      $_POST['nome'],
      $_POST['sobrenome'],
      $_POST['endereco'],
      $_POST['cidade'],
      $_POST['cep'],
      $_POST['telefone'],
      $_POST['pais'],
      $_POST['uf'],
      $_SESSION['user_login']
      
    ];


    $usuario->update($dados);

    $produtos = getProdutos($_SESSION['pedidos']);
    $id = criarPedido($_SESSION['user_login']);
    foreach ($produtos as $produto) {
      $qtd = 0;
      foreach($_SESSION['pedidos'] as $p) {
      
       if (in_array($p, array_column($produtos, 'id')) and $p == $produto['id'] ){


         
         $qtd++;
       }
      }

      $total = $produto['preco'] * $qtd;

      $dados = [
        $total,
        $produto['id'],
        $qtd,
        $id
      ];



     salvarPedido($dados);


    }
    unset($_SESSION['pedidos']);
    header("Location: meuspedidos.php");
}


?>



<body>

<br>


    <div class="container">
  <!-- Page Heading -->
  <div class="row">
    <div class="col-12 mb-4">
      <h1 class="page-header">Checkout</h1>
    </div>
  </div>

  <!-- Checkout Container -->
  <div class="checkout-container">
    
<form action="Checkout.php" accept-charset="UTF-8" method="post" target="_top" id="checkout"><input type="hidden" name="_method" value="put" />  <div id="contacts">
      <h2 class="legend">Contato</h2>



      <div id="contacts_phone" class="field text-field">
        <label for="order_customer_phone">Telefone </label>
        <input type="tel" name="telefone" id="order_customer_phone" class="text" autocomplete="tel"value="<?php echo $dados_user['telefone'];?> " />
        
      </div>

      
  </div>

    <div id="shipping_address">

        <h2 class="legend">Endereço de Entrega</h2>
        <div id="shipping_address_name" class="field text-field">
          <label for="order_shipping_address_name">Nome <em>*</em></label>
          <input type="text" name="nome" id="order_shipping_address_name" class="text" required="required" autocomplete="given-name" value="<?php echo $dados_user['nome'];?>" />
          
        </div>
        <div id="shipping_address_surname" class="field text-field">
          <label for="order_shipping_address_surname">Sobrenome <em>*</em></label>
          <input type="text" name="sobrenome" id="order_shipping_address_surname" class="text" required="required" autocomplete="family-name"  value="<?php echo $dados_user['sobrenome'];?> "/>
          
        </div>
        <div id="shipping_address_address" class="field text-field">
          <label for="order_shipping_address_address">Endereço <em>*</em></label>
          <input type="text" name="endereco" id="order_shipping_address_address" class="text" required="required" autocomplete="street-address" value="<?php echo $dados_user['endereco'];?>"/>
          
        </div>
        <div id="shipping_address_city" class="field text-field">
          <label for="order_shipping_address_city">Cidade <em>*</em></label>
          <input type="text" name="cidade" id="order_shipping_address_city" class="text" required="required" autocomplete="address-level2" value="<?php echo $dados_user['cidade'];?>"/>
          
        </div>
        <div id="shipping_address_postal" class="field text-field" style="">
          <label for="order_shipping_address_postal">CEP</label>
          <input type="text" name="cep" id="order_shipping_address_postal" class="text" autocomplete="postal-code" value="<?php echo $dados_user['cep'];?>"/>
          
        </div>

        

        <div id="shipping_address_country" class="field select-field">
          <label for="order_shipping_address_country">País<em>*</em></label>
          <select name="pais" value="<?php echo $dados_user['pais'];?>" id="order_shipping_address_country" class="select"><option value=""></option>

<option value="Brasil" selected>Brasil</option>

</select>
          
        </div>

        <div id="shipping_address_region" class="field select-field">
          <label for="order_shipping_address_region">Estado <em>*</em></label>
          <select name="uf" value="<?php echo $dados_user['uf'];?> id="order_shipping_address_region" class="select" autocomplete="address-level1"><option value=""></option>
                  <option value="Acre">Acre</option>
                  <option>Alagoas</option>
                  <option>Amapá</option>
                  <option>Amazonas</option>
                  <option>Bahia</option>
                  <option>Ceará</option>
                  <option>Distrito Federal</option>
                  <option>Espírito Santo</option>
                  <option>Goiás</option>
                  <option>Maranhão</option>
                  <option>Mato Grosso</option>
                  <option>Mato Grosso do Sul</option>
                  <option>Minas Gerais</option>
                  <option>Pará</option>
                  <option>Paraíba</option>
                  <option>Paraná</option>
                  <option>Pernambuco</option>
                  <option>Piauí</option>
                  <option>Rio de Janeiro</option>
                  <option>Rio Grande do Sul</option>
                  <option>Rio Grande do Norte</option>
                  <option>Rondônia</option>
                  <option>Roraima</option>
                  <option>Santa Catarina</option>
                  <option>São Paulo</option>
                  <option>Sergipe</option>
                  <option>Tocantins</option>
</select>
          
        </div>

       
          
        </div>

       

  <div id="billing_address" style='display:none;'>

      <h2 class="legend">Billing Address</h2>
      <div id="billing_address_name" class="field text-field">
        <label for="order_billing_address_name">Nome <em>*</em></label>
        <input type="text" name="order_billing_address[name]" id="order_billing_address_name" class="text" autocomplete="given-name" />
        
      </div>
      <div id="billing_address_surname" class="field text-field">
        <label for="order_billing_address_surname">Sobrenome<em>*</em></label>
        <input type="text" name="order_billing_address[surname]" id="order_billing_address_surname" class="text" autocomplete="family-name" />
        
      </div>
      <div id="billing_address_address" class="field text-field">
        <label for="order_billing_address_address">Endereço <em>*</em></label>
        <input type="text" name="order_billing_address[address]" id="order_billing_address_address" class="text" autocomplete="street-address" />
        
      </div>
      <div id="billing_address_city" class="field text-field">
        <label for="order_billing_address_city">Cidade <em>*</em></label>
        <input type="text" name="order_billing_address[city]" id="order_billing_address_city" class="text" autocomplete="address-level2" />
        
      </div>
      <div id="billing_address_postal" class="field text-field" style="">
        <label for="order_billing_address_postal">CEP </label>
        <input type="text" name="order_billing_address[postal]" id="order_billing_address_postal" class="text" autocomplete="postal-code" />
        
      </div>

      

      <div id="billing_address_country" class="field select-field">
        <label for="order_billing_address_country">Country <em>*</em></label>
        <select name="order_billing_address[country]" id="order_billing_address_country" class="select" autocomplete="country"><option value=""></option>
<option value="BR">Brasil</option>
</select>
        
      </div>
      <div id="billing_address_region" class="field select-field">
        <label for="order_billing_address_region">Estado <em>*</em></label>
        <select name="order_billing_address[region]" id="order_billing_address_region" class="select" autocomplete="address-level1"><option value=""></option>
</select>
        
      </div>
      <div id="billing_address_municipality" class="field select-field" style="display: none;">
        <label for="order_billing_address_municipality" style="display: none;">Cidade <em>*</em></label>
        <select name="order_billing_address[municipality]" id="order_billing_address_municipality" class="select" style="display: none;" autocomplete="address-level3"><option value=""></option>
</select>
        
      </div>

  </div>


  <p class="required">* Campos Obrigatórios</p>

  <div id="payments">
    <h2 class="legend">Forma de Pagamento</h2>
    <div id="payments_options">
      <ul>
        <li>
          <input type="radio" name="order[payment_method]" value="27792" id="order_payment_method_27792" class="radiobox" checked="checked" onclick="hidePaymentInformation(), document.getElementById('pi27792').style.display = ''" />
          <span>Pagamento na Entrega</span>
          <div id="pi27792" class="payment_information" >
           

      
    </div>
  </div>

    <div id="shipping">
      <h2 class="legend">Opções de Entrega</h2>
      <div id="shipping_options">
        <ul>
            <li>

              <input type="radio" name="order[shipping_method]" value="25573" id="order_shipping_method_25573" class="radiobox" checked="checked" />
              <span>Envio Grátis</span>
            </li>
            
           

              
        </ul>
        
      </div>
    </div>
    <div class="actions">
      <input type="submit" value="Finalizar Pedido" name="pedido"class="button" id="submit_review_order" />
    </div>
</form>
 

    
  </div>
</div>


    <script src="//cdn.jsdelivr.net/bootstrap.filestyle/1.1.0/js/bootstrap-filestyle.min.js"></script>
    <script src="https://assets.jumpseller.com/store/bootstrap/themes/382017/main.js?1619113824"></script>

  </body>

</html>
<?php
  include"_includes/footer.php"
  ?>

