

<?php 

include "_includes/header.php"
?>
<body>
<?php
include "conexao.php";

?>


    
         
         <?php
            $msg = '';
            
            if (isset($_POST['email']) && !empty($_POST['id']) 
               && !empty($_POST['senha'])) {
				
               if ($_POST[' '] == 'tutorialspoint' && 
                  $_POST['senha'] == ':senha') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      <!--
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php //echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php //echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username = tutorialspoint" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 
       -->
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Login</h5>
            <form class="form-signin" method="post"  action="paginausuario.php" id="formlogin" name="formlogin">
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
              <button class="btn btn-lg btn-primary btn-block text-uppercase" value="Logar" action="paginausuario.php" type="submit">Entrar</button>
              
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

     