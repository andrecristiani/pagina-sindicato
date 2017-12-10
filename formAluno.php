<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="lib/bootstrap/css/style.css"/>
    <script src="lib/jquery/jquery.min.js"></script>
    <title>Cadastro de Alunos</title>
</head>
<body>
    <section class="container">
        <div class="row">
        <div class="col-md-12">
        <h3>Novo Aluno:</h3>
        <div class="col-md-6">
        <form method="POST">
        <div class="form-group">
            <label>Nome: </label>
            <input type="text" class="form-control" id="nomeAluno" name="nome" placeholder="Nome"/>
        </div>
        <div class="row">
                <div class="form-group col-md-4">
                    <label>CPF: </label>
                    <input type="text" class="form-control" id="cpfAluno" name="cpf" placeholder="CPF"/>
                </div>
                <div class="form-group col-md-4">
                    <label>RG: </label>
                    <input type="text" class="form-control" id="RGAluno" name="rg" placeholder="RG"/>
                </div>
                <div class="form-group col-md-4">
                        <label>Data de Nascimento: </label>
                        <input type="date" class="form-control" name="nascimento" id="nascimentoAluno"/>
                </div>
        </div>
            <div class="row">
                <div class="form-group col-md-7">
                    <label>Logradouro: </label>
                    <input type="text" class="form-control" id="logradouroAluno" name="logradouro" placeholder="Logradouro"/>
                </div>
                <div class="form-group col-md-2">
                    <label>Número: </label>
                    <input type="number" class="form-control" id="numeroAluno" name="numero" placeholder="Nº"/>
                </div>
                <div class="form-group col-md-3">
                    <label>Complemento: </label>
                    <input type="text" class="form-control" id="complementoAluno" name="complemento" placeholder="Complemento"/>
                </div>
            </div>
             <div class="row">
                <div class="form-group col-md-3">
                    <label>Bairro: </label>
                    <input type="text" class="form-control" id="bairroAluno" name="bairro" placeholder="Bairro"/>
                </div>
                <div class="form-group col-md-3">
                    <label>CEP: </label>
                    <input type="number" class="form-control" id="cepAluno" name="cep" placeholder="00000-000"/>
                </div>
                <div class="form-group col-md-3">
                    <label>Cidade: </label>
                    <input type="text" class="form-control" id="cidadeAluno" name="cidade" placeholder="Cidade"/>
                </div>
                <div class="form-group col-md-3">
                    <label>Estado: </label>
                    <select id="cbCidade" class="form-control" name="estado" id="estadoAluno"/>
                    <option>SP</option>
                    <option>MG</option>
                    <option>RJ</option>
                    <option>ES</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
            </br>
            </br>
            </br>
            <button> <a href="areaUsuario.html">Voltar</a></button>
            </form>
        </div>
        </div>
        </div>
    </section>
</body>
</html>


<?php
    include("conexao.php");
    extract($_REQUEST, EXTR_OVERWRITE);

    if(isset($nome)){
        $query = "insert into aluno(nome, cpf, rg, dataNascimento, logradouro, numero, complemento, bairro, cep, cidade, estado) values ('$nome', '$cpf', '$rg', '$nascimento', '$logradouro', '$numero', '$complemento', '$bairro', '$cep', '$cidade', '$estado')";
        $result = mysqli_query($conexao, $query);

        if($result)
            echo "Cadastro inserido com sucesso!";
        else
            echo "Erro ao cadastrar produto!";
        }
    }
?>