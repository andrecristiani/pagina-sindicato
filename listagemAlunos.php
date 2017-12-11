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
    <title>Alunos</title>
</head>
<body>
    <div class="container">
    <div>
        <h4>Alunos:</h4>
        <div class="row">
            <?php
                include("conexao.php");

                $query = "select * from aluno";
                $result = mysqli_query($conexao, $query);

                while($row = mysqli_fetch_array($result)){
                    echo '<div class="col-md-12 row">';
                    echo '<div class="col-md-3">';
                    echo $row['nome'];
                    echo '</div>';
                    
                    echo '<div class="col-md-2">';
                    echo $row['cpf'];
                    echo '</div>';

                    echo '<div class="col-md-2">';
                    echo $row['dataNascimento'];
                    echo '</div>';

                    echo '<div class="col-md-2">';
                    echo $row['logradouro'] . ", " . $row['numero'];
                    echo '</div>';

                    echo '<div class="col-md-3">';
                    echo $row['cidade'];
                    echo '</div>';
                    echo '</div>';
                }

                mysqli_close($conexao);
            ?>
        </div>
    </div>
    </div>
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
?>