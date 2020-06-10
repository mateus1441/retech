<?php
session_start();
    include('../php/conexao.php');

    if (empty($_POST['usuario']) || empty($_POST['senha'])) {
        $_SESSION['camposrequeridos'] = true;
        header ('Location: index_login.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query = "SELECT usuario, senha, permissao FROM `login` WHERE usuario = '{$usuario}' and senha = md5('{$senha}')";

    $result = mysqli_query($conexao, $query);
    
    $dados = mysqli_fetch_assoc($result);
    $permissao = $dados["permissao"];

    $row = mysqli_num_rows($result);
    
    if ($row == 1){
        $_SESSION['usuario'] = $usuario;
        $_SESSION['permissao'] = $permissao;
        header ('Location: ../index.php');
        exit();
    }
    else {
        $_SESSION['nao_autenticado'] = true;
        header('Location: index_login.php');
        exit();
    }
?>