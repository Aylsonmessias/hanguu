<?php
session_start();

require 'Model/conexao.php';
require "Model/Produtos.php";



if (empty($_GET['id_produto'])) {
    header('Location: Carinho.php');
}

if (!in_array($_GET['id_produto'],$_SESSION['pedidos'])) {
    $_SESSION['pedidos'][] = $_GET['id_produto'];
}
header('Location: Carinho.php');

?>



