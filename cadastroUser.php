<?php
include "_includes/header.php"
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
                  <form class="form-signin">
              <div class="form-label-group">
                
              <input type="text" id="inputUserame" class="form-control" placeholder="Nome" required autofocus>
                <label for="inputUserame">Nome</label>
              </div>

              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required>
                <label for="inputEmail">E-mail</label>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputtext" class="form-control" placeholder="Endereço" required>
                <label for="inputtext">Endereço</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputPassword" class="form-control" placeholder="digite sua senha" required>
                <label for="inputPassword">Senha</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                <label for="inputConfirmPassword">Confirmar senha</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Cadastar</button>
              <a class="d-block text-center mt-2 small" href="login.php">REALIZAR LOGIN</a>
            
              
              <hr class="my-4">
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Com o Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Com o Facebook</button>
            
              <a class="d-block text-center mt-2 small" href="index.php" >HOME</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
 