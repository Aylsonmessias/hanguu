

<!DOCTYPE html>
<html lang="en">

<?php
   include "_includes/header.php"
   ?>
        
    <!-- Navigation-->
<body id="page-top">
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger"  href="index.php"><img src="assets/img/logohanguu.svg"/></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cardapio.php">Cardápio</a></li>
                        
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">A Hanguu</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger"class="mr-3" href="#about">Como Funciona?</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tipodecadastro.php">Cadastre-se</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="tipodelogin.php">Entrar</a></li>
                        
                        
                    </ul>
                    <!--
                    <div class="nav-item">
                    <label class="mr-3">Usuário</label>
                        <a href="logout.php">SAIR</a> -->
                    
                    <div>
                    </div>
                </div>
            </div>
        </nav>
   
<!-- Inicio -->

 <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bem vindos a melhor plataforma de </div>
                <div class="masthead-heading text-uppercase">Delivery!</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="cardapio.php">Fazer Pedido</a>
            
            </div>

</header> 




       
       


        
    
<!-- Quem somos-->
<section class="corpo" id="services">
            <div class="container">
                <div class="text-left">
                    <h2 class="section-heading text-uppercase">Quem somos?</h2>
                   <br>
                </div>
                
                        <h4 class="my-2">
                        <p><img src="assets/img/logocorpo.png" width="350" align="right">
                            A Hanguu é uma plataforma de delivery que<br/>
                            tem como objetivo ajudar pequenos e médios<br/>
                            negócios a inserirem a sua loja no mundo digital<br/>
                            e trazer comodidade para quem deseja aquele<br/>
                            pedido de forma rápida.</p></h4>
                            

      <!-- Button WhastsApp-->
            <div>
                <a href="https://chat.whatsapp.com/HjE3yo1NCe0KJiJRBhhwSw" class="whatsapp-button"
                    target="_blank">
                <img  src="assets/img/whatsApp.png" alt="botão whatsaap"/>
            </a>
            </div>
            </div>
        </section>


        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Como funciona?</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Acesse o site</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Inscreva-se</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Cadastre</h4>
                                <h4 class="subheading"> sua Loja</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Adicione o </h4>
                                <h4 class="subheading">Cardápio</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                               
                                <br />
                                Pronto!
                                <br />
                                
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    
       <?php
       include "_includes/footer.php"
       
       ?>
   
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>