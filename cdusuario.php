<?php
    include ("conexao.php");
    $conn = connection();

    try{
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha)
    VALUES (:nome, :email, :senha)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);


    $nome                    = $_POST['nome'];
    $email                   = $_POST['email'];
    $senha                   = $_POST['senha'];
    $stmt->execute();


    echo "usuario cadastrado com sucesso!";
    } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
    }
    $conn = null;

?> 