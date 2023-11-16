<?php

/* Script de conexão ao servidor de Bnaco de dados */

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "microblog_juan";

/* Usando a função msqli_connect para conectar os servidor de banco de dados */
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

/* Definido o charset da conexão também como utf8 */
mysqli_set_charset($conexao, "utf8");

/* Verificação da conexão */

/* Se não for possivel realizar a conexão */
if( !$conexao ){
    // pare a aplicação e mostre uma mensagem de erro,
    die("deu ruim".mysqli_connect_error());
}else{
    // senão, a conexão foi feita com sucesso 
    echo "Conectado";
} 







