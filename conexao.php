<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "sindicatoWeb";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao) die  ("Falha na conexão");
?>