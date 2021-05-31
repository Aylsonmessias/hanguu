<?php
require 'Model/UsuarioDao.php';


// TESTANDO O BOTÃO DE LOGIN
if (isset($_POST['btnEntrar'])) :

    // TESTANDO SE O LOGIN E SENHA ESTÁ VAZIO

    if (isset($_POST['email']) && isset($_POST['senha'])) :

        $obUserDao = new UsuarioDao();
        $obUserDao->setLogin($_POST['email']);
        $obUserDao->setSenha($_POST['senha']);


        if ($obUserDao->loginUsuario() == 1) : // VALIDANDO INFORMAÇÕES SETADAS

            header('Location: index.php'); // REDIRECIONAMENTO DE PAGINA

        else :
            header('Location: login.php');

        endif;
    endif;



endif;



include __DIR__ . '/_includes/header.php';
include __DIR__ . '/loginView.php';
include __DIR__ . '/_includes/footer.php';
