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
        id_categoria AS ID,
        categoria.categoria AS CATEGORIA
         FROM categoria
    ORDER BY id_categoria ASC";


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<table style='border-collapse: collapse; width: 40%; border: 1px solid black;'>";
   echo "<tr><th style='border: 3px solid black;'>ID</th><th style='border: 3px solid black;'>CATEGORIA</th><th style='border: 3px solid black;'>AÇÃO</th></tr>";

    while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td style='border: 3px solid black;'>".$row["ID"]."</td>
        <td style='border: 3px solid black;'>".$row["CATEGORIA"]."</td>
        <td style='border: 3px solid black;'>
        <a href='VIEW_INDIV_EXERCI_INSTRU.php?id_exerc=".$row["ID"]."'><button type='button'> EXERCICIOS</button></a> |
        <a href='CADASTRO_EXERCI_INSTRU.php?id_aula=".$row["ID"]."'><button type='button'>ADD EXERCICIO</button></a></td></tr>";

        }
    echo "</table>";
    echo"<br><a href='VIEW_ALL_EXERCI_INSTRU.php?id_aluno=".$id_aluno."'><button type='button'>EXIBIR EXERCICIOS</button></a>";
    echo"<br><br><a href='MENU_INSTRUTOR.php?id_aluno=".$id_aluno."'><button type='button'>VOLTAR</button></a>";
} else {
    echo "0 resultados";
}

$conn->close();
?>


</body>