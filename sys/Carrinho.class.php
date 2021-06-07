<?php
class Carrinho{
  public function __construct(){
    if(!isset($_SESSION['hanguu'])){
      $_SESSION['hanguu'] = array();
    }
  }

  public function adicionarProduto($id, $qtd = 1, $form_id = null){
    if(is_null($form_id)){
      $indice = sprintf("%s:%s", (int)$id, 0);
    }else{
      $indice = sprintf("%s:%s", (int)$id, (int)$form_id);
    }

    if(!isset($_SESSION['hanguu'][$indice])){
      $_SESSION['hanguu'][$indice] = (int)$qtd;
    }
  }

  public function alterarQtd($indice, $qtd){
    if(isset($_SESSION['hanguu'][$indice])){
      if($qtd > 0){
        $_SESSION['hanguu'][$indice] = (int)$qtd;
      }
    }
  }

  public function excluirProduto($indice){
    unset($_SESSION['hanguu'][$indice]);
  }

  public function listarProdutos(){
    $retorno = array();
    foreach($_SESSION['hanguu'] as $indice => $qtd){
      list($id, $form_id) = explode(":", $indice);

      $query = BD::conn()->prepare("SELECT * FROM `produtos` WHERE id = ?");
      $query->execute(array($id));
      $resultado = $query->fetchObject();

      $retorno[$indice]['titulo'] = $resultado->titulo;
      $retorno[$indice]['preco'] = $resultado->preco;
      $retorno[$indice]['qtd'] = $qtd;
    
      $retorno[$indice]['subtotal'] = $resultado->preco * $qtd;
      $retorno[$indice]['forma'] = '';

      if($form_id > 0){
        $query_form = BD::conn()->prpare("SELECT * FROM `formas` WHERE id = ?");
        $query_form->execute(array($form_id));
        $fetchForm = $query_form->fetchObject();

        $retorno[$indice]['forma'] = $fetchForm->forma;
      }
    }
    return $retorno;
  }

  public function valorTotal(){
    $produtos = $this->listarProdutos();
    $total = 0;

    foreach($produtos as $indice => $linha){
      $total += $linha['subtotal'];
    }
    return $total;
  }
}