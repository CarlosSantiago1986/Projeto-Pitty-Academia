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
aulas_grupo.nome_aula AS `AULA`,
horarios.`hr_seg` AS `SEGUNDA`,
horarios.hr_terca AS TERÇA,
horarios.hr_quarta AS QUARTA,
horarios.hr_quinta AS QUINTA,
horarios.hr_sexta AS SEXTA, 
horarios.hr_sabado AS SÁBADO,
horarios.hr_domingo AS DOMINGO
FROM horarios
JOIN aulas_grupo ON ((horarios.id_aula_grup = aulas_grupo.id_aula_grup)) ORDER BY aulas_grupo.id_aula_grup";  
       
       

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 40%; border: 3px solid black;'>";
    echo "<tr><th style='border: 3px solid black; width: 10%;'>AULA</th><th style='border: 3px solid black; width: 10%;'>SEGUNDA</th><th style='border: 3px solid black; width: 10%;'>TERÇA</th><th style='border: 3px solid black; width: 10%;'>QUARTA</th><th style='border: 3px solid black; width: 10%;'>QUINTA</th><th style='border: 3px solid black; width: 10%;'>SEXTA</th><th style='border: 3px solid black; width: 10%;'>SABADO</th><th style='border: 3px solid black; width: 10%;'>DOMINGO</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["AULA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["SEGUNDA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["TERÇA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["QUARTA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["QUINTA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["SEXTA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["SÁBADO"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["DOMINGO"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br><a href='MENU_ALUNO.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a><br>";
} else {
    echo "0 resultados";
    echo "<br><br><a href='MENU_ALUNO.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a><br>";
}

$conn->close();
?>


</boby>