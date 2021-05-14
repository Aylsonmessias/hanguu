<?php
session_start();
require 'Conexao.php';


class AdminDao
{


    private $login, $senha;

    // METODOS RESPONSAVEIS POR RECEBER A INFORMAÇÃO
    public function setLogin($login)
    {
        $this->login = $login;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }


    // METODOS RESPONSAVEIS POR RETORNA A INFORMAÇÃO
    public function getLogin()
    {
        return $this->login;
    }
    public function getSenha()
    {
        return $this->senha;
    }


    // METODO RESPONSAVEL POR VALIDAR O LOGIN DO USUÁRIO
    public function loginAdmin()
    {
        $sql = 'SELECT * FROM loja WHERE email= ? AND senha = ?';
        

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $this->getLogin());
        $stmt->bindValue(2, $this->getSenha());

        $stmt->execute();

        if ($stmt->rowCount() > 0) :
            
            $dados = 1;
        else :
            $dados = 2;
        endif;

        return $dados;
    }
}
