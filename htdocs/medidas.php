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
            medidas.m_peso AS 'PESO(Kg)',
            medidas.m_altura AS 'ALTURA(Mt)',
            medidas.m_torax AS 'TORAX(Cm)',
            medidas.m_cintura AS 'CINTURA(Cm)',
            medidas.m_braco AS 'BRACO(cm)',
            medidas.m_coxa AS 'COXAS(Cm)',
            medidas.m_panturrilha AS 'PANTURRILHAS(Cm)',
            medidas.m_quadril AS 'QUADRIL(Cm)'
        FROM medidas
        JOIN aluno ON medidas.id_aluno =  aluno.id_aluno AND medidas.id_aluno = $id_aluno
        order by aluno.id_aluno asc";  
       
       

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 50%; border: 3px solid black;'>";
    echo "<tr><th style='border: 3px solid black; width: 10%;'>Nome</th><th style='border: 3px solid black; width: 10%;'>PESO(Kg)</th><th style='border: 3px solid black; width: 10%;'>ALTURA(Mt)</th><th style='border: 3px solid black; width: 10%;'>TORAX(Cm)</th><th style='border: 3px solid black; width: 10%;'>CINTURA(Cm)</th><th style='border: 3px solid black; width: 10%;'>BRAÇO(cm)</th><th style='border: 3px solid black; width: 10%;'>COXAS(Cm)</th><th style='border: 3px solid black; width: 10%;'>PANTURRILHAS(Cm)</th><th style='border: 3px solid black; width: 10%;'>QUADRIL(Cm)</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 3px solid black; width: 60%;'>".$row["nome"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["PESO(Kg)"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["ALTURA(Mt)"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["TORAX(Cm)"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["CINTURA(Cm)"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["BRACO(cm)"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["COXAS(Cm)"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["PANTURRILHAS(Cm)"]."</td>";
        echo "<td style='border: 3px solid black; width: 10%;'>".$row["QUADRIL(Cm)"]."</td>";
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



</body>