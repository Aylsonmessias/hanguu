<?php



require 'Model/Conexao.php';


// TESTANDO O BOTÃO DE CADASTRADO
if (isset($_POST['btnCadastrar'])) :

    $nome        = $_POST['nome'];    
    $senha            = $_POST['senha'];
    $email            = $_POST['email'];



    // prepare sql and bind parameters
    $sql = 'INSERT INTO usuario (nome,senha,email) VALUES (?,?,?)';

    $stmt = Conexao::getConn()->prepare($sql);
    $stmt->bindValue(1, $nome);
    
   
    $stmt->bindValue(2, $senha);
    $stmt->bindValue(3, $email);

    $stmt->execute();


    echo "usuario cadastrado com sucesso!";
endif;


include __DIR__ . '/_includes/header.php';
include __DIR__ . '/cadastroUser.php';
