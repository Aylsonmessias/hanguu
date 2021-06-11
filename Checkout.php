<!DOCTYPE html>
<html lang="en">

<?php


include "_includes/header.php";
require 'Model/conexao.php';
require "Model/Produtos.php";

$produtos = getProdutos( $_SESSION['pedidos']);

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
    
<form action="/checkout/revieworder/e30d0e5ce79bc52a58492b0e510e36a3" accept-charset="UTF-8" method="post" target="_top" id="checkout"><input type="hidden" name="_method" value="put" />  <div id="contacts">
      <h2 class="legend">Contato</h2>

      <div id="contacts_email" class="field text-field">
        <label for="order_customer_email">E-mail <em>*</em></label>
        <input type="email" name="order_customer[email]" id="order_customer_email" class="text" required="required" autocomplete="email" />
        
        <div id="email-suggestion"></div>

      </div>

      <div id="contacts_phone" class="field text-field">
        <label for="order_customer_phone">Telefone </label>
        <input type="tel" name="order_customer[phone]" id="order_customer_phone" class="text" autocomplete="tel" />
        
      </div>

      
  </div>

    <div id="shipping_address">

        <h2 class="legend">Endereço de Entrega</h2>
        <div id="shipping_address_name" class="field text-field">
          <label for="order_shipping_address_name">Nome <em>*</em></label>
          <input type="text" name="order_shipping_address[name]" id="order_shipping_address_name" class="text" required="required" autocomplete="given-name" />
          
        </div>
        <div id="shipping_address_surname" class="field text-field">
          <label for="order_shipping_address_surname">Sobrenome <em>*</em></label>
          <input type="text" name="order_shipping_address[surname]" id="order_shipping_address_surname" class="text" required="required" autocomplete="family-name" />
          
        </div>
        <div id="shipping_address_address" class="field text-field">
          <label for="order_shipping_address_address">Endereço <em>*</em></label>
          <input type="text" name="order_shipping_address[address]" id="order_shipping_address_address" class="text" required="required" autocomplete="street-address" />
          
        </div>
        <div id="shipping_address_city" class="field text-field">
          <label for="order_shipping_address_city">Cidade <em>*</em></label>
          <input type="text" name="order_shipping_address[city]" id="order_shipping_address_city" class="text" required="required" autocomplete="address-level2" />
          
        </div>
        <div id="shipping_address_postal" class="field text-field" style="">
          <label for="order_shipping_address_postal">CEP</label>
          <input type="text" name="order_shipping_address[postal]" id="order_shipping_address_postal" class="text" autocomplete="postal-code" />
          
        </div>

        

        <div id="shipping_address_country" class="field select-field">
          <label for="order_shipping_address_country">País<em>*</em></label>
          <select name="order_shipping_address[country]" id="order_shipping_address_country" class="select" autocomplete="country"><option value=""></option>

<option value="BR">Brasil</option>

</select>
          
        </div>

        <div id="shipping_address_region" class="field select-field">
          <label for="order_shipping_address_region">Estado <em>*</em></label>
          <select name="order_shipping_address[region]" id="order_shipping_address_region" class="select" autocomplete="address-level1"><option value=""></option>
          <option>Acre</option>
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
              <span>Retirar na loja</span>
            </li>
            <li>

              <input type="radio" name="order[shipping_method]" value="26338" id="order_shipping_method_26338" class="radiobox" />
              <span>Envio Gratis</span>
           

              
        </ul>
        
      </div>
    </div>
    <div class="actions">
      <input type="submit" value="Finalizar Pedido" class="button" id="submit_review_order" />
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

