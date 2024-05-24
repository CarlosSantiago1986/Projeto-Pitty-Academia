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

$sql = "SELECT
treinos.id_aluno,
exercicios.nome_exercicio AS EXERCICIO,
treinos.series AS SERIES,
treinos.repeticoes AS REPETICOES
FROM treinos
JOIN exercicios
ON treinos.id_exercicio = exercicios.id_exercicio AND treinos.classe_treino = 'A' AND treinos.id_aluno = $id_aluno
JOIN aluno
ON treinos.id_aluno = aluno.id_aluno
order by treinos.ordem ASC;";  
       
       

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 15%; border: 3px solid black;'>";
    echo "<tr><th style='border: 3px solid black; width: 10%;'>EXERCICIO</th><th style='border: 3px solid black; width: 10%;'>SERIES</th><th style='border: 3px solid black; width: 10%;'>REPETIÇÕES</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 3px solid black; width: 30%;'>".$row["EXERCICIO"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["SERIES"]."</td>";
        echo "<td style='border: 3px solid black; width: 5%;'>".$row["REPETICOES"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br><a href='MENU_TREINO_ALUN.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a><br>";
} else {
    echo "SEM TREINO A";
    echo "<br><br><a href='MENU_TREINO_ALUN.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a><br>";
}

$conn->close();
?>

</boby>