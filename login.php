
<?php 

include "_includes/header.php"
?>
<body>
<?php
include "conexao.php";

// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['email'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.
$con = mysql_connect("localhost", "root", "") or die
 ("Sem conexão com o servidor");
$select = mysql_select_db("hanguu") or die("Sem acesso ao DB, Entre em
contato com o Administrador, gilson_sales@bytecode.com.br");

// A variavel $result pega as varias $login e $senha, faz uma
//pesquisa na tabela de usuarios
$result = mysql_query("SELECT * FROM `usuario`
WHERE `email` = '$login' AND `senha`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi
bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor
será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do
resultado ele redirecionará para a página site.php ou retornara  para a página
do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['email'] = $login;
$_SESSION['senha'] = $senha;
header('location:index.php');
}
else{
  unset ($_SESSION['login']);
  unset ($_SESSION['senha']);
  header('location:index.php');

  }
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="post" action="conexao.php" id="formlogin" name="formlogin">
            <fieldset id="fie">
              <div class="form-label-group">
                <input type="text" id="email" name ="email"class="form-control" placeholder="E-mail" required autofocus>
                <label for="email">E-mail</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                <label for="senha">Senha</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Manter-me Conectado</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" value="Logar" type="submit">Entrar</button>
              
              <a class="d-block text-center mt-2 small" href="index.php">CADASTRAR</a>
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Com o Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Com o Facebook</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
