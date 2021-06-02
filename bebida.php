<!DOCTYPE html>
<html lang="en">

<?php
   include "_includes/header.php"
   ?>

<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cardápio</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
       
        <!-- Navigation-->
      <!--  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#!">
                                Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->

        <!-- Page Content-->
        <header class="masthead">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <h1 class="my-4"><a href="cardapio.php">Cardápio</a></h1>
                    <div class="list-group">
                        <a class="list-group-item" href="hamburguer.php">Hamburgueres</a>
                        <a class="list-group-item" href="pizza.php">Pizzas</a>
                        <a class="list-group-item" href="esfiha.php">Esfihas</a>
                        <a class="list-group-item" href="bebida.php">Bebidas</a>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="carousel slide my-4" id="carouselExampleIndicators" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="First slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Second slide" /></div>
                            <div class="carousel-item"><img class="d-block img-fluid" src="https://via.placeholder.com/900x350" alt="Third slide" /></div>
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
                    
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <img class="card-img-top" src="assets\img\cardapio\cocalata.png" alt="coca"></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Coca-Cola</a></h4>
                                    
                                    <p class="card-text">Lata 350ml</p>
                                    <h5>R$ 2,99</h5>
                                </div>
                                <div class="card-footer"><small class="btn btn-block btn-primary text-uppercase" href="#contact" >ADD Carrinho</small></div>
                                
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <img class="card-img-top" src="assets\img\cardapio\fantalata.png" alt="fanta" /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Fanta</a></h4>
                                    
                                    <p class="card-text">Lata 350ml</p>
                                    <h5>R$ 2,49</h5>
                                </div>
                                
                                <div class="card-footer"><small class="btn btn-block btn-primary text-uppercase" href="#contact" >ADD Carrinho</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <img class="card-img-top" src="assets\img\cardapio\cajuinalata.png" alt="cajuina" /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Cajuína</a></h4>
                                    
                                    <p class="card-text">Lata 350ml</p>
                                    <h5>R$ 2,49</h5>
                                </div>
                                <div class="card-footer"><small class="btn btn-block btn-primary text-uppercase" href="#contact" >ADD Carrinho</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="assets\img\cardapio\coca1l.png" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Coca-Cola</a></h4>
                                    
                                    <p class="card-text">1 Litro</p>
                                    <h5>R$ 6,99</h5>
                                </div>
                                <div class="card-footer"><small class="btn btn-block btn-primary text-uppercase" href="#contact" >ADD Carrinho</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="assets\img\cardapio\fanta1l.png" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Fanta</a></h4>
                                    
                                    <p class="card-text">1 Litro</p>
                                    <h5>R$ 5,99</h5>
                                </div>
                                <div class="card-footer"><small class="btn btn-block btn-primary text-uppercase" href="#contact" >ADD Carrinho</small></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card h-100">
                                <a href="#!"><img class="card-img-top" src="assets\img\cardapio\cajuina1l.png" alt="..." /></a>
                                <div class="card-body">
                                    <h4 class="card-title"><a href="#!">Cajuína</a></h4>
                                    <p class="card-text">1 Litro</p>
                                    <h5>R$ 5,99</h5>
                                </div>
                                <div class="card-footer"><small class="btn btn-block btn-primary text-uppercase" href="#contact" >ADD Carrinho</small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
