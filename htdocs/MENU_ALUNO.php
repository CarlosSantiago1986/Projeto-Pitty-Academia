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
     aluno.id_aluno,
     aluno.nome
    from aluno WHERE aluno.id_aluno = $id_aluno";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th></tr>";
    echo"<br>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id_aluno"]."</td><td>".$row["nome"]."</td></tr><td><td><td>   
        <td/>
        | <a href='medidas.php?id_aluno=".$row["id_aluno"]."'>MEDIDAS</a> <br><br>
        | <a href='VIEW_ALU_GRUPO.php?id_aluno=".$row["id_aluno"]."'>AULAS EM GRUPO</a> <br><br>
        | <a href='MAPA_PITTY.php?id_aluno=".$row["id_aluno"]."'>MAPA</a> <br><br>
        | <a href='MENU_TREINO_ALUN.php?id_aluno=".$row["id_aluno"]."'>TREINOS</a>";
    }
    echo "</table>";



    echo "<br><br><a href='LOGIN_ALU_INDEX.html'><button type='button'>SAIR</button></a><br>";
} else {
    echo "0 resultados";
    echo "<br><br><a href='LOGIN_ALU_INDEX.html'><button type='button'>SAIR</button></a><br>";
}

$conn->close();
?>

</body>