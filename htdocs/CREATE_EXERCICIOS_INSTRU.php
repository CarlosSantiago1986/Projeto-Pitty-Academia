<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitty</title>
    <style>
        body {
            background-color:orangered;
            color: black;
           
        }
       
    </style>
</head>
<body>

<?php
include 'conexao.php';

$id_categoria = $_POST['id_categoria'];
$nome = $_POST['nome'];


// Verifica se o valor de id_categoria é válido

$sql_check = "SELECT id_categoria FROM categoria WHERE id_categoria = '$id_categoria'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows == 0) {
    echo "Erro: O ID da categoria não existe na tabela de categorias!";
    echo "<br><br><a href='CADASTRO_EXERCI_INSTRU.php?id_aluno=999'>Voltar</a><br>";
} else {
    // Insere os dados na tabela exercicios
    $sql = "INSERT INTO exercicios (nome_exercicio, id_categoria)
    VALUE ('$nome','$id_categoria')";

    if ($conn->query($sql) === TRUE) {
        echo "Exercicio adicionado com sucesso!";
        echo "<br><br><a href= GERENCIA_EXERC_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
    } else {
        echo "Erro ao adicionar Exercicio: ".$conn->error;
        echo "<br><br><a href='GERENCIA_EXERC_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
    }
}

$conn->close();
?>

</body>