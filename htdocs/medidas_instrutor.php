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
aluno.nome,
medidas.m_peso AS PESO,
medidas.m_altura AS ALTURA,
medidas.m_torax AS TORAX,
medidas.m_cintura AS CINTURA,
medidas.m_braco AS BRACO,
medidas.m_coxa AS COXAS,
medidas.m_panturrilha AS PANTURRILHAS,
medidas.m_quadril AS QUADRIL
FROM medidas
JOIN aluno ON medidas.id_aluno =  aluno.id_aluno AND medidas.id_aluno = $id_aluno
order by aluno.id_aluno asc";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 60%; border: 3px solid black;'>";
    echo "<tr><th style='border: 3px solid black;'>Nome</th><th style='border: 3px solid black;'>PESO(Kg)</th><th style='border: 3px solid black;'>ALTURA(Mt)</th><th style='border: 3px solid black;'>TORAX(Cm)</th><th style='border: 3px solid black;'>CINTURA(Cm)</th><th style='border: 3px solid black;'>BRAÇO(cm)</th><th style='border: 3px solid black;'>COXAS(Cm)</th><th style='border: 3px solid black;'>PANTURRILHAS(Cm)</th><th style='border: 3px solid black;'>QUADRIL(Cm)</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 3px solid black; width: 20%;'>".$row["nome"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["PESO"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["ALTURA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["TORAX"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["CINTURA"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["BRACO"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["COXAS"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["PANTURRILHAS"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["QUADRIL"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'><button type='button'>VOLTAR</button></a><br>";
} else {
    echo "0 resultados";
    echo"<br><br><a href='CADASTRO_MEDIDAS_INSTRU.php?id_aluno=".$id_aluno."'>
<button type='button'>ADD MEDIDAS</button></a> ";
    echo "<br><br><a href='GERENCIA_ALUN_INSTRU.php?id_aluno=999'>
<button type='button'>VOLTAR</button></a><br>";

}

$conn->close();
?>


</body>