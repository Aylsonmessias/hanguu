<?php
require 'Model/AdminDao.php';


// TESTANDO O BOTÃO DE LOGIN
if (isset($_POST['btnEntrar'])) :

    // TESTANDO SE O LOGIN E SENHA ESTÁ VAZIO

    if (isset($_POST['email']) && isset($_POST['senha'])) :

        $obAdminDao = new AdminDao();
        $obAdminDao->setLogin($_POST['email']);
        $obAdminDao->setSenha($_POST['senha']);


        if ($obAdminDao->loginAdmin() == 1) : // VALIDANDO INFORMAÇÕES SETADAS

            header('Location: indexdash.php'); // REDIRECIONAMENTO DE PAGINA

        else :
            header('Location: loginadmin.php');

        endif;
    endif;



endif;



include __DIR__ . '/_includes/header.php';
include __DIR__ . '/loginView.php';
include __DIR__ . '/_includes/footer.php';
