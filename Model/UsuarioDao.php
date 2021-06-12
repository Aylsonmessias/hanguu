


<?php


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

    public function salvar($informacoes) {
        try {
        $sql = 'INSERT INTO usuario SET nome = ?, email= ?, senha = ?, situacoe_id = ?, niveis_acesso_id=?';
        $stmt = Conexao::getConn()->prepare($sql);
        return $stmt->execute($informacoes);
      
        
    } catch(PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }


    public function get($id) {
        $sql = 'SELECT * FROM usuario WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute([$id]);
        $dados = $stmt->fetch();

        return $dados;
    }


    public function update($informacoes)
    {
        $sql = 'UPDATE usuario set nome = ?, sobrenome = ?, endereco = ?, cidade = ?, cep = ?, telefone = ?, pais = ?, uf = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute($informacoes);
    }
}



?>