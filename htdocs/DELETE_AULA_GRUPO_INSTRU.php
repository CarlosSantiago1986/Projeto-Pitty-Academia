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

$sql = "DELETE FROM horarios WHERE id_horarios =$id_aluno; DELETE FROM aulas_grupo WHERE id_aula_grup=$id_aluno;";

if ($conn->multi_query($sql) === TRUE) {
    echo "Aula excluída com sucesso!";
    echo "<br><br><a href='GERENCIA_AULA_GR_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
} else {
    echo "Erro ao excluir usuário: " . $conn->error;
    echo "<br><br><a href='GERENCIA_AULA_GR_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
}

$conn->close();
?>
            

</body>