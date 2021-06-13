

<?php 
@session_start();



if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
require './../Model/conexao.php';
require './../Model/UsuarioDao.php';
require './../Model/Pedidos.php';



$pedidos = all();

$l = allLucro();

?>




<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Hanguu - Admin</title>
        <link href="styles.css" rel="stylesheet" />
        <link href="styles1.css" rel="stylesheet" />
        <link rel="icon" type="image/x-icon" href="favicon.png" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <meta charset="utf-8">

    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">Hanguu Administrador</a>

                <!-- Coded with love by Mutiullah Samim--> 
                <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">

                <div class="container h-100">
                <div class="d-flex justify-content-center h-100">
         
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Admin Hanguu</a></li>
                <a class="navbar-brand order-1 order-lg-0" href="sair.php">Sair</a>  
                </li>
                
            </ul>
        </nav>
      

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Plataforma</div>
                            <a class="nav-link" href="hanguu.com.br">
                                <div class="sb-nav-link-icon"></div>
                                <img src="logohanguu.png"/>
                            </a>
                            <div class="sb-sidenav-menu-heading">Financeiro</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Lucros
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                   
                                    <h3>R$ <?php echo array_sum(array_column($l, 'total'));?></h3>
 
                            </div>
 
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    
                        <h1 class="mt-4"> Pedidos</h1>
                        
                        
                        
                      

                       
                    
    
        <div class="table-wrapper">
        <div class="container-fluid">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Detalhes da <b>Entrega</b></h2></div>
                    <div class="col-sm-4">
                       
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover table-bordered ">
                <thead>
                    <tr>
                        
                        <th>#</th>
                        <th>Status</th>
                        <th>Entrega</th>
                        
                </thead>
                <tbody> 
                <?php foreach($pedidos as $p): ?>
                    <tr> 
                    <td><?php echo $p['id'];?> </td>   
                        <td> <div>Pedido <?php 


                            if ($p['andamento'] == 0) {
                                echo "aguardando entrega";
                                
                            } else {
                                echo "entregue!";
                            }

                                ?></td>
                                
                          <td>  
                          <?php 
                          if ($p['andamento'] == 0) {
                          echo "<a href=entregar.php?id=".$p['id'].">Confirmar Entrega</a>";
                          }
                          else {

                            echo"✔";
                          }
                          ?> 
                  
                         </td>
                        
                        
                    </tr>
                    <?php endforeach; ?>
                           
                </tbody>
            
          
                
                
            </div>
            </table> 
           
        </div>
    </div>  
  
               

            </div>
        </div>
</main>
        



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>

<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-width: 100%;
}
.table-title h2 {
    margin: 8px 0 0;
    font-size: 22px;
}
.search-box {
    position: relative;        
    float: right;
}
.search-box input {
    height: 34px;
    border-radius: 20px;
    padding-left: 35px;
    border-color: #ddd;
    box-shadow: none;
}
.search-box input:focus {
    border-color: #3FBAE4;
}
.search-box i {
    color: #a0a5b1;
    position: absolute;
    font-size: 19px;
    top: 8px;
    left: 10px;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table-striped tbody tr:nth-of-type(odd) {
    background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
    background: #f5f5f5;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table td:last-child {
    width: 130px;
}
table.table td a {
    color: #a0a5b1;
    display: inline-block;
    margin: 0 5px;
}
table.table td a.view {
    color: #03A9F4;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}    
.pagination {
    float: right;
    margin: 0 0 5px;
}
.pagination li a {
    border: none;
    font-size: 95%;
    width: 30px;
    height: 30px;
    color: #999;
    margin: 0 2px;
    line-height: 30px;
    border-radius: 30px !important;
    text-align: center;
    padding: 0;
}
.pagination li a:hover {
    color: #666;
}	
.pagination li.active a {
    background: #03A9F4;
}
.pagination li.active a:hover {        
    background: #0397d6;
}
.pagination li.disabled i {
    color: #ccc;
}
.pagination li i {
    font-size: 16px;
    padding-top: 6px
}
.hint-text {
    float: left;
    margin-top: 6px;
    font-size: 95%;
}    
</style>









