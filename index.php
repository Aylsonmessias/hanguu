

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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">A Hanguu</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cardapio.php">Cardápio</a></li>
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
   

 <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Bem vindos a melhor plataforma de </div>
                <div class="masthead-heading text-uppercase">Delivery!</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="login.php">Fazer Pedido</a>
            
            </div>

</header> 




       
       


        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Cardápio</h2>
                    <h3 class="section-subheading text-muted">Conheça toda a nossa variedade!</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/hamburguer.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Humbúrgueres</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/pizza.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Pizzas</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/esfiha.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Esfihas</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/batata.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Outros Lanches</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/refeição.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Refeições</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/bebidas.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Bebidas</div>
                                <div class="portfolio-caption-subheading text-muted"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- Services-->
<section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Quem somos?</h2>
                    <!-- <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3> -->
                </div>
                <!-- <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span> -->
                       <!-- <h4 class="my-3"></h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span> -->
                        <h4 class="my-3">A Hanguu é uma plataforma de delivery que
                                        tem como objetivo ajudar pequenos e médios 
                                        negócios a inserirem a sua loja no mundo digital
                                         e trazer comodidade para quem deseja aquele 
                                         pedido de forma rápida.</h4>
                       <!-- <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span> 
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p> -->
                    </div>
                </div>

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
                    <h3 class="section-subheading text-muted">Siga o passo a passo.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Acesse o site</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><!-- --></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/2.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Inscreva-se</h4>
                                <h4 class="subheading"></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><!-- --></p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/3.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Cadastre</h4>
                                <h4 class="subheading"> sua Loja</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><!-- --></p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.png" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Adicione o </h4>
                                <h4 class="subheading">Cardápio</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><!-- --></p></div>
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

