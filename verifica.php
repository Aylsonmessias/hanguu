<?php


require 'conexao.php';

if (isset($obUserDao['loginUsuario'])&& !empty($obUserDao['loginUsuario'])): 

    require_once 'UsuarioDao.class.php';
    $u = new UsuarioDao();

    $listLogged=$u->logged($obUserDao['loginUsuario']))

    
    $nomeUser = $listLogged['nome'];

}else{
        header("location: login.php");
    }
        


?>