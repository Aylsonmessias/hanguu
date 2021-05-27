<?php
include "_includes/header.php";
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
              <a class="d-block text-center mt-2 small" href="login.php">Já é cadastrado? ENTRE!</a>
            
              
              <!-- <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Com o Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Com o Facebook</button> -->
            
              
            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
 
</body>
 