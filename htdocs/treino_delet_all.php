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

$id_aluno = $_GET['id_aluno'];

//$sql_id = "";
//$result_id = $conn->query($result_id);

$sql_check = "SELECT id_aluno FROM treinos WHERE id_aluno = '$id_aluno'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows == 0) {
    echo "Erro: ALUNO NÃO TEM TREINO REGISTRADO!";
    echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
} else {
    // Insere os dados na tabela treino
    $sql = "DELETE FROM treinos WHERE id_aluno = '$id_aluno';";

    if ($conn->query($sql) === TRUE) {
        echo "Treino excluido com sucesso!";
        echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
    } else {
        echo "Erro ao excluir Treino: " . $conn->error;
        echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
    }
}

$conn->close();
?>
</body>
