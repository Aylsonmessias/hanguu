<?php
session_start();

class UsuarioDao
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
    public function loginUsuario()
    {
        $sql = 'SELECT * FROM usuario WHERE email= ? AND senha = ?';
        

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1, $this->getLogin());
        $stmt->bindValue(2, $this->getSenha());

        $stmt->execute();
        $dados=$stmt->fetch();

        if (!empty($dados)) :
            return $dados;
            
        else :
            return false;
        endif;


    }
}



?>