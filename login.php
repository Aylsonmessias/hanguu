<?php
require 'Model/conexao.php';

require 'Model/UsuarioDao.php';


// TESTANDO O BOTÃO DE LOGIN
if (isset($_POST['btnEntrar'])) :

    // TESTANDO SE O LOGIN E SENHA ESTÁ VAZIO

    if (isset($_POST['email']) && isset($_POST['senha'])) :

        $obUserDao = new UsuarioDao();
        $obUserDao->setLogin($_POST['email']);
        $obUserDao->setSenha($_POST['senha']);

            
        if ($obUserDao->loginUsuario() !== false ) : // VALIDANDO INFORMAÇÕES SETADAS
            $dados  = $obUserDao->loginUsuario(); 
            $id = $dados['id'];
            $_SESSION['user_login']=$id;
            $_SESSION['usuario']=$dados['nome'];
            header('Location: cardapio.php'); // REDIRECIONAMENTO DE PAGINA

        else :
            $_SESSION['user_login']=false;
            header('Location: login.php');

        endif;
    endif;



endif;



include __DIR__ . '/_includes/header.php';
include __DIR__ . '/loginView.php';
include __DIR__ . '/_includes/footer.php';
