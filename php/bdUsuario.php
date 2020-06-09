<?php
session_start();
    include('conexao_teste.php');

    $msg = false;

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    // Processamento do arquivo

    $sql_code = "INSERT INTO usuario (nome, cpf, email, endereco, telefone) VALUES('$nome', '$cpf', '$email', '$endereco', '$telefone')";
    $sql_codeLogin = "INSERT INTO login (usuario, senha, permissao) VALUES('$email', md5('$senha'), 'usuario')";

    if($mysqli->query($sql_code))
      if($mysqli->query($sql_codeLogin))
      $_SESSION['bdUsuario'] = true;
      else
      $_SESSION['bdUsuario'] = false;
    else
    $_SESSION['bdUsuario'] = false;

  
    header('Location: ../cadastro/usuario.php');
    // Fim processamento do arquivo

    //$query = "SELECT ID, usuario FROM `login` WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";
    
    //$result = mysqli_query($conexao, $query);
    
?>