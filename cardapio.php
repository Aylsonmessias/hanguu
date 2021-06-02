<!DOCTYPE html>
<html lang="en">

<?php
   include "_includes/header.php"
   ?>

    <body>
       
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger"  href="index.php"><img src="assets/img/logohanguu.svg"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">A Hanguu</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cardapio.php">Cardápio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger"class="mr-3" href="#about">Como Funciona?</a></li>
                      <!--  <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tipodecadastro.php">Cadastre-se</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tipodelogin.php">Entrar</a></li> -->
                        
                        
                    </ul>

                    <div class="nav-item">
                    <label class="mr-3">Usuário</label>
                        <a href="logout.php">SAIR</a> 
                    
                    <div>
                    </div>
                </div>
            </div>
        </nav>
       


        
        <!-- Page Content-->
        <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h1 class="my-4">Cardápio</h1>
                    <div class="list-group">
                        <a class="list-group-item" href="hamburguer.php">Hamburgueres</a>
                        <a class="list-group-item" href="pizza.php">Pizzas</a>
                        <a class="list-group-item" href="esfiha.php">Esfihas</a>
                        <a class="list-group-item" href="bebida.php">Bebidas</a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
                   

     <!--Slide -->
        
   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below --> 
      <div class="carousel-item active" style="background-image: url('https://source.unsplash.com/RCAhiGJsUUE/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">First Slide</h3>
          <p class="lead">This is a description for the first slide.</p>
        </div>
      </div>

      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/wfh8dDlNFOk/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Second Slide</h3>
          <p class="lead">This is a description for the second slide.</p>
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item" style="background-image: url('https://source.unsplash.com/O7fzqFEfLlo/1920x1080')">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="display-4">Third Slide</h3>
          <p class="lead">This is a description for the third slide.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>

 <section class="py-5">
  <div class="container">
    <h1 class="font-weight-light">Half Page Image Slider</h1>
    <p class="lead">The background images for the slider are set directly in the HTML using inline CSS. The images in this snippet are from <a href="https://unsplash.com">Unsplash</a>!</p>
  </div> 
</section> 

</header> 

  <!-- Button WhastsApp-->
  <div>
                <a href="https://chat.whatsapp.com/HjE3yo1NCe0KJiJRBhhwSw" class="whatsapp-button"
                    target="_blank">
                <img  src="assets/img/whatsApp.png" alt="botão whatsaap"/>
            </a>
            </div>

      
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


    

    </body>

</html>
<?php
  include"_includes/footer.php"
  ?>
