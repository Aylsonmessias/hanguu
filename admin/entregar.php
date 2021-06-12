<?php

require './../Model/conexao.php';
require './../Model/UsuarioDao.php';
require './../Model/Pedidos.php';


if (empty($_GET['id'])) {
    echo "Erro pedido n encontrado";
    return;
}


entregar($_GET['id']);



header('Location: index.php');