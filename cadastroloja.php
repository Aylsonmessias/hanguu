<?php
include "_includes/header.php"
?>
<!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

<body>
  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
    
       
          <div class="card-body">
            <h5 class="card-title text-center" >CADASTRE SUA LOJA</h5>
                  <form class="form-signin">
              <div class="form-label-group">
                
              <input type="text" id="inputUserame" class="form-control" placeholder="Nome" required autofocus>
                <label for="inputUserame">Nome da Loja</label>
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
                <input type="id" id="cpf/cnpj" class="form-control" placeholder="Digite seu CPF ou CNPJ" required>
                <label for="cpf/cnpj">CPF/CNPJ</label>
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
            
            
              <a class="d-block text-center mt-2 small" href="index.php" >HOME</a>
            </form>
          </div>
        
      </div>
    </div>
  </div>
</body>
 