<?php
//session_start();
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require './../Model/conexao.php';
require './../Model/UsuarioDao.php';

if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $obUserDao = new UsuarioDao();
        $obUserDao->setLogin($email);
        $obUserDao->setSenha($senha);

            
        if ($obUserDao->loginUsuario() !== false ) : // VALIDANDO INFORMAÇÕES SETADAS
            $dados  = $obUserDao->loginUsuario(); 
            $id = $dados['id'];
            echo "aqui";
            $_SESSION['admin']=$id;
            
            header('Location: index.php'); // REDIRECIONAMENTO DE PAGINA

        else :
            
           header('Location: login.php');

        endif;
}
?>
