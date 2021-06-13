<!DOCTYPE html>
<html lang="en">

<?php
session_start();
include "_includes/header.php";
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require "Model/conexao.php";
require "Model/Pedidos.php";





?>

<body id="page-top">

<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Recebos o seu Pedido!</h4>
  <p>Em breve ele será entregue para você!</p>
  <hr>
  
  
</div>
<!-- About-->

                <div class="resume-section-content">
                    <h2 class="mb-4"> Meus<span class="text-primary"> Pedidos!</span>
                    </h2>
                    


    <head>
        
        <link href="css/stylespedidos.css" rel="stylesheet" />
    </head>
    
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Meus Pedidos</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/pedidos.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    
                    
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-3">
        
                    <?php foreach(getPedidos() as $p): ?>
                  <div>
                      <h5>Pedido Núm: <?php echo $p['id'];?></h5>
                      <a  class="btn btn-outline-warning btn-sm" href="p.php?pedido=<?php echo $p['id']; ?> ">Ver detalhes</a><br>
                    
                  </div>
              <?php endforeach;?>
                   

            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>





</body>

<?php
  include"_includes/footer.php"
  ?>
