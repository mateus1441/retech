<?php
session_start();
    include('conexao_teste.php');

    $msg = false;

    $nome = $_POST['nome'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $senha = $_POST['senha'];
    
    // Processamento do arquivo

    $sql_code = "INSERT INTO empresa (nome, cnpj, email, endereco, telefone) VALUES('$nome', '$cnpj', '$email', '$endereco', '$telefone')";
    $sql_codeLogin = "INSERT INTO login (usuario, senha, permissao) VALUES('$email', md5('$senha'), 'empresa')";

    if($mysqli->query($sql_code))
      if($mysqli->query($sql_codeLogin))
      $_SESSION['bdEmpresa'] = true;
      else
      $_SESSION['bdEmpresa'] = false;
    else
    $_SESSION['bdEmpresa'] = false;

  
    header('Location: ../cadastro/empresa.php');
    // Fim processamento do arquivo

    //$query = "SELECT ID, usuario FROM `login` WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";
    
    //$result = mysqli_query($conexao, $query);
    
?>