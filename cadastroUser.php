<?php
include "_includes/header.php";
include "Model/conexao.php";
include "Model/UsuarioDao.php";

if (isset($_POST['btnCadastrar'])) {

  $dados = [
    $_POST['nome'],
    $_POST['email'],
    $_POST['senha'],
    0,
    0
  ];

$user = new UsuarioDao();

if($user->salvar($dados)) {
  echo '
  
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Cadastro realizado !
 
</div>
  
  ';
}

}
?>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center" >CADASTRE-SE</h5>
                  <form role="form" name="formUsuario"  method="POST" >
              <div class="form-label-group">
                
              <input type="text" id="nome"  name="nome" class="form-control" placeholder="nome do usuario" required >
                <label for="nome">Nome</label>
              </div>
              

              <div class="form-label-group">
                <input type="text" id="email" name="email" class="form-control" placeholder="email" required>
                <label for="email">E-mail</label>
              </div>
            
              
              <div class="form-label-group">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="digite sua senha" required>
                <label for="senha">Senha</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="confirsenha" name="confirsenha" class="form-control" placeholder="senha" required>
                <label for="confirsenha">Confirmar senha</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="btnCadastrar" type="submit">Cadastrar</button>
              <a class="d-block text-center mt-2 small" href="login.php">J?? ?? cadastrado? ENTRE!</a>
            
              
             
              
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
 
</body>
<?php
  include "_includes/footer.php"
  ?>