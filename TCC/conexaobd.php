<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancoDados = "db_sportfriends";

    $conexao = mysqli_connect($servidor,$usuario,$senha,$bancoDados);

    if (mysqli_connect_errno($conexao)) {
        echo"problemas para conectar com o banco, verifique os dados";
    }
?>