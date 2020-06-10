<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Retech E-Lixo</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Retech E-Lixo</a>

      <?php if (isset($_SESSION['usuario'])): ?>
        <a class="navbar-brand js-scroll-trigger text-white">Usuário: <?php echo $_SESSION['usuario'] ?></a>
      <?php endif; ?>

      <?php if (isset($_SESSION['usuario'])): ?>
        <a class="navbar-brand js-scroll-trigger text-danger" href="login/logout.php">Sair</a>
      <?php endif; ?>

      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#inicio">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cadastro
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="cadastro/usuario.php">Usuário</a>
              <a class="dropdown-item" href="cadastro/empresa.php">Empresa</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Mapa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="login/index_login.php">Entrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead" id="inicio">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in">Coleta de lixo eletrônico</div>
        <div class="intro-heading text-uppercase">Retech</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#">Empresas</a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Notícias</h2>
          <h3 class="section-subheading text-muted">sobre lixo eletrônico</h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="card" style="width: 17rem;">
          <img class="card-img-top" src="https://www.rotamaxima.com.br/wp-content/uploads/2019/01/seo-para-imagens-2.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Notícia 1</h5>
            <p class="card-text">Texto da notícia</p>
            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-primary">Visitar</a>
          </div>
        </div>
        <div class="card" style="width: 17rem;">
          <img class="card-img-top" src="https://www.rotamaxima.com.br/wp-content/uploads/2019/01/seo-para-imagens-2.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Notícia 2</h5>
            <p class="card-text">Texto da notícia</p>
            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-primary">Visitar</a>
          </div>
        </div>
        <div class="card" style="width: 17rem;">
          <img class="card-img-top" src="https://www.rotamaxima.com.br/wp-content/uploads/2019/01/seo-para-imagens-2.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Notícia 3</h5>
            <p class="card-text">Texto da notícia</p>
            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-primary">Visitar</a>
          </div>
        </div>
        <div class="card" style="width: 17rem;">
          <img class="card-img-top" src="https://www.rotamaxima.com.br/wp-content/uploads/2019/01/seo-para-imagens-2.png" alt="Imagem de capa do card">
          <div class="card-body">
            <h5 class="card-title">Notícia 4</h5>
            <p class="card-text">Texto da notícia</p>
            <a href="#portfolioModal1" data-toggle="modal" class="btn btn-primary">Visitar</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Locais para deposito de lixos eletrônicos</h2>
          <h3 class="section-subheading text-muted"></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 text-center">
          <div id="googleMap" style="width:100%;height:400px;"></div>

          <script>
            function myMap() {
            var mapProp= {
              center:new google.maps.LatLng(-7.995626,-34.927077),
              zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCUt0XCGYq9IN5s6UgN7_qAqdWw0-SgO8&callback=myMap"></script>

        </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contato</h2>
          <h3 class="section-subheading text-muted">Envie uma mensagem para nós</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Seu nome *" required="required" data-validation-required-message="Por favor, informe seu nome.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Seu Email *" required="required" data-validation-required-message="Por favor, informe seu endereço de email.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Seu telefone *" required="required" data-validation-required-message="Por favor, informe seu número de telefone.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Sua Mensagem *" required="required" data-validation-required-message="Por favor, informe sua mensagem."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Enviar mensagem</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <span class="copyright">Copyright &copy; Retech 2020</span>
        </div>
        <div class="col-md-6">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <!--
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
        -->
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Título da notícia</h2>
                <p class="item-intro text-muted">Informação complementar</p>
                <img class="img-fluid d-block mx-auto" src="https://www.rotamaxima.com.br/wp-content/uploads/2019/01/seo-para-imagens-2.png" alt="">
                <p>Texto.​</p>
                <p>Texto.​</p>
                <ul class="list-inline">
                  
                  <li>Data: Janeiro 2020</li>
                  <li>Categoria: Exemplo</li>
                  
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Amazon</h2>
                <p class="item-intro text-muted">Website e BI</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/website-amazon.webp" alt="">
                <p>A forma como a Amazon classifica as análises aos produtos, merece particular atenção. Pois nosso principal foco em criar esse website, foi em deixar as análises filtradas e classificadas de acordo com o grau de utilidade que têm e do que o usuário está buscando. Sendo uma solução excelente para os clientes deste website por garantir a disponibilidade imediata da análise mais relevante e útil para um produto em particular.​</p>
                <ul class="list-inline">
                  <!--
                  <li>Date: January 2017</li>
                  <li>Client: Explore</li>
                  <li>Category: Graphic Design</li>
                  -->
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">IBM</h2>
                <p class="item-intro text-muted">Análises de testes</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/ibm.jpg" alt="">
                <p>Aperfeicoamento das ferramentas utilizadas, era utilizada o framework Cypress, e passou a utilizar Selenium e Cucumber.</p>
                <p>Apos a implementação dos novos framerworks, foi notado que os testes estavam mais estáveis e tinha uma maior flexibilidade na criação dos testes.</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Sefaz MT</h2>
                <p class="item-intro text-muted">Plataforma</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/sefaz.jpg" alt="">
                <p>O crescente volume de requisições exigiu mudanças na organização e a adoção
                  de um caminho que simplificasse tanto o atendimento ao contribuinte como a
                  rotina dos responsáveis por acatar as suas demandas.</p>
                  <p>Com a proposta de criar uma nova experiência no acesso aos serviços
                    oferecidos pela secretaria, foi implantada uma plataforma disruptiva, que atende
                    às necessidades do negócio. Assim, houve a adoção de um portal que integra os
                    diversos serviços disponíveis ao cidadão, os sistemas e procedimentos internos,
                    com maior clareza das solicitações e do status das demandas. Desta forma, foi
                    provida não só a celeridade nos processos, como a autonomia a todos os
                    usuários.</p>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Fechar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Southwest</li>
                  <li>Category: Website Design</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Window</li>
                  <li>Category: Photography</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>

</html>
