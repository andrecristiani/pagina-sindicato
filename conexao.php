<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "prova2";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao) die  ("Falha na conexão");
?>