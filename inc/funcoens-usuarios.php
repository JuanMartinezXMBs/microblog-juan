<?php
require "conecta.php";
                        //PARÂMETROS
function inserirUsuario($conexao, $email, $nome, $senha, $tipo){

    /* Montando uma variavel com o comando SQL de INSERT e com os dados (PARÂMETROS) recebidos peka função */
    $sql = "INSERT INTO usuarios(nome, email, senha, tipo)
    VALUES('$nome','$email','$senha','$tipo')";

    /* Execute o comando SQL */
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
};

