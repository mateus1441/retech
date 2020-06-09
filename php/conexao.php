<?php
    // Abrir conexao
    $servidor   = "localhost";
    $usuario    = "root";
    $senha      = "";
    $banco      = "retech";
    $conexao    = mysqli_connect($servidor,$usuario,$senha,$banco);

    // Testar conexao
    if ( mysqli_connect_errno() ) {
        die("Conexao falhou: " . mysqli_connect_errno());    
    }
?>