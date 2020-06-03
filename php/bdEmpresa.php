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

    $sql_code = "INSERT INTO empresa (nome, cnpj, email, endereco, telefone, senha) VALUES('$nome', '$cnpj', '$email', '$endereco', '$telefone', '$senha')";

    if($mysqli->query($sql_code))
      $msg = "Enviado com sucesso!";
    else
      $msg = "Falha ao enviar.";

  
    header('Location: ../cadastro/empresa.php');
    // Fim processamento do arquivo

    //$query = "SELECT ID, usuario FROM `login` WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";
    
    //$result = mysqli_query($conexao, $query);
    
?>