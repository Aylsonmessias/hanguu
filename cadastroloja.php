<?php



require 'Model/Conexao.php';


// TESTANDO O BOTÃO DE CADASTRADO
if (isset($_POST['btnCadastrar'])) :

    $nome_loja        = $_POST['nome_loja'];
    $cnpj             = $_POST['cnpj'];
    $fone             = $_POST['fone'];
    $senha            = $_POST['senha'];
    $email            = $_POST['email'];



    // prepare sql and bind parameters
    $sql = 'INSERT INTO loja (nome_loja, cnpj ,fone, senha,email) VALUES (?,?,?,?,?)';

    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $nome_loja);
    $stmt->bindValue(2, $cnpj);
    $stmt->bindValue(3, $fone);
    $stmt->bindValue(4, $senha);
    $stmt->bindValue(5, $email);

    $stmt->execute();


    echo "usuario cadastrado com sucesso!";
endif;


include __DIR__ . '/_includes/header.php';
include __DIR__ . '/cadastrolojaView.php';
