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

$id_exercicio = $_GET['id_exercicio'];

$sql = "DELETE FROM exercicios WHERE id_exercicio = $id_exercicio";

if ($conn->query($sql) === TRUE) {
    echo "exercicio excluído com sucesso!";
    echo "<br><br><a href='VIEW_ALL_EXERCI_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
} else {
    echo "Erro ao excluir exercicio: " . $conn->error;
    echo "<br><br><a href='GERENCIA_EXERC_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
}

$conn->close();
?>
            



</body>