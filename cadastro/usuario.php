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

  <title>Cadastro usuário - Retech</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../css/agency.min.css" rel="stylesheet">

  <style>
    fieldset {
        background-color: #eeeeee;
        padding: 10px 0px 20px 0px;
    }
    .margin {
        padding: 0px 0px 20px 0px;
    }
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Retech E-Lixo</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../index.php">Inicio</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cadastro
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Usuário</a>
              <a class="dropdown-item" href="empresa.php">Empresa</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../index.php#services">Notícias</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../index.php#portfolio">Mapa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../index.php#contact">Contato</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../login/index_login.php">Entrar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class='margin'></div>
  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Cadastro de usuário</h2>
          <h3 class="section-subheading text-muted">Preencha os campos do formulário abaixo</h3>
          
          <?php if (isset($_SESSION['bdUsuario']) && $_SESSION['bdUsuario'] == true): ?>
            <div class="alert alert-success" role="alert">
              Salvo com sucesso
            </div>
          <?php elseif(isset($_SESSION['bdUsuario']) && $_SESSION['bdUsuario'] == false): ?>
            <div class="alert alert-danger" role="alert">
              Ocorreu uma falha ao tentar salvar os dados
            </div>
          <?php endif; unset($_SESSION['bdUsuario']) ?>

        </div>
      </div>

      <form action="../php/bdUsuario.php" method="POST" class="needs-validation" novalidate>
          <fieldset>
            <div class="form-group col-md-6 mb-3">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" required>
            </div>
            <div class="form-group col-md-4 mb-3">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Insira seu CPF" required>
            </div>
            <div class="form-group col-md-4 mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Insira seu email" required>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" id="endereco" name="endereco" placeholder="Insira seu endereço" required>
            </div>
            <div class="form-group col-md-3 mb-3">
                <label for="telefone">Telefone</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="Insira seu telefone" required>
            </div>
            <div class="form-group col-md-3 mb-3">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira uma senha de acesso" required>
            </div>
            <!--
            <div class="form-group col-md-4 mb-3">
                <label for="usuario">Usuário</label>
                <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                </div>
                <input type="text" class="form-control" id="usuario" placeholder="Usuário" aria-describedby="inputGroupPrepend" required>
                <div class="invalid-feedback">
                    Por favor, escolha um nome de usuário.
                </div>
                </div>
            </div>
            <div class="form-group col-md-6 mb-3">
                <label for="validationCustom03">Cidade</label>
                <input type="text" class="form-control" id="validationCustom03" placeholder="Cidade" required>
                <div class="invalid-feedback">
                Por favor, informe uma cidade válida.
                </div>
            </div>
            <div class="form-group col-md-3 mb-3">
                <label for="validationCustom04">Estado</label>
                <input type="text" class="form-control" id="validationCustom04" placeholder="Estado" required>
                <div class="invalid-feedback">
                Por favor, informe um estado válido.
                </div>
            </div>
    -->
            <div class='text-center'>
                <button class="btn btn-primary col-4" type="submit">Cadastrar</button>
            </div>
        </fieldset>
      </form>
      
    <!--
      <script>
      // Exemplo de JavaScript inicial para desativar envios de formulário, se houver campos inválidos.
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
          var forms = document.getElementsByClassName('needs-validation');
          // Faz um loop neles e evita o envio
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
    -->

    </div>
  </section>

  <!-- Footer -->
  <footer class="footer bg-dark text-light">
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

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="../js/jqBootstrapValidation.js"></script>
  <script src="../js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="../js/agency.min.js"></script>

</body>

</html>
